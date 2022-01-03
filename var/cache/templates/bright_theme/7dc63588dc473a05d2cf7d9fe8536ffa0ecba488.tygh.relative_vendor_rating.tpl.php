<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 12:13:17
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\vendor_rating\components\relative_vendor_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75391834661d2be2d376d47-74861716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc63588dc473a05d2cf7d9fe8536ffa0ecba488' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\vendor_rating\\components\\relative_vendor_rating.tpl',
      1 => 1641195377,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75391834661d2be2d376d47-74861716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'rating' => 0,
    'addons' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2be2d389ae0_39800715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2be2d389ae0_39800715')) {function content_61d2be2d389ae0_39800715($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.vendor_rating','vendor_rating.vendor_rating','vendor_rating.vendor_rating','vendor_rating.vendor_rating','vendor_rating.vendor_rating','vendor_rating.vendor_rating'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><span class="ty-vendor-rating">
    <?php if ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
        <i class="ty-vendor-rating-icon ty-vendor-rating-icon--bronze" title="<?php echo $_smarty_tpl->__("vendor_rating.vendor_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
%"></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
        <i class="ty-vendor-rating-icon ty-vendor-rating-icon--silver" title="<?php echo $_smarty_tpl->__("vendor_rating.vendor_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
%"></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
        <i class="ty-vendor-rating-icon ty-vendor-rating-icon--gold" title="<?php echo $_smarty_tpl->__("vendor_rating.vendor_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
%"></i>
    <?php }?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/components/relative_vendor_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/components/relative_vendor_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><span class="ty-vendor-rating">
    <?php if ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
        <i class="ty-vendor-rating-icon ty-vendor-rating-icon--bronze" title="<?php echo $_smarty_tpl->__("vendor_rating.vendor_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
%"></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
        <i class="ty-vendor-rating-icon ty-vendor-rating-icon--silver" title="<?php echo $_smarty_tpl->__("vendor_rating.vendor_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
%"></i>
    <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
        <i class="ty-vendor-rating-icon ty-vendor-rating-icon--gold" title="<?php echo $_smarty_tpl->__("vendor_rating.vendor_rating");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value, ENT_QUOTES, 'UTF-8');?>
%"></i>
    <?php }?>
</span><?php }?><?php }} ?>
