<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\orders\order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107072558461ebde12b4e8e9-70477311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991f1b85ad3bddcdb95930fc5274b8b5caa34715' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\orders\\order_notification_subj.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107072558461ebde12b4e8e9-70477311',
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
  'unifunc' => 'content_61ebde12b50c46_47456543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde12b50c46_47456543')) {function content_61ebde12b50c46_47456543($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('order'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }} ?>
