<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 12:13:21
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\mobile_app\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54280292461d2be31b7ac04-23752287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b81ff28d791b75e67cf2d76bd5acf5d7bbb7b65' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\mobile_app\\hooks\\index\\scripts.post.tpl',
      1 => 1641195654,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54280292461d2be31b7ac04-23752287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'logos' => 0,
    'mobile_app_settings' => 0,
    'banner_title' => 0,
    'banner_button_text' => 0,
    'banner_icon_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2be31b8f424_95901350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2be31b8f424_95901350')) {function content_61d2be31b8f424_95901350($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.we_also_have_a_mobile_app','mobile_app.view_demo','mobile_app.open','mobile_app.we_also_have_a_mobile_app','mobile_app.view_demo','mobile_app.open'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/addons/mobile_app/lib/jquery.smartbanner.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['banner_title'] = new Smarty_variable($_smarty_tpl->__("mobile_app.we_also_have_a_mobile_app"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['banner_icon_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['logos']->value['favicon']['image']['image_path'],"t"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['banner_button_text'] = new Smarty_variable($_smarty_tpl->__("mobile_app.view_demo"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url']) {?>
    <?php $_smarty_tpl->tpl_vars['banner_icon_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['banner_button_text'] = new Smarty_variable($_smarty_tpl->__("mobile_app.open"), null, 0);?>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        $.smartbanner({
            daysHidden: 15,
            daysReminder: 90,
            appStoreLanguage: '<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
            title: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['banner_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            author: '',
            button: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['banner_button_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            icon: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['banner_icon_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/mobile_app/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/mobile_app/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/mobile_app/lib/jquery.smartbanner.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['banner_title'] = new Smarty_variable($_smarty_tpl->__("mobile_app.we_also_have_a_mobile_app"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['banner_icon_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['logos']->value['favicon']['image']['image_path'],"t"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['banner_button_text'] = new Smarty_variable($_smarty_tpl->__("mobile_app.view_demo"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url']) {?>
    <?php $_smarty_tpl->tpl_vars['banner_icon_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['mobile_app_settings']->value['banner_icon_url'], null, 0);?>
    <?php $_smarty_tpl->tpl_vars['banner_button_text'] = new Smarty_variable($_smarty_tpl->__("mobile_app.open"), null, 0);?>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        $.smartbanner({
            daysHidden: 15,
            daysReminder: 90,
            appStoreLanguage: '<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
            title: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['banner_title']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            author: '',
            button: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['banner_button_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
            icon: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['banner_icon_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
