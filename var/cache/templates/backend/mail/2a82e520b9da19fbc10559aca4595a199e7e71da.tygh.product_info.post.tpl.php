<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\suppliers\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183564991661ea77cb21a7f1-20009349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a82e520b9da19fbc10559aca4595a199e7e71da' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\suppliers\\hooks\\orders\\product_info.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '183564991661ea77cb21a7f1-20009349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb222ec4_15151138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb222ec4_15151138')) {function content_61ea77cb222ec4_15151138($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('supplier'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['supplier_id']) {?>
    <p style="margin: 2px 0px 3px 0px;"><?php echo $_smarty_tpl->__("supplier");?>
: <?php echo htmlspecialchars(fn_get_supplier_name($_smarty_tpl->tpl_vars['oi']->value['extra']['supplier_id']), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?><?php }} ?>
