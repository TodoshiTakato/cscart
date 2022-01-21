<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\barcode\hooks\orders\invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23042660061ea77cb356c75-61261561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb843dc7478a1465899eec062de925854a104a60' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\barcode\\hooks\\orders\\invoice.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '23042660061ea77cb356c75-61261561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb361aa8_22583828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb361aa8_22583828')) {function content_61ea77cb361aa8_22583828($_smarty_tpl) {?><div class="center" style="text-align:center">
    <img src="<?php echo htmlspecialchars(fn_url("image.barcode?id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id'])."&type=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['type'])."&width=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['width'])."&height=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['height'])."&xres=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['resolution'])."&font=".((string)$_smarty_tpl->tpl_vars['addons']->value['barcode']['text_font'])."&no_session=Y"), ENT_QUOTES, 'UTF-8');?>
" alt="BarCode" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['barcode']['height'], ENT_QUOTES, 'UTF-8');?>
">
</div><?php }} ?>
