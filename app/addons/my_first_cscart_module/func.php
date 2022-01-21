<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Enum\YesNo;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_my_first_cscart_module_get_users($params, &$fields, &$sortings, $condition, &$join, $auth) {

    if (empty($params['p_ids']) || empty($params['product_view_id'])) {
        $join .= db_quote(" LEFT JOIN ?:orders ON ?:orders.user_id = ?:users.user_id AND ?:orders.is_parent_order != ?s ", YesNo::YES);
    }

    $fields[] = "COUNT(?:orders.order_id) as orders_count";

    $sortings["orders_count"] = "orders_count";

    //    fn_print_r($sortings);
}

function fn_my_first_cscart_module_get_products($params, &$fields, &$sortings, $condition, $join, $sorting, $group_by, $lang_code, $having) {
    $fields["my_first_cscart_module_setting"] = "products.my_first_cscart_module_setting";
    $sortings["my_first_cscart_module_setting"] = "products.my_first_cscart_module_setting";
//    fn_print_r($sortings);
}

//function fn_my_first_cscart_module_global_update_products($table, $field, $value, $type, $msg, $update_data) {
//    fn_print_r("gdrgdrgggggggggggggggd");
//}

function fn_my_first_cscart_module_get_order_info(&$order, $additional_data) {
//    $order = "";
//    $additional_data = "";

    if ( (Registry::get("runtime.mode") == "print_invoice") && !isset($order["product_groups"][0]["products"][1061624811]["main_pair"]) ) {
        $downloads_exist = false;
        foreach ($order['products'] as $k => $v) {

            if (!$downloads_exist && !empty($v['extra']['is_edp']) && $v['extra']['is_edp'] == 'Y') {
                $downloads_exist = true; // Цифровой товар!
            }

            $order_info['products'][$k]['main_pair'] = fn_get_cart_product_icon(
                $v['product_id'], $order['products'][$k]
            );
        }
//        fn_print_r("Условие if сработало");
    }


//    fn_print_r($order["product_groups"][0]["products"][1061624811]);
//    fn_print_r($order["product_groups"][0]["products"][1061624811]["main_pair"]["detailed"]);

//    fn_print_r($order["product_groups"][0]["products"][1061624811]["main_pair"]["detailed"]["image_path"]);
//    fn_print_r($order["product_groups"][0]["products"][1061624811]["main_pair"]["detailed"]["http_image_path"]);
//    fn_print_r($order["product_groups"][0]["products"][1061624811]["main_pair"]["detailed"]["absolute_path"]);
//    fn_print_r($order["product_groups"][0]["products"][1061624811]["main_pair"]["detailed"]["relative_path"]);

//    fn_print_r($order["product_groups"][0]["products"][1061624811]["main_pair"]["detailed"]["https_image_path"]);
}
