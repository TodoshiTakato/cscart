<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\blog\hooks\pages\detailed_description_textarea.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35652599061d40ff52acd01-48861734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc07c8647af770847f4628274da82334b1b549b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\detailed_description_textarea.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '35652599061d40ff52acd01-48861734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40ff52aee66_06289019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40ff52aee66_06289019')) {function content_61d40ff52aee66_06289019($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }?><?php }} ?>
