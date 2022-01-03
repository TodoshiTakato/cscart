<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 12:13:14
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\mobile_app\hooks\index\meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48033977661d2be2a7bce48-15473298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf168b0c911a443ba7ae93358bcb36b3004fe75' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\mobile_app\\hooks\\index\\meta.post.tpl',
      1 => 1641195654,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48033977661d2be2a7bce48-15473298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'mobile_app_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2be2a7c7c21_08915408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2be2a7c7c21_08915408')) {function content_61d2be2a7c7c21_08915408($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['app_store_app_id']) {?>
    <meta name="apple-itunes-app" content="app-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['app_store_app_id'], ENT_QUOTES, 'UTF-8');?>
"/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['google_play_app_id']) {?>
    <meta name="google-play-app" content="app-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['google_play_app_id'], ENT_QUOTES, 'UTF-8');?>
"/>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/mobile_app/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/mobile_app/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['app_store_app_id']) {?>
    <meta name="apple-itunes-app" content="app-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['app_store_app_id'], ENT_QUOTES, 'UTF-8');?>
"/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['google_play_app_id']) {?>
    <meta name="google-play-app" content="app-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile_app_settings']->value['promotion']['google_play_app_id'], ENT_QUOTES, 'UTF-8');?>
"/>
<?php }?>
<?php }?><?php }} ?>
