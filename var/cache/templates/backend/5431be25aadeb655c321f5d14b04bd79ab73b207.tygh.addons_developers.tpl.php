<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 11:54:49
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\addons\components\addons_developers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33901093561d2b9d9f21092-62006434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5431be25aadeb655c321f5d14b04bd79ab73b207' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\addons\\components\\addons_developers.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '33901093561d2b9d9f21092-62006434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'all_suppliers' => 0,
    'supplier_data' => 0,
    'supplier_name' => 0,
    'suppliers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2b9d9f2b741_37632286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2b9d9f2b741_37632286')) {function content_61d2b9d9f2b741_37632286($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('developers','select_developer','popular_developer'));
?>
<div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("developers");?>
</h6>
    <div class="sidebar-field btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">
            <?php echo $_smarty_tpl->__("select_developer");?>

            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" id="elm_all_dev_pages">
            <?php  $_smarty_tpl->tpl_vars['supplier_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier_data']->_loop = false;
 $_smarty_tpl->tpl_vars['supplier_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier_data']->key => $_smarty_tpl->tpl_vars['supplier_data']->value) {
$_smarty_tpl->tpl_vars['supplier_data']->_loop = true;
 $_smarty_tpl->tpl_vars['supplier_name']->value = $_smarty_tpl->tpl_vars['supplier_data']->key;
?>
                <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['supplier_data']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier_name']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } ?>
        <!--elm_all_dev_pages--></ul>
    </div>
    <div class="sidebar-field">
        <p><?php echo $_smarty_tpl->__("popular_developer");?>
:</p>
        <ul name="supplier_page" class="nav nav-list saved-search" id="elm_developer_pages">
            <?php  $_smarty_tpl->tpl_vars['supplier_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier_data']->_loop = false;
 $_smarty_tpl->tpl_vars['supplier_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier_data']->key => $_smarty_tpl->tpl_vars['supplier_data']->value) {
$_smarty_tpl->tpl_vars['supplier_data']->_loop = true;
 $_smarty_tpl->tpl_vars['supplier_name']->value = $_smarty_tpl->tpl_vars['supplier_data']->key;
?>
                <li><a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['supplier_data']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier_name']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
            <?php } ?>
        <!--elm_developer_pages--></ul>
    </div>
</div><?php }} ?>
