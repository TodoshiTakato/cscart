<?php /* Smarty version Smarty-3.1.21, created on 2022-01-27 12:55:42
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\suppliers\hooks\order_management\notify_checkboxes.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95884045861f24ffe1eb826-82315132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0b9e086f2c78e53bb16dd553d70605d4872bd01' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\suppliers\\hooks\\order_management\\notify_checkboxes.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '95884045861f24ffe1eb826-82315132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f24ffe1ecb82_24324432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f24ffe1ecb82_24324432')) {function content_61f24ffe1ecb82_24324432($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_supplier'));
?>
<div class="control-group">
    <label for="notify_supplier" class="checkbox"><?php echo $_smarty_tpl->__("notify_supplier");?>

    <input type="checkbox" name="notify_supplier" id="notify_supplier" value="Y" /></label>
</div>
<?php }} ?>
