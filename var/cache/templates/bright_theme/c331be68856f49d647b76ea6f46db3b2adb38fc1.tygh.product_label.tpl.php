<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 12:13:19
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\products\components\product_label.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43240275261d2be2f23c829-17491009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c331be68856f49d647b76ea6f46db3b2adb38fc1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\products\\components\\product_label.tpl',
      1 => 1641195374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '43240275261d2be2f23c829-17491009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'label_href' => 0,
    'label_extra' => 0,
    'label_mini' => 0,
    'label_rounded' => 0,
    'label_meta' => 0,
    'label_icon' => 0,
    'label_text' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2be2f251949_63178059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2be2f251949_63178059')) {function content_61d2be2f251949_63178059($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['label_href']->value) {?>
    
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </a>
<?php } else { ?>
    
    <div <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_label.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_label.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['label_href']->value) {?>
    
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </a>
<?php } else { ?>
    
    <div <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {?><i class="ty-product-labels__icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
<?php }
}?><?php }} ?>
