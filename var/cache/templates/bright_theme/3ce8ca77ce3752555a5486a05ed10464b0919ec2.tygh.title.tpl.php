<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 14:48:27
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\checkout\components\customer\title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170696533761d2e28bb3bc39-62450883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce8ca77ce3752555a5486a05ed10464b0919ec2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\checkout\\components\\customer\\title.tpl',
      1 => 1641195374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170696533761d2e28bb3bc39-62450883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block_title' => 0,
    'auth' => 0,
    'config' => 0,
    'return_current_url' => 0,
    'allow_multiple_profiles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2e28bb52127_51006608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2e28bb52127_51006608')) {function content_61d2e28bb52127_51006608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('lite_checkout.customer_information','sign_in','create_profile','create_profile','lite_checkout.customer_information','sign_in','create_profile','create_profile'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.customer_information") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

    
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("sign_in");?>

            </a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['allow_multiple_profiles']->value) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                href="<?php echo htmlspecialchars(fn_url("checkout.update_profile"), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("create_profile");?>
"
            ><?php echo $_smarty_tpl->__("create_profile");?>
</a>
        </div>
    <?php }?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/customer/title.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/customer/title.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="litecheckout__group">
    <div class="litecheckout__item litecheckout__item--fill">
        <h2 class="litecheckout__step-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['block_title']->value)===null||$tmp==='' ? $_smarty_tpl->__("lite_checkout.customer_information") : $tmp), ENT_QUOTES, 'UTF-8');?>
</h2>
    </div>

    
    <?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
        <div class="litecheckout__item">
            <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="auth"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="login_form") {
echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>"
                    data-ca-target-id="litecheckout_login_block"
                    class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary"
                    rel="nofollow"
            >
                <?php echo $_smarty_tpl->__("sign_in");?>

            </a>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['allow_multiple_profiles']->value) {?>
        <div class="litecheckout__item litecheckout__item--center">
            <a
                class="cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close litecheckout__link"
                href="<?php echo htmlspecialchars(fn_url("checkout.update_profile"), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-target-id="create_user_profile"
                data-ca-dialog-title="<?php echo $_smarty_tpl->__("create_profile");?>
"
            ><?php echo $_smarty_tpl->__("create_profile");?>
</a>
        </div>
    <?php }?>
</div>
<?php }?><?php }} ?>
