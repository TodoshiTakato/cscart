<?php

function fn_click_uz_install() {
    fn_click_uz_uninstall();

    $_data = array(
        'processor' => 'Click Uzbekistan',
        'processor_script' => 'click_uz.php',
        'processor_template' => '',
        'admin_template' => 'click_uz.tpl',
        'callback' => 'N',
        'type' => 'P',
        'addon' => 'click_uz'
    );

    db_query("INSERT INTO ?:payment_processors ?e", $_data);
}

function fn_click_uz_uninstall() {
    db_query("DELETE FROM ?:payment_processors WHERE processor_script = ?s", "click_uz.php");
}

function fn_click_uz_user_init(&$auth, &$user_info, &$first_init)
{
    $orders_list = array();
    if (!empty(Tygh::$app['session']['cart']['processed_order_id'])) {
        $orders_list = array_merge($orders_list, (array)Tygh::$app['session']['cart']['processed_order_id']);
    }
    if (!empty(Tygh::$app['session']['cart']['failed_order_id'])) {
        $orders_list = array_merge($orders_list, (array)Tygh::$app['session']['cart']['failed_order_id']);
    }
    foreach ($orders_list as $order_id) {
        if (fn_is_click_uz_payment_received($order_id)) {
            fn_clear_cart(Tygh::$app['session']['cart'], true, true);
            break;
        }
    }
}

function fn_settings_variants_addons_click_uz_paid_status() {
    $data = array(
        '' => ' -- '
    );

    foreach (fn_get_statuses(STATUSES_ORDER) as $status) {
        $data[$status['status']] = $status['description'];
    }

    return $data;
}

function fn_is_click_uz_payment_received($order_id) {
    $order_info = fn_get_order_info($order_id);

    return !empty($order_info['payment_info']['addons.click_uz.payment_receiving_time']);
}

function fn_validate_click_request( $data ) {

    if( ! isset(
        $data['click_trans_id'],
        $data['service_id'],
        $data['merchant_trans_id'],
        $data['amount'],
        $data['action'],
        $data['sign_time']) ||
        $data['action'] == 1 && ! isset($data['merchant_prepare_id'])
    ) {
        return array(
            'error'      => CLICK_ERROR_IN_REQUEST,
            'error_note' => __( 'addons.click_uz.error_in_request' )
        );
    }

    $result['error'] = CLICK_SUCCESS;

    $result['error_note'] = __('addons.click_uz.success');

    $result['click_trans_id'] = $_POST['click_trans_id'];

    $result['merchant_trans_id'] = $_POST['merchant_trans_id'];

    if( $data['action'] == 0 ) {
        $result['merchant_prepare_id'] = $_POST['merchant_trans_id'];
    } else {
        $result['merchant_confirm_id'] = $_POST['merchant_trans_id'];
    }


    $order = fn_get_order_info($data['merchant_trans_id']);

    $processor_data = fn_get_processor_data($order['payment_id']);

    $signString = $data['click_trans_id'] .
                  $data['service_id'] .
                  $processor_data['processor_params']['secret_key'].
                  $data['merchant_trans_id'] .
                  ($data['action'] == 1 ? $data['merchant_prepare_id'] : '') .
                  $data['amount'] .
                  $data['action'] .
                  $data['sign_time'];

    $signString = md5( $signString );

    if ( $signString !== $data['sign_string'] ) {
        return array_merge($result, array(
            'error'      => CLICK_ERROR_SIGN_CHECK,
            'error_note' => __( 'addons.click_uz.error_sign_check' )
        ));
    }
    if( abs($order['total'] - (float)$data['amount']) > 0.01 ) {
        return array_merge($result, array(
            'error'      => CLICK_ERROR_AMOUNT,
            'error_note' => __( 'addons.click_uz.error_amount' )
        ));
    }

    if( ! in_array($data['action'], array(0,1) ) ) {
        return array_merge($result, array(
            'error'      => CLICK_ERROR_ACTION_NOT_FOUND,
            'error_note' => __( 'addons.click_uz.error_action_not_found' )
        ));
    }
    $result['status'] = $order['status'];
    $result['order_status'] = $processor_data['processor_params']['paid_status'];

//    if ($order['status'] == 'P') {
//        return array_merge($result, array(
//            'error'      => CLICK_ERROR_ALREADY_PAID,
//            'error_note' => __( 'addons.click_uz.error_already_paid' )
//        ));
//    }

    if( ! $order ) {
        return array_merge($result, array(
            'error'      => CLICK_ERROR_USER_NOT_EXIST,
            'error_note' => __( 'addons.click_uz.error_user_not_exist' )
        ));
    }

    if( $data['action'] == 1 && $data['merchant_prepare_id'] != $data['merchant_trans_id'] ) {
        return array_merge($result, array(
            'error'      => CLICK_ERROR_TRANSACTION_NOT_EXIST,
            'error_note' => __( 'addons.click_uz.error_transaction_not_exist' )
        ));
    }

    if( $data['error'] < 0 || $data['error'] == 0 && $order['status'] == 'I') {
        return array_merge($result, array(
            'error'      => CLICK_ERROR_TRANSACTION_CANCELLED,
            'error_note' => __( 'addons.click_uz.error_transaction_cancelled' )
        ));
    }

    return $result;
}