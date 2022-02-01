<?php

/**
 * @var array $processor_data
 * @var array $order_info
 * @var string $mode
 */

if (!defined('BOOTSTRAP')) { die('Access denied'); }

//  *** НАЗВАНИЕ СКРИПТА ПРОЦЕССОРА  ***
//  !!! my_payment_processor !!!
//  *** Писать правильно в адресную строку  ***
//  *** fn_url("payment_notification.response?payment=my_payment_processor&order_id=" . $order_info['order_id'] )  ***
//  *** НАЗВАНИЕ ПЛАТЕЖА  ***
//  !!! my_payment !!!

//fn_url("payment_notification.
//fn_url("payment_notification.response?payment=my_payment_processor&order_id=" . $order_info['order_id'] );
//fn_url("dispatch=checkout.complete&order_id=" . $order_info['order_id'] );

//if (!defined('BOOTSTRAP')) { die('Access denied'); }
//fn_print_r("my_payment processor 1");

$order_id = isset($_REQUEST['order_id'])
    ? $_REQUEST['order_id']
    : null;

// Return from my.click.uz/services/pay
if (defined('PAYMENT_NOTIFICATION')) {
    fn_print_r($_REQUEST);

    if ( fn_check_payment_script('click_uz.php', $_POST['merchant_trans_id'], $processor_data)) {
        $result = array();

        if ($mode == "ok" || $mode == 'prepare') {

            fn_print_r("Ok");
            $result = fn_validate_my_payment_request( $_POST );

        } elseif ($mode == "fail" || $mode == 'complete') {

            fn_print_r("Fail");
            $result = fn_validate_my_payment_request( $_POST );

            $order_info = fn_get_order_info($_POST['merchant_trans_id']);
            $formatter = Tygh::$app['formatter'];

            fn_update_order_payment_info($order_info['order_id'], array(
                __('addons.click_uz.click_paydoc_id') => $_POST['click_paydoc_id'],
                __('addons.click_uz.payment_receiving_time') => $formatter->asDatetime(TIME)
            ));

            if( $result['error'] == 0 ) {
                $new_status = $processor_data['processor_params']['paid_status'] ? $processor_data['processor_params']['paid_status'] : 'P';
                fn_change_order_status($order_info['order_id'], $new_status);
            } elseif( $result['error'] == -9 ) {
                fn_change_order_status($order_info['order_id'], 'I');
            } elseif( $result['error'] != -4 ) {
                fn_change_order_status($order_info['order_id'], 'F');
            } elseif( $result['error'] < 0 ) {
                fn_change_order_status($order_info['order_id'], 'F');
            }
        }

        echo json_encode( $result );
    } else {
        echo json_encode( array(
            'error'      => CLICK_ERROR_USER_NOT_EXIST,
            'error_note' => __( 'addons.click_uz.error_transaction_not_exist' )
        ));
    }

    fn_print_die("Обработка ответа от платёжной системы окончена");
} else {
//    fn_print_r($order_info);
//    fn_print_r($processor_data);

//    fn_change_order_status() меняет статус заказа на один из следующих параметров:
//    "C" = Выполнен
//    "O" = Открытый
//    "F" = Неудавшийся
//    "D" = Отклонен
//    "B" = Отложен
//    "I" = Аннулирован
//    "Y" = Ожидает звонка
//    "A" = Fraud checking
    fn_change_order_status($order_info['order_id'], 'O'); // меняем на "O" = Открытый заказ

    $sending_data = array(
        'merchant_id' => $processor_data['processor_params']['merchant_id'],
        'merchant_user_id' => $processor_data['processor_params']['merchant_user_id'],
        'service_id' => $processor_data['processor_params']['service_id'],
        'transaction_param' => $order_info['order_id'],
        'amount' => $order_info['total'],
        'return_url' => fn_url('dispatch=checkout.complete&order_id=' . $order_info['order_id'] )
    );
    $data['click_trans_id'],
        $data['service_id'],
        $data['merchant_trans_id'],//transaction_param
        $data['amount'],
        $data['action'],
        $data['sign_time']
        )
    || $data['action'] == 1 && ! isset($data['merchant_prepare_id'])



    $my_payment_ok_url = fn_url("payment_notification.ok?payment=my_payment_processor&order_id=".$order_info['order_id']);
//    $my_payment_fail_url = fn_url("payment_notification.fail?payment=my_payment_processor&order_id=".$order_info['order_id']);
    fn_create_payment_form($my_payment_ok_url, $sending_data, 'my_payment', false, 'POST');

    fn_print_die("Отправка формы и fn_print_die");
}
