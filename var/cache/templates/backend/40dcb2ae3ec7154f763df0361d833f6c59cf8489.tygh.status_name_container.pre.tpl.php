<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\status_name_container.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51875198161d3e7b6868a30-57567808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40dcb2ae3ec7154f763df0361d833f6c59cf8489' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\status_name_container.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '51875198161d3e7b6868a30-57567808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'items_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b686e3c9_19757430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b686e3c9_19757430')) {function content_61d3e7b686e3c9_19757430($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_unset_key')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.unset_key.php';
?><?php if (!$_smarty_tpl->tpl_vars['product']->value['company_id']) {?>
    <?php ob_start();?><?php echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items_status'] = new Smarty_variable(smarty_modifier_unset_key($_smarty_tpl->tpl_vars['items_status']->value,$_tmp8), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['items_status'] = clone $_smarty_tpl->tpl_vars['items_status'];?>
<?php }?><?php }} ?>
