<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\reward_points\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:863684161e520991bf387-41308716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32996109f221b803a376ec3fc9e326038b0f285b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\orders\\product_info.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '863684161e520991bf387-41308716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e520991c7e19_07994332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e520991c7e19_07994332')) {function content_61e520991c7e19_07994332($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points'));
?>
<!-- Hook Reward points start -->
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']&&$_smarty_tpl->tpl_vars['oi']->value) {?>
<p><strong><?php echo $_smarty_tpl->__("price_in_points");?>
:</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<!-- Hook Reward points end --><?php }} ?>
