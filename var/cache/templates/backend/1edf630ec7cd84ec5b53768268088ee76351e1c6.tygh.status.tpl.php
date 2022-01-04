<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 11:03:17
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\banners\views\banners\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8224113561d3ff4566ea60-90723063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1edf630ec7cd84ec5b53768268088ee76351e1c6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\banners\\views\\banners\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8224113561d3ff4566ea60-90723063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_statuses' => 0,
    'status' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3ff45671f79_29474389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3ff45671f79_29474389')) {function content_61d3ff45671f79_29474389($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('change_to_status'));
?>
<?php  $_smarty_tpl->tpl_vars['status_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status_name']->_loop = false;
 $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['banner_statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status_name']->key => $_smarty_tpl->tpl_vars['status_name']->value) {
$_smarty_tpl->tpl_vars['status_name']->_loop = true;
 $_smarty_tpl->tpl_vars['status']->value = $_smarty_tpl->tpl_vars['status_name']->key;
?>
    <li>
        <a class="cm-ajax cm-post cm-ajax-send-form"
            href="<?php echo htmlspecialchars(fn_url("banners.m_update_statuses?status=".((string)$_smarty_tpl->tpl_vars['status']->value)), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-target-id="pagination_contents"
            data-ca-target-form="#banners_form"
        >
            <?php echo $_smarty_tpl->__("change_to_status",array("[status]"=>$_smarty_tpl->tpl_vars['status_name']->value));?>

        </a>
    </li>
<?php } ?>
<?php }} ?>
