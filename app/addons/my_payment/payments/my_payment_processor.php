<?php

/**
 * @var array $processor_data
 * @var array $order_info
 * @var string $mode
 */

if (!defined('BOOTSTRAP')) { die('Access denied'); }

//  *** НАЗВАНИЕ ПРОЦЕССОРА  ***
//  !!! my_payment_processor !!!
//  *** Писать правильно в адресную строку  ***
//  *** fn_url("payment_notification.response?payment=my_payment_processor&order_id=" . $order_info['order_id'] )  ***

//fn_url("payment_notification.
//fn_url("payment_notification.response?payment=my_payment_processor&order_id=" . $order_info['order_id'] );
//fn_url("dispatch=checkout.complete&order_id=" . $order_info['order_id'] );

//if (!defined('BOOTSTRAP')) { die('Access denied'); }
fn_print_r("my_payment processor 1");

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

    fn_print_die("Обработка ответа от платёжной системы окончена");

} else {
    fn_print_r(
        "fn_url(\"payment_notification.ok?payment=my_payment_processor&order_id=98\"):",
        fn_url("payment_notification.ok?payment=my_payment_processor&order_id=98")
    );
//    $my_payment_url = fn_url("payment_notification.ok?payment=my_payment_processor&order_id=98")
//
//    $post_data = array(
//        'merchant_id' => $processor_data['processor_params']['merchant_id'],
//        'merchant_user_id' => $processor_data['processor_params']['merchant_user_id'],
//        'service_id' => $processor_data['processor_params']['service_id'],
//        'transaction_param' => $order_info['order_id'],
//        'amount' => $order_info['total'],
//        'return_url' => fn_url('dispatch=checkout.complete&order_id=' . $order_info['order_id'] )
//    );
//
//    $order_info = fn_get_order_info($_POST['merchant_trans_id']);
//    fn_change_order_status($order_info['order_id'], 'O');
//    fn_create_payment_form($my_payment_url, $post_data, 'CLICK Uzbekistan', false, 'get');

    fn_print_die("Отправка формы и fn_print_die");

//    fn_print_r($order_info);
//    fn_print_r($processor_data);
}
