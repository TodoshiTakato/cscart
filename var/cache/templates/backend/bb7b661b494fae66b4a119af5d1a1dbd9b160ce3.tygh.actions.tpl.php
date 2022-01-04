<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:24:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\block_manager\components\bulk_edit\actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103987601061d3e81903a754-96718154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb7b661b494fae66b4a119af5d1a1dbd9b160ce3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\block_manager\\components\\bulk_edit\\actions.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103987601061d3e81903a754-96718154',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e81903da85_55577086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e81903da85_55577086')) {function content_61d3e81903da85_55577086($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"block_manager:bulk_edit_actions")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"block_manager:bulk_edit_actions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <li>
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[block_manager.block.m_delete]",'form'=>"manage_blocks_form"));?>

    </li>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"block_manager:bulk_edit_actions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
