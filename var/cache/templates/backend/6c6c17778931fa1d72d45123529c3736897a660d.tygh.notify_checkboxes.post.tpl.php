<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 11:54:50
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\suppliers\hooks\select_popup\notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197507507061d2b9da276091-44718069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c6c17778931fa1d72d45123529c3736897a660d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\suppliers\\hooks\\select_popup\\notify_checkboxes.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '197507507061d2b9da276091-44718069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notify' => 0,
    'order_info' => 0,
    'prefix' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2b9da2792a8_12254242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2b9da2792a8_12254242')) {function content_61d2b9da2792a8_12254242($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['notify']->value&&$_smarty_tpl->tpl_vars['order_info']->value['have_suppliers']) {?>
    <li><a><label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_supplier">
        <input type="checkbox" name="__notify_supplier" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_notify_supplier" value="Y" checked="checked" onclick="Tygh.$('input[name=__notify_supplier]').prop('checked', this.checked);" />
        <?php echo $_smarty_tpl->__("notify_supplier");?>
</label></a>
    </li>
<?php }?><?php }} ?>
