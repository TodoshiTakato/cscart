<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 12:35:48
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_first_cscart_module\hooks\products\manage_head.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5930730461e68036639590-87902087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c70b3b94cdb89ca833801b5faba6d9badcf8a5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_first_cscart_module\\hooks\\products\\manage_head.post.tpl',
      1 => 1642498540,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5930730461e68036639590-87902087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e68036667296_06040020',
  'variables' => 
  array (
    'ajax_class' => 0,
    'c_url' => 0,
    'search' => 0,
    'rev' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e68036667296_06040020')) {function content_61e68036667296_06040020($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('my_first_cscart_module_setting'));
?>
<th width="12%">
    <a class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
"
       href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=my_first_cscart_module_setting&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
       data-ca-target-id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
>
        <?php echo $_smarty_tpl->__("my_first_cscart_module_setting");?>

    </a>
</th><?php }} ?>
