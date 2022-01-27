<?php
//my_payment processor
//fn_url("payment_notification.

/**
 * @var array $processor_data
 * @var array $order_info
 * @var string $mode
 */

use Tygh\Languages\Languages;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

$order_id = isset($_REQUEST['order_id'])
    ? $_REQUEST['order_id']
    : null;

// Return from my.click.uz/services/pay
if (defined('PAYMENT_NOTIFICATION')) {
    fn_print_r($_REQUEST);
    if ($mode == "ok") {
        fn_print_r("Ok");
    } elseif ($mode == "fail") {
        fn_print_r("Fail");
    }
//    $processor_data = array();
//    if ( fn_check_payment_script('my_payment_processor.php', $_POST['merchant_trans_id'], $processor_data)) {
//        $result = array();
//        if ($mode == 'prepare') {
//            $result = fn_validate_click_request( $_POST );
//        } elseif ($mode == 'complete') {
//            $result = fn_validate_click_request( $_POST );
//            $order_info = fn_get_order_info($_POST['merchant_trans_id']);
//            $formatter = Tygh::$app['formatter'];
//            fn_update_order_payment_info($order_info['order_id'], array(
//                __('addons.click_uz.click_paydoc_id') => $_POST['click_paydoc_id'],
//                __('addons.click_uz.payment_receiving_time') => $formatter->asDatetime(TIME)
//            ));
//            if( $result['error'] == 0 ) {
//                $new_status = $processor_data['processor_params']['paid_status'] ? $processor_data['processor_params']['paid_status'] : 'P';
//                fn_change_order_status($order_info['order_id'], $new_status);
//            } elseif( $result['error'] == -9 ) {
//                fn_change_order_status($order_info['order_id'], 'I');
//            } elseif( $result['error'] != -4 ) {
//                fn_change_order_status($order_info['order_id'], 'F');
//            } elseif( $result['error'] < 0 ) {
//                fn_change_order_status($order_info['order_id'], 'F');
//            }
//        }
//        echo json_encode( $result );
//    } else {
//        echo json_encode( array(
//            'error'      => CLICK_ERROR_USER_NOT_EXIST,
//            'error_note' => __('addons.click_uz.error_transaction_not_exist')
//        ));
//    }

    fn_print_die("Обработка ответа от платёжной системы окончена");
} else {
    $click_url = "https://my.click.uz/services/pay/";
    $post_data = array(
        'merchant_id' => $processor_data['processor_params']['merchant_id'],
        'merchant_user_id' => $processor_data['processor_params']['merchant_user_id'],
        'service_id' => $processor_data['processor_params']['service_id'],
        'transaction_param' => $order_info['order_id'],
        'amount' => $order_info['total'],
        'return_url' => fn_url('dispatch=checkout.complete&order_id=' . $order_info['order_id'] )
    );
    fn_change_order_status($order_info['order_id'], 'O');
    fn_create_payment_form($click_url, $post_data, 'CLICK Uzbekistan', false, 'get');
//    fn_print_r($order_info);
//    fn_print_r($processor_data);
    fn_print_die("Отправка формы");
}
