<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:31:39
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\call_requests\addons\gdpr\hooks\call_requests\call_requests_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124469864761d413fbab4a04-33944414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38111f0d3557040f4ebe010b30eebdc151e1c37f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\call_requests\\addons\\gdpr\\hooks\\call_requests\\call_requests_form.post.tpl',
      1 => 1641195379,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '124469864761d413fbab4a04-33944414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d413fbabd2b2_34762155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d413fbabd2b2_34762155')) {function content_61d413fbabd2b2_34762155($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"call_requests",'agreement_required'=>true), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/call_requests/addons/gdpr/hooks/call_requests/call_requests_form.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/call_requests/addons/gdpr/hooks/call_requests/call_requests_form.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"call_requests",'agreement_required'=>true), 0);
}?><?php }} ?>
