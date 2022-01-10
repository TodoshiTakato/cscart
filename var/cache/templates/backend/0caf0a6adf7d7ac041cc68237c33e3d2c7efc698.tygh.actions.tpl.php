<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 12:35:54
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\usergroups\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64079485761d5667a2f7f65-67493022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0caf0a6adf7d7ac041cc68237c33e3d2c7efc698' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\usergroups\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '64079485761d5667a2f7f65-67493022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d5667a2f9768_54024052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d5667a2f9768_54024052')) {function content_61d5667a2f9768_54024052($_smarty_tpl) {?><li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[usergroups.m_delete]",'form'=>"usergroups_form"));?>

</li>
<?php }} ?>
