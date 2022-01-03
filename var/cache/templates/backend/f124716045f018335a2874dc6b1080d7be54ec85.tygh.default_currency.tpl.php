<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 10:38:45
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\settings_wizard\components\default_currency.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80426266761d2a8056bb637-93692472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f124716045f018335a2874dc6b1080d7be54ec85' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\settings_wizard\\components\\default_currency.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '80426266761d2a8056bb637-93692472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2a8056e3252_26077606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2a8056e3252_26077606')) {function content_61d2a8056e3252_26077606($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('primary_currency'));
?>
<div class="control-group setting-wide">
    <label for="" class="control-label"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
    <div class="controls">
        <select name="default_currency">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null)==$_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
