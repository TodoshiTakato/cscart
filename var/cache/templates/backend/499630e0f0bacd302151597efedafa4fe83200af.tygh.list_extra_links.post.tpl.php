<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 13:16:43
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\reward_points\hooks\profiles\list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99750571861d5700b321a87-28654104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '499630e0f0bacd302151597efedafa4fe83200af' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\profiles\\list_extra_links.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '99750571861d5700b321a87-28654104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d5700b327537_54333001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d5700b327537_54333001')) {function content_61d5700b327537_54333001($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('points'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C"&&fn_check_permissions("reward_points","userlog","admin","GET")) {?>
    <li><a href="<?php echo htmlspecialchars(fn_url("reward_points.userlog?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("points");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {
echo htmlspecialchars(unserialize($_smarty_tpl->tpl_vars['user']->value['points']), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>)</a></li>
<?php }?><?php }} ?>
