<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81442513761d3e7b634e432-39902216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7e14f604cf99aac180541312b2ad49961d09f7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\bulk_edit\\status.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81442513761d3e7b634e432-39902216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b6353305_22875614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b6353305_22875614')) {function content_61d3e7b6353305_22875614($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_edit.make_active','bulk_edit.make_disabled','bulk_edit.make_hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_active");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[products.m_activate]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_disabled");
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp4,'dispatch'=>"dispatch[products.m_disable]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_hidden");
$_tmp5=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp5,'dispatch'=>"dispatch[products.m_hide]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
