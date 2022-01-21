<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\orders\print_invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37899588661ea77cb0a14b7-09314555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de8ddf1d2846393eec40d0a1f2cb32e2ddfd2fc8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\orders\\print_invoice.tpl',
      1 => 1642749166,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '37899588661ea77cb0a14b7-09314555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb0ce257_81218132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb0ce257_81218132')) {function content_61ea77cb0ce257_81218132($_smarty_tpl) {?><!DOCTYPE html>
<html dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">
<head>

<style type="text/css" media="print">
.main-table {
    background-color: #ffffff !important;
}
.main-table td {
    vertical-align: top;
}
</style>
<style type="text/css" media="screen,print">
body,p,div,td {
    color: #000000;
    font: 12px Arial;
}
body {
    padding: 0;
    margin: 0;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}
</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("orders/invoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
