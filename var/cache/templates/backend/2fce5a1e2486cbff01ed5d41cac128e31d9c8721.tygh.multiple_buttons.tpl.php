<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:17
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\multiple_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112932448561d40fe9092711-10065986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fce5a1e2486cbff01ed5d41cac128e31d9c8721' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\multiple_buttons.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '112932448561d40fe9092711-10065986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tag_level' => 0,
    'only_delete' => 0,
    'hide_add' => 0,
    'on_add' => 0,
    'item_id' => 0,
    'hide_clone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40fe909af08_01582977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40fe909af08_01582977')) {function content_61d40fe909af08_01582977($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["tag_level"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['tag_level']->value)===null||$tmp==='' ? "1" : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?><div class="btn-group"><?php if (!$_smarty_tpl->tpl_vars['hide_add']->value) {
echo $_smarty_tpl->getSubTemplate ("buttons/add_empty_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);
}
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {
echo $_smarty_tpl->getSubTemplate ("buttons/clone_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'item_id'=>$_smarty_tpl->tpl_vars['item_id']->value), 0);
}
}
echo $_smarty_tpl->getSubTemplate ("buttons/remove_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'but_class'=>"cm-delete-row"), 0);
if ($_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?></div><?php }?>
<?php }} ?>
