<?php /* Smarty version Smarty-3.1.21, created on 2022-01-26 16:29:56
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_payment\views\payments\components\cc_processors\my_payment_admin_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34482174461ee7f74df4837-81762248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e0a2248b7eb4e40d0a99dc2465869340dad997' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_payment\\views\\payments\\components\\cc_processors\\my_payment_admin_template.tpl',
      1 => 1643196460,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34482174461ee7f74df4837-81762248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ee7f74e53a10_14634767',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ee7f74e53a10_14634767')) {function content_61ee7f74e53a10_14634767($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_my_payment_callback_url','addons.my_payment.merchant_id','addons.my_payment.merchant_user_id','addons.my_payment.service_id','addons.my_payment.secret_key','addons.my_payment.paid_status'));
?>
<?php $_smarty_tpl->tpl_vars["prepare_url"] = new Smarty_variable(fn_url("payment_notification.prepare?payment=click_uz",'C','https'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["complete_url"] = new Smarty_variable(fn_url("payment_notification.complete?payment=click_uz",'C','https'), null, 0);?>
<p><?php echo $_smarty_tpl->__("text_my_payment_callback_url",array("[prepare_url]"=>$_smarty_tpl->tpl_vars['prepare_url']->value,"[complete_url]"=>$_smarty_tpl->tpl_vars['complete_url']->value));?>
</p>

<hr>

<div class="control-group">
    <label class="control-label" for="my_payment_merchant_id"><?php echo $_smarty_tpl->__("addons.my_payment.merchant_id");?>
:</label>
    <div class="controls">
        <input type="text"
               name="payment_data[processor_params][merchant_id]"
               id="my_payment_merchant_id"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_id'], ENT_QUOTES, 'UTF-8');?>
"
               size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_merchant_user_id"><?php echo $_smarty_tpl->__("addons.my_payment.merchant_user_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_user_id]" id="my_payment_merchant_user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_user_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_service_id"><?php echo $_smarty_tpl->__("addons.my_payment.service_id");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][service_id]" id="my_payment_service_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['service_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_secret_key"><?php echo $_smarty_tpl->__("addons.my_payment.secret_key");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][secret_key]" id="my_payment_secret_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['secret_key'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
    </div>
</div>

<div class="control-group">
    <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null)), null, 0);?>
    <label class="control-label" for="my_payment_paid"><?php echo $_smarty_tpl->__("addons.my_payment.paid_status");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][paid_status]" id="my_payment_paid">
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
