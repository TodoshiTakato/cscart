<?php /* Smarty version Smarty-3.1.21, created on 2022-01-26 11:38:25
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\click_uz\views\payments\components\cc_processors\click_uz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101498462861f0ec61559d25-65555624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd49f993bd1e68ac3c11e197e7adf3e9b8a057511' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\click_uz\\views\\payments\\components\\cc_processors\\click_uz.tpl',
      1 => 1643007832,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101498462861f0ec61559d25-65555624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prepare_url' => 0,
    'complete_url' => 0,
    'processor_params' => 0,
    'statuses' => 0,
    'k' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f0ec61596445_82496766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f0ec61596445_82496766')) {function content_61f0ec61596445_82496766($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_click_uz_callback_url','addons.click_uz.merchant_id','addons.click_uz.merchant_user_id','addons.click_uz.service_id','addons.click_uz.secret_key','addons.click_uz.paid_status'));
?>
<?php $_smarty_tpl->tpl_vars["prepare_url"] = new Smarty_variable(fn_url("payment_notification.prepare?payment=click_uz",'C','https'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["complete_url"] = new Smarty_variable(fn_url("payment_notification.complete?payment=click_uz",'C','https'), null, 0);?>
<p><?php echo $_smarty_tpl->__("text_click_uz_callback_url",array("[prepare_url]"=>$_smarty_tpl->tpl_vars['prepare_url']->value,"[complete_url]"=>$_smarty_tpl->tpl_vars['complete_url']->value));?>
</p>

<hr>

<div class="control-group">
    <label class="control-label" for="click_merchant_id"><?php echo $_smarty_tpl->__("addons.click_uz.merchant_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_id]" id="click_merchant_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="click_merchant_user_id"><?php echo $_smarty_tpl->__("addons.click_uz.merchant_user_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_user_id]" id="click_merchant_user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_user_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="click_service_id"><?php echo $_smarty_tpl->__("addons.click_uz.service_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][service_id]" id="click_service_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['service_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="click_secret_key"><?php echo $_smarty_tpl->__("addons.click_uz.secret_key");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][secret_key]" id="click_secret_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['secret_key'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), null, 0);?>
    <label class="control-label" for="click_uz_paid"><?php echo $_smarty_tpl->__("addons.click_uz.paid_status");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][paid_status]" id="click_uz_paid">
            <?php  $_smarty_tpl->tpl_vars["s"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["s"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["s"]->key => $_smarty_tpl->tpl_vars["s"]->value) {
$_smarty_tpl->tpl_vars["s"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["s"]->key;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['processor_params']->value['paid_status'])&&$_smarty_tpl->tpl_vars['processor_params']->value['paid_status']==$_smarty_tpl->tpl_vars['k']->value)||(!isset($_smarty_tpl->tpl_vars['processor_params']->value['paid_status'])&&$_smarty_tpl->tpl_vars['k']->value=='P')) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>
<?php }} ?>
