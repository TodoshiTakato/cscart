<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:05
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\common\wrap_document.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15261874261e5209d81d481-30747505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69445df3ee4ad59bbe8746f27662468cc60b263d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\common\\wrap_document.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15261874261e5209d81d481-30747505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language_direction' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e5209d858bb4_96298996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e5209d858bb4_96298996')) {function content_61e5209d858bb4_96298996($_smarty_tpl) {?><!DOCTYPE html>
<html dir="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
">
<head>

<style type="text/css" media="screen,print">
body {
    padding: 0;
    margin: 0;
    text-align: center;
}
a, a:link, a:visited, a:hover, a:active {
    color: #000000;
    text-decoration: underline;
}
a:hover {
    text-decoration: none;
}

#print-wrapp {
	max-width: 800px;
	width: 100%;
	margin: 0px auto;
	text-align: initial;
}

</style>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<table id="print-wrapp">
	<tr>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		</td>
	</tr>
</table>
</body>
</html><?php }} ?>
