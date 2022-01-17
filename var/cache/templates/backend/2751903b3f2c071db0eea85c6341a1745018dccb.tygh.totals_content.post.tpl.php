<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\reward_points\hooks\orders\totals_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199982022761e520992e2050-07664182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2751903b3f2c071db0eea85c6341a1745018dccb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\orders\\totals_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '199982022761e520992e2050-07664182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e520992ec333_18328595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e520992ec333_18328595')) {function content_61e520992ec333_18328595($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points','points_lowercase','points_in_use','points_lowercase'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']));?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points']));?>
):</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
