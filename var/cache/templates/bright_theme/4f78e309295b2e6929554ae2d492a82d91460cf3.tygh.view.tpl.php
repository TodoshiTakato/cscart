<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:31:00
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\views\product_features\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164011573661d3e9a41c14e6-64810507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f78e309295b2e6929554ae2d492a82d91460cf3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\views\\product_features\\view.tpl',
      1 => 1641195374,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '164011573661d3e9a41c14e6-64810507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'variant_data' => 0,
    'products' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e9a42095d2_04576964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e9a42095d2_04576964')) {function content_61d3e9a42095d2_04576964($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products','text_no_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-feature">
    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <div class="ty-feature__image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0);?>

    </div>
    <?php }?>
    <div class="ty-feature__description ty-wysiwyg-content">
        <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
        <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0);?>

<?php }?>
<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php }?>
<!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['variant_data']->value['variant'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/product_features/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/product_features/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div id="product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
<div class="ty-feature">
    <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <div class="ty-feature__image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']), 0);?>

    </div>
    <?php }?>
    <div class="ty-feature__description ty-wysiwyg-content">
        <?php if ($_smarty_tpl->tpl_vars['variant_data']->value['url']) {?>
        <p><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['url'], ENT_QUOTES, 'UTF-8');?>
</a></p>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['variant_data']->value['description'];?>

    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
<?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list']), 0);?>

<?php }?>
<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
<?php }?>
<!--product_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['variant_data']->value['variant'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
}?><?php }} ?>
