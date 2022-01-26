<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:01
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\mail\templates\orders\order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184841486561ebde11eb99e1-99172369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b3537e67182f900e7fc06ba3b3a35950a3653a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\mail\\templates\\orders\\order_notification_subj.tpl',
      1 => 1641195373,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '184841486561ebde11eb99e1-99172369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'order_info' => 0,
    'order_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde11ebbe59_94033686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde11ebbe59_94033686')) {function content_61ebde11ebbe59_94033686($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('order'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }} ?>
