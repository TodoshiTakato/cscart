<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\bulk_edit_prices_block_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167729922761d3e7b6277955-36748680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c71d12ef2d2db7336730b321c39f8bf4de50935' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\bulk_edit_prices_block_title.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167729922761d3e7b6277955-36748680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_bulk_edit_prices_block_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b62798d7_65694795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b62798d7_65694795')) {function content_61d3e7b62798d7_65694795($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price'));
?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_bulk_edit_prices_block_title']->value)===null||$tmp==='' ? false : $tmp)) {?>
    <?php echo $_smarty_tpl->__("price");?>

<?php }?><?php }} ?>
