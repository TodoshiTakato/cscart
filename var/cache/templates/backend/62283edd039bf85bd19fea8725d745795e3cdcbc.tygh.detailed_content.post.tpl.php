<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\age_verification\hooks\products\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53721558961dbce6ec916a2-62865550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62283edd039bf85bd19fea8725d745795e3cdcbc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\age_verification\\hooks\\products\\detailed_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53721558961dbce6ec916a2-62865550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6ec94ed7_63161249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6ec94ed7_63161249')) {function content_61dbce6ec94ed7_63161249($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('age_verification'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("age_verification"),'target'=>"#age_verification_fields"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("addons/age_verification/views/age_verification/components/update_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('array_name'=>"product_data",'record'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>
<?php }} ?>
