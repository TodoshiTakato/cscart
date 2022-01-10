<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\update_product_name.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93114810161dbce6dc44d86-14831431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7744b249e444e816149894456266e54dfd9ee837' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\update_product_name.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93114810161dbce6dc44d86-14831431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6dc4a451_14229455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6dc4a451_14229455')) {function content_61dbce6dc4a451_14229455($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('master_products.master_product'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['master_product_id']) {?>
    <div class="control-group">
        <label for="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        ><?php echo $_smarty_tpl->__("master_products.master_product");?>
:</label>
        <div class="controls" id="elm_parent_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a class="shift-input"
               href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['master_product_id'])), ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
    </div>
<?php }?><?php }} ?>
