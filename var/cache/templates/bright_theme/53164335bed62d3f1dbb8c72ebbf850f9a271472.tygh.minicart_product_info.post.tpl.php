<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 14:35:17
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\my_first_cscart_module\hooks\checkout\minicart_product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74051514861d2df7591bc24-37823537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53164335bed62d3f1dbb8c72ebbf850f9a271472' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\my_first_cscart_module\\hooks\\checkout\\minicart_product_info.post.tpl',
      1 => 1641209608,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '74051514861d2df7591bc24-37823537',
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
  'unifunc' => 'content_61d2df7595d562_56923929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2df7595d562_56923929')) {function content_61d2df7595d562_56923929($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>Test hook<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_first_cscart_module/hooks/checkout/minicart_product_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_first_cscart_module/hooks/checkout/minicart_product_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>Test hook<?php }?><?php }} ?>
