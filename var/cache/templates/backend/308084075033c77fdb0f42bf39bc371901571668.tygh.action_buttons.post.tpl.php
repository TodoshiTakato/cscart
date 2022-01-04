<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 11:02:52
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\mobile_app\hooks\addons\action_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34070739561d3ff2c770a50-35745307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '308084075033c77fdb0f42bf39bc371901571668' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\mobile_app\\hooks\\addons\\action_buttons.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34070739561d3ff2c770a50-35745307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
    'selected_storefront_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3ff2c773595_71560485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3ff2c773595_71560485')) {function content_61d3ff2c773595_71560485($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mobile_app.download_config'));
?>
<?php if ($_smarty_tpl->tpl_vars['_addon']->value=="mobile_app") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_meta'=>"cm-post cm-ajax cm-comet",'but_href'=>"mobile_app.download_config?storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value),'but_text'=>$_smarty_tpl->__("mobile_app.download_config")), 0);?>

<?php }?>
<?php }} ?>
