<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 10:45:14
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\product_list\product_data.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134387038561d54c8ae44a56-85865634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9046d65e655716d31f3bf0fed0451ef81c9e9998' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\product_list\\product_data.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134387038561d54c8ae44a56-85865634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d54c8ae46de7_74591289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d54c8ae46de7_74591289')) {function content_61d54c8ae46de7_74591289($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_name']) {?>
    <input type="hidden" id="product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_alt" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['variation_name'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<?php }} ?>
