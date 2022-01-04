<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\bulk_edit_actions.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100874534861d3e7b63ad109-81773593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae1036403a4c32eb8303bcb758660ef762578fb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\bulk_edit_actions.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '100874534861d3e7b63ad109-81773593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_bulk_edit_actions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b63b1f78_83925638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b63b1f78_83925638')) {function content_61d3e7b63b1f78_83925638($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone_selected','export_selected'));
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_bulk_edit_actions']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range.master]",'form'=>"manage_products_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"));?>

    </li>
<?php }?><?php }} ?>
