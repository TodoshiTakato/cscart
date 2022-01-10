<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\warehouses\hooks\products\update_product_amount.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27671702161dbce6e33cb60-86097810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe23321ccc1d8a97fb02088443c30fa8a97ccd9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\warehouses\\hooks\\products\\update_product_amount.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27671702161dbce6e33cb60-86097810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_warehouses_amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6e347ea7_21880284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6e347ea7_21880284')) {function content_61dbce6e347ea7_21880284($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('in_stock'));
?>
<?php if (isset($_smarty_tpl->tpl_vars['product_warehouses_amount']->value)) {?>
    <div class="control-group">
        <label class="control-label" for="elm_in_stock"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
        <div class="controls">
            <input type="text" name="product_data[amount]" id="elm_in_stock" size="10" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_warehouses_amount']->value, ENT_QUOTES, 'UTF-8');?>
" disabled class="input-small" />
        </div>
    </div>
<?php }?>
<?php }} ?>
