<?php /* Smarty version Smarty-3.1.21, created on 2022-01-24 14:12:36
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\warehouses\components\shipping_delay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103735036661ee6d841a57f2-44999267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45beabe36cf8b4017b3c0195663fda2a9de9964c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\warehouses\\components\\shipping_delay.tpl',
      1 => 1641195655,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103735036661ee6d841a57f2-44999267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'warn_about_delay' => 0,
    'uid' => 0,
    'shipping_delay' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ee6d841b57b4_89908863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee6d841b57b4_89908863')) {function content_61ee6d841b57b4_89908863($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warehouses.shipping_delay.description','warehouses.shipping_delay.description.default','warehouses.shipping_delay.description','warehouses.shipping_delay.description.default'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['warn_about_delay']->value) {?>
    <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("warehouse_shipping_delay_".((string)$_smarty_tpl->tpl_vars['uid']->value), null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['shipping_delay']->value) {?>
            <?php echo $_smarty_tpl->__("warehouses.shipping_delay.description",array("[shipping_delay]"=>$_smarty_tpl->tpl_vars['shipping_delay']->value));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("warehouses.shipping_delay.description.default");?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="ty-warehouses-shipping__delay">
        <?php echo Smarty::$_smarty_vars['capture']["warehouse_shipping_delay_".((string)$_smarty_tpl->tpl_vars['uid']->value)];?>

    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/warehouses/components/shipping_delay.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/warehouses/components/shipping_delay.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['warn_about_delay']->value) {?>
    <?php $_smarty_tpl->tpl_vars['uid'] = new Smarty_variable(uniqid(), null, 0);?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("warehouse_shipping_delay_".((string)$_smarty_tpl->tpl_vars['uid']->value), null, null); ob_start(); ?>
        <?php if ($_smarty_tpl->tpl_vars['shipping_delay']->value) {?>
            <?php echo $_smarty_tpl->__("warehouses.shipping_delay.description",array("[shipping_delay]"=>$_smarty_tpl->tpl_vars['shipping_delay']->value));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("warehouses.shipping_delay.description.default");?>

        <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="ty-warehouses-shipping__delay">
        <?php echo Smarty::$_smarty_vars['capture']["warehouse_shipping_delay_".((string)$_smarty_tpl->tpl_vars['uid']->value)];?>

    </div>
<?php }?>
<?php }?><?php }} ?>
