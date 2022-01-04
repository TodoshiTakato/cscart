<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\companies\company_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6274907361d3e7b6668ff4-27541898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff29c8d242a85fb7f27c871e6738e5a5950819d9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\companies\\company_name.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6274907361d3e7b6668ff4-27541898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object' => 0,
    'clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b666c881_79613023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b666c881_79613023')) {function content_61d3e7b666c881_79613023($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.all_vendors_master_product'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['object']->value['company_id']&&$_smarty_tpl->tpl_vars['object']->value['product_id']&&!$_smarty_tpl->tpl_vars['clone']->value) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('object', null, 1);
$_smarty_tpl->tpl_vars['object']->value['company_name'] = $_smarty_tpl->__("master_products.all_vendors_master_product");
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['object'] = clone $_smarty_tpl->tpl_vars['object'];?>
<?php }?><?php }} ?>
