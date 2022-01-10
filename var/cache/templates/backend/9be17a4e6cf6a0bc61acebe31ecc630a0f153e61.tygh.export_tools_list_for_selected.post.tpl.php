<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 13:17:08
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\quickbooks\hooks\orders\export_tools_list_for_selected.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160890104861d5702455bed2-24882294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be17a4e6cf6a0bc61acebe31ecc630a0f153e61' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\quickbooks\\hooks\\orders\\export_tools_list_for_selected.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '160890104861d5702455bed2-24882294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d5702455f242_65841699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d5702455f242_65841699')) {function content_61d5702455f242_65841699($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('export_to_quickbooks'));
?>
<?php if ($_smarty_tpl->tpl_vars['orders']->value&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_to_quickbooks"),'dispatch'=>"dispatch[quickbooks_export.export_to_iif]",'form'=>"orders_list_form"));?>
</li>
<?php }?><?php }} ?>
