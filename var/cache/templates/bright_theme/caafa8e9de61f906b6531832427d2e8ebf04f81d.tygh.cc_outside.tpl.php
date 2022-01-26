<?php /* Smarty version Smarty-3.1.21, created on 2022-01-26 13:40:38
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\orders\components\payments\cc_outside.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57786932961f0efc7669193-30712192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caafa8e9de61f906b6531832427d2e8ebf04f81d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\orders\\components\\payments\\cc_outside.tpl',
      1 => 1643186435,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57786932961f0efc7669193-30712192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f0efc7669690_58570831',
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f0efc7669690_58570831')) {function content_61f0efc7669690_58570831($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><hr>
<div style="width: 100%; display: flex; justify-content: center;">
    <p>THIS IS TEXT</p>
</div>
<hr><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/cc_outside.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/cc_outside.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><hr>
<div style="width: 100%; display: flex; justify-content: center;">
    <p>THIS IS TEXT</p>
</div>
<hr><?php }?><?php }} ?>
