<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\warehouses\hooks\products\list_quantity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165439381961d3e7b6765c42-43580436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e81eb13cefbd2444e427057e044f35234d86b2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\list_quantity.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165439381961d3e7b6765c42-43580436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b6768144_07667943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b6768144_07667943')) {function content_61d3e7b6768144_07667943($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['warehouse_amount'])) {?>
    <input type="text" name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['warehouse_amount'], ENT_QUOTES, 'UTF-8');?>
" disabled class="input-full input-hidden" />
<?php }?>
<?php }} ?>
