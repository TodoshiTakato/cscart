<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\suppliers\hooks\companies\product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36763695861dbce6dd149a5-55635880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '883485d4af25ac6e5a9085960c6a65468070a76c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\suppliers\\hooks\\companies\\product_details_fields.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36763695861dbce6dd149a5-55635880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6dd1b470_89835330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6dd1b470_89835330')) {function content_61dbce6dd1b470_89835330($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('supplier'));
?>
<?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['readonly'] = new Smarty_variable(false, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/supplier_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("supplier"),'name'=>"product_data[supplier_id]",'id'=>"product_data_supplier_id",'selected'=>$_smarty_tpl->tpl_vars['product_data']->value['supplier_id'],'company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'read_only'=>$_smarty_tpl->tpl_vars['readonly']->value), 0);?>
<?php }} ?>
