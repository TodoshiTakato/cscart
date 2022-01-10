<?php /* Smarty version Smarty-3.1.21, created on 2022-01-06 13:50:59
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_first_cscart_module\hooks\profiles\manage_header.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122243715161d5959dc5ef12-70726306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9879f6f563cc15db50bbebae1c48d1a5127938' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_first_cscart_module\\hooks\\profiles\\manage_header.post.tpl',
      1 => 1641466230,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '122243715161d5959dc5ef12-70726306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d5959dc8fda7_84389834',
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'rev' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d5959dc8fda7_84389834')) {function content_61d5959dc8fda7_84389834($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('reports_parameter_2'));
?>
<th>
    <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=orders_count&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
        <?php echo $_smarty_tpl->__("reports_parameter_2");?>

    </a>
</th><?php }} ?>
