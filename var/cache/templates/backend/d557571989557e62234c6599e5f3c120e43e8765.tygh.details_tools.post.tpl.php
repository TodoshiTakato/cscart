<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_communication\hooks\orders\details_tools.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16043577761e5209978fde0-09849411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd557571989557e62234c6599e5f3c120e43e8765' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\orders\\details_tools.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16043577761e5209978fde0-09849411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e52099797b00_55499870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e52099797b00_55499870')) {function content_61e52099797b00_55499870($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null),'object_id'=>$_smarty_tpl->tpl_vars['order_info']->value['order_id'],'menu_button'=>true,'divider'=>true), 0);?>
<?php }} ?>
