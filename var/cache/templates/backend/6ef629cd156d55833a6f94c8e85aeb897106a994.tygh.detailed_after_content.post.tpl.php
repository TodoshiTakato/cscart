<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\discussion\hooks\orders\detailed_after_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113261140061e52099893979-99749200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef629cd156d55833a6f94c8e85aeb897106a994' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\orders\\detailed_after_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '113261140061e52099893979-99749200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e5209989b3f0_72321270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e5209989b3f0_72321270')) {function content_61e5209989b3f0_72321270($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_id'=>$_smarty_tpl->tpl_vars['order_info']->value['user_id'],'object_company_id'=>$_smarty_tpl->tpl_vars['order_info']->value['company_id']), 0);?>

<?php }} ?>
