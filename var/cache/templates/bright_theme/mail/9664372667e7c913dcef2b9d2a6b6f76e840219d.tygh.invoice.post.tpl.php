<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:01
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\mail\templates\addons\barcode\hooks\orders\invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191313295861ebde11e77558-14555418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9664372667e7c913dcef2b9d2a6b6f76e840219d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\mail\\templates\\addons\\barcode\\hooks\\orders\\invoice.post.tpl',
      1 => 1641195379,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191313295861ebde11e77558-14555418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde11e78a99_24049459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde11e78a99_24049459')) {function content_61ebde11e78a99_24049459($_smarty_tpl) {?><div align="center" style="padding: 50px 0px 30px 0px;"><?php echo $_smarty_tpl->getSubTemplate ("addons/barcode/barcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id']), 0);?>
</div><?php }} ?>
