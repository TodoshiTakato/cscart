<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\action_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200900639661d3e7b6df23f1-31907123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2478b6d475e554693ecfd7056640c11f973db8fe' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\action_buttons.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '200900639661d3e7b6df23f1-31907123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_common_products_action_buttons' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b6df62f6_00772536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b6df62f6_00772536')) {function content_61d3e7b6df62f6_00772536($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_product_addition','export_found_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['show_common_products_action_buttons']->value) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_product_addition"),'href'=>"products.m_add"));?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_found_products"),'href'=>"products.export_found.master"));?>
</li>
    <?php }?>
<?php }?><?php }} ?>
