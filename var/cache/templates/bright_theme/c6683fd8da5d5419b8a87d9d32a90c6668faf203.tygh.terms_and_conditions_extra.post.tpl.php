<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 14:48:28
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\gdpr\hooks\checkout\terms_and_conditions_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103818808161d2e28c14ba53-32924757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6683fd8da5d5419b8a87d9d32a90c6668faf203' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\gdpr\\hooks\\checkout\\terms_and_conditions_extra.post.tpl',
      1 => 1641195646,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103818808161d2e28c14ba53-32924757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'iframe_mode' => 0,
    'suffix' => 0,
    'onclick' => 0,
    'show_agreement' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2e28c163b10_07397809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2e28c163b10_07397809')) {function content_61d2e28c163b10_07397809($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_agreement'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("agreement_contents", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');", null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"checkout_place_order",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'agreement_required'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo Smarty::$_smarty_vars['capture']['agreement_contents'];?>

        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['show_agreement'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("agreement_contents_profiles_update", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');", null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"checkout_profiles_update",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'agreement_required'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo Smarty::$_smarty_vars['capture']['agreement_contents_profiles_update'];?>

        </div>
    </div>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/hooks/checkout/terms_and_conditions_extra.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/hooks/checkout/terms_and_conditions_extra.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_agreement'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("agreement_contents", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');", null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"checkout_place_order",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'agreement_required'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo Smarty::$_smarty_vars['capture']['agreement_contents'];?>

        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->tpl_vars['show_agreement'] = new Smarty_variable(false, null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("agreement_contents_profiles_update", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['iframe_mode']->value) {?>
        <?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("fn_check_agreements('".((string)$_smarty_tpl->tpl_vars['suffix']->value)."');", null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/gdpr/componentes/agreement_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"checkout_profiles_update",'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'suffix'=>$_smarty_tpl->tpl_vars['suffix']->value,'agreement_required'=>true), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['show_agreement']->value) {?>
    <div class="ty-control-group ty-checkout__terms">
        <div class="cm-field-container">
            <?php echo Smarty::$_smarty_vars['capture']['agreement_contents_profiles_update'];?>

        </div>
    </div>
<?php }?>
<?php }?><?php }} ?>
