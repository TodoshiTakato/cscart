<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\blog\hooks\pages\detailed_description_label.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89656517761d40ff526cee2-59463766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d14c96b5d6fd5c7f88ef1a76b0bb539e067d80e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_label.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '89656517761d40ff526cee2-59463766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40ff526f1f1_04600288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40ff526f1f1_04600288')) {function content_61d40ff526f1f1_04600288($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }?>
<?php }} ?>
