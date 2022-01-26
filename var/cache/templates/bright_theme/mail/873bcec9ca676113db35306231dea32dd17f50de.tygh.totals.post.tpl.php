<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:01
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\mail\templates\addons\gift_certificates\hooks\orders\totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191079616961ebde11e27629-90895092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '873bcec9ca676113db35306231dea32dd17f50de' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\mail\\templates\\addons\\gift_certificates\\hooks\\orders\\totals.post.tpl',
      1 => 1641195378,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '191079616961ebde11e27629-90895092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'code' => 0,
    'certificate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde11e2b4c2_68082539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde11e2b4c2_68082539')) {function content_61ebde11e2b4c2_68082539($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']) {?>
<?php  $_smarty_tpl->tpl_vars["certificate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["certificate"]->_loop = false;
 $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['use_gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["certificate"]->key => $_smarty_tpl->tpl_vars["certificate"]->value) {
$_smarty_tpl->tpl_vars["certificate"]->_loop = true;
 $_smarty_tpl->tpl_vars["code"]->value = $_smarty_tpl->tpl_vars["certificate"]->key;
?>
<tr>
    <td colspan="2" style="text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;">
        <b><?php echo $_smarty_tpl->__("gift_certificate");?>
</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
 (<?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['cost']), 0);?>
)</td>
</tr>
<?php } ?>
<?php }?><?php }} ?>
