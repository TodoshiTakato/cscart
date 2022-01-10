<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\update_product_buttons.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22319695561dbce6ee533a3-40021179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ad6157f96b2634cd6c33bf0ba79b00a0f31e452' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\update_product_buttons.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '22319695561dbce6ee533a3-40021179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6ee597d3_64693460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6ee597d3_64693460')) {function content_61dbce6ee597d3_64693460($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.sell_this'));
?>
<?php if ($_smarty_tpl->tpl_vars['id']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <!-- Overridden by the Common Products for Vendors add-on -->
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'class'=>"btn btn-primary",'text'=>$_smarty_tpl->__("master_products.sell_this"),'href'=>"products.sell_master_product?master_product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'method'=>"post"));?>

<?php }?><?php }} ?>
