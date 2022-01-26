<?php

// Return from my.click.uz/services/pay
if (defined('PAYMENT_NOTIFICATION')) {

    fn_print_die("Обработка ответа от платёжной системы");
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
