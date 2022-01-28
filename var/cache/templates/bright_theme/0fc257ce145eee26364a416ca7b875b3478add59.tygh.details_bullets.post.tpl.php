<?php /* Smarty version Smarty-3.1.21, created on 2022-01-28 11:58:43
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\discussion\hooks\orders\details_bullets.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21192323861f3942399d062-55975986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc257ce145eee26364a416ca7b875b3478add59' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\discussion\\hooks\\orders\\details_bullets.post.tpl',
      1 => 1641195380,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21192323861f3942399d062-55975986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'order_info' => 0,
    'addons' => 0,
    'discussion' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f394239b06f7_10020615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f394239b06f7_10020615')) {function content_61f394239b06f7_10020615($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('start_communication','start_communication'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate']=="Y"&&!$_smarty_tpl->tpl_vars['discussion']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("start_communication"),'but_href'=>"orders.initiate_discussion?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-chat"), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/hooks/orders/details_bullets.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/hooks/orders/details_bullets.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['order_info']->value['order_id'],"O"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['order_initiate']=="Y"&&!$_smarty_tpl->tpl_vars['discussion']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"ty-btn__text",'but_role'=>"text",'but_text'=>$_smarty_tpl->__("start_communication"),'but_href'=>"orders.initiate_discussion?order_id=".((string)$_smarty_tpl->tpl_vars['order_info']->value['order_id']),'but_icon'=>"ty-orders__actions-icon ty-icon-chat"), 0);?>

<?php }
}?><?php }} ?>
