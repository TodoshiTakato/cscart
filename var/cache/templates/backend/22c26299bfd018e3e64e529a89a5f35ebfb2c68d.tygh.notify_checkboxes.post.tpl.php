<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\suppliers\hooks\orders\notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74542331761e520997f1868-83685103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22c26299bfd018e3e64e529a89a5f35ebfb2c68d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\suppliers\\hooks\\orders\\notify_checkboxes.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '74542331761e520997f1868-83685103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'item' => 0,
    'have_supplier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e520997fb406_44910010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e520997fb406_44910010')) {function content_61e520997fb406_44910010($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_supplier'));
?>
<?php $_smarty_tpl->tpl_vars['have_supplier'] = new Smarty_variable(false, null, 0);?>
<?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['item']->value['extra']['supplier_id']) {?>
		<?php $_smarty_tpl->tpl_vars['have_supplier'] = new Smarty_variable(true, null, 0);?>
	<?php }?>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['have_supplier']->value) {?>
    <label for="notify_supplier" class="checkbox">
        <input type="checkbox" name="notify_supplier" id="notify_supplier" value="Y" form="order_info_form"/>
        <?php echo $_smarty_tpl->__("notify_supplier");?>

    </label>
<?php }?><?php }} ?>
