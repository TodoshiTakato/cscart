<?php /* Smarty version Smarty-3.1.21, created on 2022-01-06 13:46:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_first_cscart_module\hooks\profiles\manage_data.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165247787561d68cf3689b37-93577980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '024558f2b7a66390843aa9bd9fa7fe8966223f6d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_first_cscart_module\\hooks\\profiles\\manage_data.post.tpl',
      1 => 1641465953,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165247787561d68cf3689b37-93577980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d68cf36b51f4_25420927',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d68cf36b51f4_25420927')) {function content_61d68cf36b51f4_25420927($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reports_parameter_2'));
?>
<td class="row-status" data-th="<?php echo $_smarty_tpl->__("reports_parameter_2");?>
">
    <a class="row-status" href="<?php echo htmlspecialchars(fn_url("orders.manage&is_search=Y?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['orders_count'], ENT_QUOTES, 'UTF-8');?>

    </a>
</td><?php }} ?>
