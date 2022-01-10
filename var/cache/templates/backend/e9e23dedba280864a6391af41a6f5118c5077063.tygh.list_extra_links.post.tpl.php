<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 13:16:43
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\gdpr\hooks\profiles\list_extra_links.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169953047961d5700b3144b7-20280672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e23dedba280864a6391af41a6f5118c5077063' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\gdpr\\hooks\\profiles\\list_extra_links.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169953047961d5700b3144b7-20280672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'return_current_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d5700b3190a4_53337807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d5700b3190a4_53337807')) {function content_61d5700b3190a4_53337807($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.text_anonymize_question','gdpr.anonymize'));
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value['user_type']=="C"&&$_smarty_tpl->tpl_vars['user']->value['anonymized']!="Y") {?>
    <li><?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_tmp7=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("gdpr.anonymize"),'href'=>"gdpr.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp7),'method'=>"POST"));?>
</li>
<?php }?>
<?php }} ?>
