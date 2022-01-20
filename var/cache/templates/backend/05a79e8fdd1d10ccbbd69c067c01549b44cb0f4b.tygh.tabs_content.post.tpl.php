<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 09:30:36
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\paypal_commerce_platform\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87451680261e65e8c4c4248-64469991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05a79e8fdd1d10ccbbd69c067c01549b44cb0f4b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\paypal_commerce_platform\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '87451680261e65e8c4c4248-64469991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'paypal_commerce_platform_connect_url' => 0,
    'paypal_commerce_platform_disconnect_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e65e8c4cbe57_35495836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e65e8c4cbe57_35495836')) {function content_61e65e8c4cbe57_35495836($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('paypal_commerce_platform.paypal_account','paypal_commerce_platform.not_connected','paypal_commerce_platform.connect_with_paypal','paypal_commerce_platform.disconnect'));
?>
<div class="hidden" id="content_paypal_commerce_platform">
    <div class="control-group">
        <label for="elm_paypal_commerce_platform_auth"
               class="control-label"
        ><?php echo $_smarty_tpl->__("paypal_commerce_platform.paypal_account");?>
:</label>
        <div class="controls">
            <input type="hidden"
                   name="company_data[paypal_commerce_platform_account_id]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['paypal_commerce_platform_account_id'], ENT_QUOTES, 'UTF-8');?>
"
            />
            <input type="hidden"
                   name="company_data[paypal_commerce_platform_email]"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['paypal_commerce_platform_email'], ENT_QUOTES, 'UTF-8');?>
"
            />
            <p class="paypal-commerce-platform__account">
                <?php if ($_smarty_tpl->tpl_vars['company_data']->value['paypal_commerce_platform_account_id']) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['paypal_commerce_platform_account_id'], ENT_QUOTES, 'UTF-8');?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->__("paypal_commerce_platform.not_connected");?>

                <?php }?>
            </p>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_id']&&($_smarty_tpl->tpl_vars['paypal_commerce_platform_connect_url']->value||$_smarty_tpl->tpl_vars['paypal_commerce_platform_disconnect_url']->value)) {?>
        <div class="control-group">
            <label class="control-label">&nbsp;</label>
            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['paypal_commerce_platform_connect_url']->value) {?>
                    <a class="btn btn-primary"
                       href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paypal_commerce_platform_connect_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    ><?php echo $_smarty_tpl->__("paypal_commerce_platform.connect_with_paypal");?>
</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['paypal_commerce_platform_disconnect_url']->value) {?>
                    <a class="btn cm-post"
                       href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paypal_commerce_platform_disconnect_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    ><?php echo $_smarty_tpl->__("paypal_commerce_platform.disconnect");?>
</a>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div><?php }} ?>
