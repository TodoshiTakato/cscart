<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 14:48:28
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\common\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160305728461d2e28c65b074-55948483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7314af3af11c6ea73bd346d557cd3492589f6b2e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\common\\modifier.tpl',
      1 => 1641195374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '160305728461d2e28c65b074-55948483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'is_integer' => 0,
    'mod_value' => 0,
    'display_sign' => 0,
    'class' => 0,
    'mod_type' => 0,
    'span_id' => 0,
    'no_ids' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2e28c677dd1_05188654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2e28c677dd1_05188654')) {function content_61d2e28c677dd1_05188654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['is_integer']->value==true) {
$_smarty_tpl->tpl_vars["mod_value"] = new Smarty_variable(round($_smarty_tpl->tpl_vars['mod_value']->value), null, 0);
}
if ($_smarty_tpl->tpl_vars['display_sign']->value) {
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['mod_value']->value>0) {?>+<?php } else { ?>-<?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
if ($_smarty_tpl->tpl_vars['mod_type']->value=="A"||$_smarty_tpl->tpl_vars['mod_type']->value=="F") {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0);
} else {
if (($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value)||$_smarty_tpl->tpl_vars['class']->value) {?><span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars(abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value)||$_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>%<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/modifier.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/modifier.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_integer']->value==true) {
$_smarty_tpl->tpl_vars["mod_value"] = new Smarty_variable(round($_smarty_tpl->tpl_vars['mod_value']->value), null, 0);
}
if ($_smarty_tpl->tpl_vars['display_sign']->value) {
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['mod_value']->value>0) {?>+<?php } else { ?>-<?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
if ($_smarty_tpl->tpl_vars['mod_type']->value=="A"||$_smarty_tpl->tpl_vars['mod_type']->value=="F") {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>abs($_smarty_tpl->tpl_vars['mod_value']->value)), 0);
} else {
if (($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value)||$_smarty_tpl->tpl_vars['class']->value) {?><span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['span_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars(abs($_smarty_tpl->tpl_vars['mod_value']->value), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['span_id']->value&&!$_smarty_tpl->tpl_vars['no_ids']->value)||$_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>%<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
}?><?php }} ?>
