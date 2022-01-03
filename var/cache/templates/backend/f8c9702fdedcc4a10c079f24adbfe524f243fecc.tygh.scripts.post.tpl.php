<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 10:40:56
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\pingpp\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108855616461d2a8888447b7-48477839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8c9702fdedcc4a10c079f24adbfe524f243fecc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\pingpp\\hooks\\index\\scripts.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108855616461d2a8888447b7-48477839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2a888846a50_93329643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2a888846a50_93329643')) {function content_61d2a888846a50_93329643($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/pingpp/config.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/pingpp/payment.js"),$_smarty_tpl);?>
<?php }} ?>
