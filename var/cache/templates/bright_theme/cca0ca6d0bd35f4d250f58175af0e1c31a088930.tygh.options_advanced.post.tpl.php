<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 14:27:51
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\reward_points\hooks\products\options_advanced.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96758504461d2ddb7b3f2c7-64454455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cca0ca6d0bd35f4d250f58175af0e1c31a088930' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\reward_points\\hooks\\products\\options_advanced.post.tpl',
      1 => 1641195379,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96758504461d2ddb7b3f2c7-64454455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'dont_show_points' => 0,
    'show_price_values' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2ddb7b4c417_66877197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2ddb7b4c417_66877197')) {function content_61d2ddb7b4c417_66877197($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&!$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reward_points/hooks/products/options_advanced.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reward_points/hooks/products/options_advanced.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><input type="hidden" name="appearance[dont_show_points]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dont_show_points']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['show_price_values']->value&&!$_smarty_tpl->tpl_vars['dont_show_points']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/reward_points/views/products/components/product_representation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }
}?><?php }} ?>
