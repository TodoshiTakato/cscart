<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\tags\hooks\pages\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120540382961d40ff542d5a3-43903212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb4e3aa8d8232fa2c0a516d85dadeef83c2e18e2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\tags\\hooks\\pages\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '120540382961d40ff542d5a3-43903212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40ff5431921_76676389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40ff5431921_76676389')) {function content_61d40ff5431921_76676389($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['tags']['tags_for_pages']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/tags/views/tags/components/object_tags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['page_data']->value,'input_name'=>"page_data",'object_type'=>"A",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id']), 0);?>

    <?php }?>
<?php }?><?php }} ?>
