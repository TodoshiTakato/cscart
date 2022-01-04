<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\list_list_price.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169489502661d3e7b6714603-80442216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1feeef747c39d2ff949bf4e8db3aa41d0f55de9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\list_list_price.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169489502661d3e7b6714603-80442216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'runtime' => 0,
    'primary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b6718d83_10712647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b6718d83_10712647')) {function content_61d3e7b6718d83_10712647($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['master_product_id']) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['list_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
        <input type="text"
               name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][list_price]"
               size="6" value="<?php echo htmlspecialchars(fn_format_price($_smarty_tpl->tpl_vars['product']->value['list_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
"
               class="input-mini input-hidden"
        />
    <?php }?>
<?php }?><?php }} ?>
