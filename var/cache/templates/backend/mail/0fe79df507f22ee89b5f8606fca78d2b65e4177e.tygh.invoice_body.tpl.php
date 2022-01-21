<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\reward_points\orders\invoice_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7186015861ea77cb2476b6-80441821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe79df507f22ee89b5f8606fca78d2b65e4177e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\reward_points\\orders\\invoice_body.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7186015861ea77cb2476b6-80441821',
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
  'unifunc' => 'content_61ea77cb24f7a5_11921568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb24f7a5_11921568')) {function content_61ea77cb24f7a5_11921568($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price_in_points'));
?>


<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['price']) {?>
    <p><?php echo $_smarty_tpl->__("price_in_points");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['extra']['points_info']['price'], ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?><?php }} ?>
