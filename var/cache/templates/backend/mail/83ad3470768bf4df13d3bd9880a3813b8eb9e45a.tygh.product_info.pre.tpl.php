<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\product_variations\hooks\orders\product_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59841429561ea77cb20b535-48487329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83ad3470768bf4df13d3bd9880a3813b8eb9e45a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\product_variations\\hooks\\orders\\product_info.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59841429561ea77cb20b535-48487329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb213983_47328430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb213983_47328430')) {function content_61ea77cb213983_47328430($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_tags'=>false,'features_brackets'=>true,'features_separator'=>" / "), 0);?>

<?php }?><?php }} ?>
