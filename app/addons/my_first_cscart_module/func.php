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
