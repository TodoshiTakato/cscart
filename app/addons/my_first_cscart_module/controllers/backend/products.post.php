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

use Tygh\Registry;

if (!defined("BOOTSTRAP")) { die("Access denied"); }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    return array(CONTROLLER_STATUS_OK);
}

if ($mode == "manage") {
    //$selected_fields = Registry::get("view")->getTemplateVars("selected_fields");
    $selected_fields = Tygh::$app["view"]->getTemplateVars("selected_fields");
    $selected_fields[] = array(
        "name" => "[data][my_first_cscart_module_setting]",
        "text" => __("my_first_cscart_module_setting")
    );
    //Registry::get("view")->assign("selected_fields", $selected_fields);
    Tygh::$app["view"]->assign("selected_fields", $selected_fields);
} elseif ($mode == "m_update") {
    //$selected_fields = $_SESSION["selected_fields"];
    $selected_fields = Tygh::$app["session"]["selected_fields"];

    //$field_groups = Registry::get("view")->getTemplateVars("field_groups");
    //$filled_groups = Registry::get("view")->getTemplateVars("filled_groups");
    //$field_names = Registry::get("view")->getTemplateVars("field_names");
    $field_groups = Tygh::$app["view"]->getTemplateVars("field_groups");
    $filled_groups = Tygh::$app["view"]->getTemplateVars("filled_groups");
    $field_names = Tygh::$app["view"]->getTemplateVars("field_names");

    if (!empty($selected_fields["data"]["my_first_cscart_module_setting"])) {
        //$field_groups["A"]["my_first_cscart_module_setting"] = "products_data";
        //$filled_groups["A"]["my_first_cscart_module_setting"] = __("my_first_cscart_module_setting");
        $field_groups["A"]["my_first_cscart_module_setting"] = "products_data";
        $filled_groups["A"]["my_first_cscart_module_setting"] = __("my_first_cscart_module_setting");
    }

    if (isset($field_names["my_first_cscart_module_setting"])) {
        unset($field_names["my_first_cscart_module_setting"]);
    }

    //Registry::get("view")->assign("field_groups", $field_groups);
    //Registry::get("view")->assign("filled_groups", $filled_groups);
    //Registry::get("view")->assign("field_names", $field_names);
    Tygh::$app["view"]->assign("field_groups", $field_groups);
    Tygh::$app["view"]->assign("filled_groups", $filled_groups);
    Tygh::$app["view"]->assign("field_names", $field_names);





}