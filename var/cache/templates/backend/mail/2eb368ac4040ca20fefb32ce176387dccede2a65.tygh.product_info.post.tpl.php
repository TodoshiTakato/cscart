<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\gift_certificates\hooks\orders\product_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51652495361ea77cb22ab59-54121751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb368ac4040ca20fefb32ce176387dccede2a65' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\gift_certificates\\hooks\\orders\\product_info.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '51652495361ea77cb22ab59-54121751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oi' => 0,
    'c_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb2330d8_73559277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb2330d8_73559277')) {function content_61ea77cb2330d8_73559277($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificates'));
?>
<?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate']) {?>
    <div style="unicode-bidi: bidi-override;">;<span style="unicode-bidi: embed;"><span style="unicode-bidi: embed;">(<?php echo $_smarty_tpl->__("gift_certificates");?>
:</span>&nbsp;<span style="unicode-bidi: embed;"><?php  $_smarty_tpl->tpl_vars["c"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c"]->_loop = false;
 $_smarty_tpl->tpl_vars["c_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oi']->value['extra']['in_use_certificate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["c"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["c"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["c"]->key => $_smarty_tpl->tpl_vars["c"]->value) {
$_smarty_tpl->tpl_vars["c"]->_loop = true;
 $_smarty_tpl->tpl_vars["c_key"]->value = $_smarty_tpl->tpl_vars["c"]->key;
 $_smarty_tpl->tpl_vars["c"]->iteration++;
 $_smarty_tpl->tpl_vars["c"]->last = $_smarty_tpl->tpl_vars["c"]->iteration === $_smarty_tpl->tpl_vars["c"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["f_fciu"]['last'] = $_smarty_tpl->tpl_vars["c"]->last;
?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c_key']->value, ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['f_fciu']['last']) {?>,<?php }
} ?>)</span></div>
<?php }?><?php }} ?>
