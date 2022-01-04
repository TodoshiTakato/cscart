<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:22
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\pages\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179163485161d40fee24eff3-29619954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36c0201c0377b09c7edb1b760cb78abf238b9ee6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\pages\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179163485161d40fee24eff3-29619954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages_statuses' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40fee2522e9_79374117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40fee2522e9_79374117')) {function content_61d40fee2522e9_79374117($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <a class="cm-ajax cm-post cm-ajax-send-form" 
            href="<?php echo htmlspecialchars(fn_url("pages.m_update_statuses?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-id="pagination_contents"
            data-ca-target-form="#pages_tree_form"
        >
            <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

        </a>
    </li>
<?php } ?>
<?php }} ?>
