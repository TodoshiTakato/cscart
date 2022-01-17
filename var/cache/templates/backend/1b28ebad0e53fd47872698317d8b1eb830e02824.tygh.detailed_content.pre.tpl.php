<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 16:16:11
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_first_cscart_module\hooks\products\detailed_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105245976161e509ca4ce0c8-72618999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b28ebad0e53fd47872698317d8b1eb830e02824' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_first_cscart_module\\hooks\\products\\detailed_content.pre.tpl',
      1 => 1642425365,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '105245976161e509ca4ce0c8-72618999',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e509ca578638_83696696',
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e509ca578638_83696696')) {function content_61e509ca578638_83696696($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('my_first_cscart_module_setting'));
?>
<h4 class="subheader hand" data-toggle="collapse" data-target="#my_first_cscart_module_setting">
    my_first_cscart_module_settings
    <span class="icon-caret-down"></span>
</h4>

<div id="my_first_cscart_module_setting" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="my_first_cscart_module_setting"><?php echo $_smarty_tpl->__("my_first_cscart_module_setting");?>
:</label>
            <div class="controls">
                <input type="text"
                       name="product_data[my_first_cscart_module_setting]"
                       id="my_first_cscart_module_setting"
                       size="20"
                       maxlength=<?php echo htmlspecialchars(smarty_modifier_enum("ProductFieldsLength::my_first_cscart_module_setting"), ENT_QUOTES, 'UTF-8');?>

                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['my_first_cscart_module_setting'], ENT_QUOTES, 'UTF-8');?>
"
                       class="input-large">
            </div>
        </div>
    </fieldset>
</div><?php }} ?>
