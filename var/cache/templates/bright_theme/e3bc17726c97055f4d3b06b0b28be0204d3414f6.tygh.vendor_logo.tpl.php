<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 10:57:57
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\blocks\vendors\vendor_logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15386808761e67305a9a180-94529881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3bc17726c97055f4d3b06b0b28be0204d3414f6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\blocks\\vendors\\vendor_logo.tpl',
      1 => 1641195374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15386808761e67305a9a180-94529881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_info' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e67305ab6814_70155481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e67305ab6814_70155481')) {function content_61e67305ab6814_70155481($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-logo-container-vendor">
    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['vendor_info']->value['company_id'],'images'=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image'],'class'=>"ty-logo-container-vendor__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_x'],"height"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_y']),'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false), 0);?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendors/vendor_logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendors/vendor_logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-logo-container-vendor">
    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['vendor_info']->value['company_id'],'images'=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image'],'class'=>"ty-logo-container-vendor__image",'image_additional_attrs'=>array("width"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_x'],"height"=>$_smarty_tpl->tpl_vars['vendor_info']->value['logos']['theme']['image']['image_y']),'show_no_image'=>false,'show_detailed_link'=>false,'capture_image'=>false), 0);?>

</div><?php }?><?php }} ?>