<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:03
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\views\product_variations\components\link_to_group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149792896261dbce6fe73a38-38068825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d23d02b732d787b2cdc573b9ee81f7bed93e70d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\views\\product_variations\\components\\link_to_group.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '149792896261dbce6fe73a38-38068825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'group_codes' => 0,
    'group_id' => 0,
    'group_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6fe7a7b1_14959677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6fe7a7b1_14959677')) {function content_61dbce6fe7a7b1_14959677($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code.link','none','none'));
?>
<div class="object-selector shift-left object-selector--mobile-full-width input-xlarge">
    <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_id">
    <select id="product_variations_code"
            class="cm-object-selector cm-object-variations-code-select object-selector--mobile-full-width product-variations__toolbar-code-link"
            name="group_id"
            data-ca-placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.link");?>
">
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
        <?php  $_smarty_tpl->tpl_vars['group_code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_code']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_code']->key => $_smarty_tpl->tpl_vars['group_code']->value) {
$_smarty_tpl->tpl_vars['group_code']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group_code']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
    </select>
</div><?php }} ?>
