<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:03
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\master_products\hooks\products\tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105766337761dbce6f015770-52903995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc784e0cf76ddb2d4de72c4139ee62ca08734edf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\master_products\\hooks\\products\\tabs_extra.pre.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '105766337761dbce6f015770-52903995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6f01b350_80558344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6f01b350_80558344')) {function content_61dbce6f01b350_80558344($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('view','view'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['product_data']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars['hide_for_vendor'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_for_vendor'] = clone $_smarty_tpl->tpl_vars['hide_for_vendor'];?>
    <?php $_smarty_tpl->tpl_vars['hide_inputs'] = new Smarty_variable("cm-hide-inputs", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_inputs'] = clone $_smarty_tpl->tpl_vars['hide_inputs'];?>
    <?php $_smarty_tpl->tpl_vars['edit_link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['edit_link_text'] = clone $_smarty_tpl->tpl_vars['edit_link_text'];?>
    <?php $_smarty_tpl->tpl_vars['link_text'] = new Smarty_variable($_smarty_tpl->__("view"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['link_text'] = clone $_smarty_tpl->tpl_vars['link_text'];?>
    <?php $_smarty_tpl->tpl_vars['skip_delete'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['skip_delete'] = clone $_smarty_tpl->tpl_vars['skip_delete'];?>
<?php }?><?php }} ?>
