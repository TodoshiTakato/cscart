<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 10:31:43
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\exim\components\csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126270636161dbe0df42e5a0-79932206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a32300a40de5d34f3574d91ec974ace68d204fc7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\exim\\components\\csv_delimiters.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '126270636161dbe0df42e5a0-79932206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'allow_auto_detect' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbe0df439d07_03887615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbe0df439d07_03887615')) {function content_61dbe0df439d07_03887615($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('auto','semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['allow_auto_detect']->value) {?>
        <option value="<?php echo htmlspecialchars(smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO"), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==smarty_modifier_enum("Addons\AdvancedImport\CsvDelimiters::AUTO")) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("auto");?>
</option>
    <?php }?>
    <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
    <option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select>
<?php }} ?>
