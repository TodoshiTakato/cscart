<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 10:49:02
         compiled from "17fdb0c5011bfd667d4b36dd1afe99ce51872614" */ ?>
<?php /*%%SmartyHeaderCode:104037148461d54d6e48b604-92775609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17fdb0c5011bfd667d4b36dd1afe99ce51872614' => 
    array (
      0 => '17fdb0c5011bfd667d4b36dd1afe99ce51872614',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '104037148461d54d6e48b604-92775609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'city' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d54d6e4b3970_07960797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d54d6e4b3970_07960797')) {function content_61d54d6e4b3970_07960797($_smarty_tpl) {?><p>Привет <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
</p>
<?php echo htmlspecialchars(fn_print_r($_smarty_tpl->tpl_vars['city']->value), ENT_QUOTES, 'UTF-8');?>
<?php }} ?>
