<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\orders\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39983274661e52099192358-02747133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae9c13dc3224e6a0cb95601124f1634ce1aeeb8d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\orders\\product_info.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39983274661e52099192358-02747133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e5209919b440_87035536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e5209919b440_87035536')) {function content_61e5209919b440_87035536($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['cp']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['cp']->value['variation_features'],'features_secondary'=>true), 0);?>

<?php }?>
<?php }} ?>
