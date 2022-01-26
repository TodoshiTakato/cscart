<?php /* Smarty version Smarty-3.1.21, created on 2022-01-26 17:13:44
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\common\no_items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112991573561f13af8448e91-11756430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1285efc4483f93b8988d85a71c848e276d869a99' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\common\\no_items.tpl',
      1 => 1641195374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112991573561f13af8448e91-11756430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'reset_url' => 0,
    'config' => 0,
    'type' => 0,
    'text_no_found' => 0,
    'no_items_extended' => 0,
    'no_items_meta' => 0,
    'reset_meta' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f13af849be64_24542208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f13af849be64_24542208')) {function content_61f13af849be64_24542208($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('object_not_found','text_nothing_found','reset','object_not_found','text_nothing_found','reset'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['reset_url']->value) {?>
    <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
    <?php $_smarty_tpl->tpl_vars['text_no_found'] = new Smarty_variable($_smarty_tpl->__("object_not_found",array("[object]"=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value))), null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['text_no_found']->value) {?>
    <?php $_smarty_tpl->tpl_vars['text_no_found'] = new Smarty_variable($_smarty_tpl->__("text_nothing_found"), null, 0);?>
<?php }?>

<div class="ty-no-items cm-pagination-container <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>ty-no-items--extended<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_items_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['text_no_found']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-mt-s <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reset_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/no_items.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/no_items.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['reset_url']->value) {?>
    <?php $_smarty_tpl->tpl_vars['reset_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['config']->value['current_url'], null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
    <?php $_smarty_tpl->tpl_vars['text_no_found'] = new Smarty_variable($_smarty_tpl->__("object_not_found",array("[object]"=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value))), null, 0);?>
<?php } elseif (!$_smarty_tpl->tpl_vars['text_no_found']->value) {?>
    <?php $_smarty_tpl->tpl_vars['text_no_found'] = new Smarty_variable($_smarty_tpl->__("text_nothing_found"), null, 0);?>
<?php }?>

<div class="ty-no-items cm-pagination-container <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>ty-no-items--extended<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_items_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['text_no_found']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['no_items_extended']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['reset_url']->value), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-mt-s <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reset_meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reset");?>
</a>
    <?php }?>
</div>
<?php }?><?php }} ?>
