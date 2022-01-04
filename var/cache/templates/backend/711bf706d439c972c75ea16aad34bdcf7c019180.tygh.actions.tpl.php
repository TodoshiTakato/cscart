<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:22
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\pages\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79743360661d40fee25c0b5-37391441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '711bf706d439c972c75ea16aad34bdcf7c019180' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\pages\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79743360661d40fee25c0b5-37391441',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40fee260352_98748696',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40fee260352_98748696')) {function content_61d40fee260352_98748696($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('clone_selected'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[pages.m_clone]",'form'=>"pages_tree_form"));?>

    </li>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[pages.m_delete]",'form'=>"pages_tree_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
