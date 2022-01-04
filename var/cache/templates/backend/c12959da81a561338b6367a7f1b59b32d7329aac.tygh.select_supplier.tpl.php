<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:47
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\suppliers\views\suppliers\components\select_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165281173661d3e7b7209c98-96181796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c12959da81a561338b6367a7f1b59b32d7329aac' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\suppliers\\views\\suppliers\\components\\select_supplier.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '165281173661d3e7b7209c98-96181796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b720e3d1_81652175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b720e3d1_81652175')) {function content_61d3e7b720e3d1_81652175($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('search_by_supplier'));
?>
<?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? "supplier_id" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars["name"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? "supplier_id" : $tmp), null, 0);?>

<div class="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? "control-group" : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    <label class="control-label"><?php echo $_smarty_tpl->__("search_by_supplier");?>
</label>
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/suppliers/views/suppliers/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>$_smarty_tpl->tpl_vars['name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['search']->value['supplier_id'])), 0);?>

    </div>
</div><?php }} ?>
