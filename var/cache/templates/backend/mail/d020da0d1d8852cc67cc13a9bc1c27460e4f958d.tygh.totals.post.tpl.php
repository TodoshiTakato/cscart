<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\reward_points\hooks\orders\totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166404596261ea77cb3158c2-82502575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd020da0d1d8852cc67cc13a9bc1c27460e4f958d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\reward_points\\hooks\\orders\\totals.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166404596261ea77cb3158c2-82502575',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb320af6_01816174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb320af6_01816174')) {function content_61ea77cb320af6_01816174($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reward_points','points_in_use','points_lowercase'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b><?php echo $_smarty_tpl->__("reward_points");?>
:&nbsp;</b></td>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial; unicode-bidi: bidi-override;">
        	<b style="unicode-bidi: embed;"><?php echo $_smarty_tpl->__("points_in_use");?>
</b>&nbsp;<span style="unicode-bidi: embed;">(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points']));?>
)</span><b>:</b>&nbsp;</td>
        <td style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr> 
<?php }?><?php }} ?>
