<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125320226661d3e7b676e787-17276135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2071cd558254f5f2ad1244328600de558b0e128' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\list_quantity.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125320226661d3e7b676e787-17276135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_list_quantity' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b6773f93_85482988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b6773f93_85482988')) {function content_61d3e7b6773f93_85482988($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_list_quantity']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['master_product_offers_count']) {?>
        <a href="<?php echo htmlspecialchars(fn_url("products.manage?product_type[]=".((string)(defined('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') ? constant('PRODUCT_TYPE_VENDOR_PRODUCT_OFFER') : null))."&product_type[]=".((string)(defined('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') ? constant('PRODUCT_TYPE_PRODUCT_OFFER_VARIATION') : null))."&master_product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['inventory_amount'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] : $tmp), ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <!-- Overridden by the Common Products for Vendors add-on -->
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['inventory_amount'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] : $tmp), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
<?php }?><?php }} ?>
