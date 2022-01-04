<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:27:37
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\my_first_cscart_module\hooks\checkout\minicart_product_info.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80078675061d2e02e8db7d3-70089040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd774af2b4a6eaf32759414908e1e5069c88e97da' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\my_first_cscart_module\\hooks\\checkout\\minicart_product_info.override.tpl',
      1 => 1641277654,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '80078675061d2e02e8db7d3-70089040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2e02e9265b1_83585928',
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'product' => 0,
    'key' => 0,
    'dropdown_id' => 0,
    'force_items_deletion' => 0,
    'r_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2e02e9265b1_83585928')) {function content_61d2e02e9265b1_83585928($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>
    <div class="ty-cart-items__list-item-image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0);?>

    </div>
<?php }?>
<div class="ty-cart-items__list-item-desc">
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['product'])===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) : $tmp);?>
</a>
    <p>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0);?>

    </p>
</div>
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>
    <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
        <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete.from_status?vendor_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])."&cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>

        <?php }?>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_first_cscart_module/hooks/checkout/minicart_product_info.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_first_cscart_module/hooks/checkout/minicart_product_info.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['products_links_type']=="thumb") {?>
    <div class="ty-cart-items__list-item-image">
        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_width'=>"40",'image_height'=>"40",'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'no_ids'=>true), 0);?>

    </div>
<?php }?>
<div class="ty-cart-items__list-item-desc">
    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['product'])===null||$tmp==='' ? fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']) : $tmp);?>
</a>
    <p>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</span><span>&nbsp;x&nbsp;</span><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['product']->value['display_price'],'span_id'=>"price_".((string)$_smarty_tpl->tpl_vars['key']->value)."_".((string)$_smarty_tpl->tpl_vars['dropdown_id']->value),'class'=>"none"), 0);?>

    </p>
</div>
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['display_delete_icons']=="Y") {?>
    <div class="ty-cart-items__list-item-tools cm-cart-item-delete">
        <?php if ((!$_smarty_tpl->tpl_vars['runtime']->value['checkout']||$_smarty_tpl->tpl_vars['force_items_deletion']->value)&&!$_smarty_tpl->tpl_vars['product']->value['extra']['exclude_from_calculate']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"checkout.delete.from_status?vendor_id=".((string)$_smarty_tpl->tpl_vars['product']->value['company_id'])."&cart_id=".((string)$_smarty_tpl->tpl_vars['key']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'but_meta'=>"cm-ajax cm-ajax-full-render",'but_target_id'=>"cart_status*",'but_role'=>"delete",'but_name'=>"delete_cart_item"), 0);?>

        <?php }?>
    </div>
<?php }
}?><?php }} ?>
