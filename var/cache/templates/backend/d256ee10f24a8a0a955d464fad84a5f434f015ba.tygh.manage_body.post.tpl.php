<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\manage_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173432759361d3e7b677a7a1-17322879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd256ee10f24a8a0a955d464fad84a5f434f015ba' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\manage_body.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173432759361d3e7b677a7a1-17322879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b677c9a7_71511001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b677c9a7_71511001')) {function content_61d3e7b677c9a7_71511001($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapprove_product'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product']))), 0);?>

<?php }} ?>
