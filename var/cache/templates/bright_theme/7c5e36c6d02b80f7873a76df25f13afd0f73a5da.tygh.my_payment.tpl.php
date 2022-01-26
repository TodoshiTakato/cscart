<?php /* Smarty version Smarty-3.1.21, created on 2022-01-26 16:10:58
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\my_payment\views\orders\components\payments\my_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91437750061f10b069dd327-37964813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c5e36c6d02b80f7873a76df25f13afd0f73a5da' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\my_payment\\views\\orders\\components\\payments\\my_payment.tpl',
      1 => 1643194540,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '91437750061f10b069dd327-37964813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f10b069de477_25479831',
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f10b069de477_25479831')) {function content_61f10b069de477_25479831($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div style="display: block">
    <div>
        <h1>my_payment Animation</h1>
    </div>

    <div>
        <p>
            The animation-iteration-count property can be set to infinite to let the animation run for ever:
        </p>
    </div>

    <div class="my_payment_animation"></div>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_payment/views/orders/components/payments/my_payment.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_payment/views/orders/components/payments/my_payment.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div style="display: block">
    <div>
        <h1>my_payment Animation</h1>
    </div>

    <div>
        <p>
            The animation-iteration-count property can be set to infinite to let the animation run for ever:
        </p>
    </div>

    <div class="my_payment_animation"></div>
</div><?php }?><?php }} ?>
