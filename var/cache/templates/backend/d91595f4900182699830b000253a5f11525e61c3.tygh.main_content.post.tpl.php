<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 10:40:56
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\searchanise\hooks\index\main_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167562614561d2a888706d25-17347372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91595f4900182699830b000253a5f11525e61c3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\searchanise\\hooks\\index\\main_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167562614561d2a888706d25-17347372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2a88870ec57_91586048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2a88870ec57_91586048')) {function content_61d2a88870ec57_91586048($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['se_use_custom_frontend_sync_call']) {?>
    <object data="<?php echo fn_url("searchanise.async?no_session=Y","C","current");?>
" style="position:absolute;" width="0" height="0" type="text/html"></object>
<?php }?>
<?php }} ?>
