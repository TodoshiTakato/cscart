<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\orders\order_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69749536161ebde12ad70f7-96575887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6413129af11ee37bcb90f5246b0eee20642b93e5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\orders\\order_notification.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '69749536161ebde12ad70f7-96575887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'order_status' => 0,
    'status_settings' => 0,
    'order_header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde12adeae5_45377939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde12adeae5_45377939')) {function content_61ebde12adeae5_45377939($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('dear','invoice_heading','credit_memo','order_details'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("dear");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
,<br /><br />

<?php echo $_smarty_tpl->tpl_vars['order_status']->value['email_header'];?>
<br /><br />

<?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("invoice_heading"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("order_details"), null, 0);?>
<?php }?>

<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_header']->value, ENT_QUOTES, 'UTF-8');?>
:</b><br />

<?php echo $_smarty_tpl->getSubTemplate ("orders/invoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
