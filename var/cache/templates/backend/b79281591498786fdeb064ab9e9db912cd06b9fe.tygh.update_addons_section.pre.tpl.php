<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 15:17:19
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_first_cscart_module\hooks\products\update_addons_section.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108401881761e55e4fa5b131-64565716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b79281591498786fdeb064ab9e9db912cd06b9fe' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_first_cscart_module\\hooks\\products\\update_addons_section.pre.tpl',
      1 => 1642421240,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108401881761e55e4fa5b131-64565716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e55e4fa8d9e9_06365914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e55e4fa8d9e9_06365914')) {function content_61e55e4fa8d9e9_06365914($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('my_first'));
?>
<div class="control-group">
    <label class="control-label" for="my_first"><?php echo $_smarty_tpl->__("my_first");?>
:</label>
    <div class="controls">
        <input type="text"
               name="product_data[my_first]"
               id="my_first"
               size="20"
               maxlength=<?php echo htmlspecialchars(smarty_modifier_enum("ProductFieldsLength::my_first"), ENT_QUOTES, 'UTF-8');?>

               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['my_first'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
    </div>
</div><?php }} ?>
