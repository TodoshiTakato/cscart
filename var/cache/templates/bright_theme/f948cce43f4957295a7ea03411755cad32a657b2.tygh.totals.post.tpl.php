<?php /* Smarty version Smarty-3.1.21, created on 2022-01-28 11:58:44
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\reward_points\hooks\orders\totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108736454461f39424309cb0-41205785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f948cce43f4957295a7ea03411755cad32a657b2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\reward_points\\hooks\\orders\\totals.post.tpl',
      1 => 1641195379,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108736454461f39424309cb0-41205785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f3942431a897_48179639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f3942431a897_48179639')) {function content_61f3942431a897_48179639($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points','points_lowercase','points_in_use','points_lowercase','points','points_lowercase','points_in_use','points_lowercase'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr class="ty-orders-summary__row">
        <td><strong><?php echo $_smarty_tpl->__("points");?>
:&nbsp;</strong></td>
        <td><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']));?>
</td>
    </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr class="ty-orders-summary__row">
        <td><strong><?php echo $_smarty_tpl->__("points_in_use");?>
</strong>&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points']));?>
)&nbsp;<strong>:</strong></td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/orders/totals.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/orders/totals.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']) {?>
    <tr class="ty-orders-summary__row">
        <td><strong><?php echo $_smarty_tpl->__("points");?>
:&nbsp;</strong></td>
        <td><?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['reward']));?>
</td>
    </tr>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']) {?>
    <tr class="ty-orders-summary__row">
        <td><strong><?php echo $_smarty_tpl->__("points_in_use");?>
</strong>&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['points']));?>
)&nbsp;<strong>:</strong></td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['order_info']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }
}?><?php }} ?>
