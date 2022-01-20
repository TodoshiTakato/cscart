<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 09:30:36
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\stripe_connect\hooks\companies\general_information.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130245742161e65e8c31e1d3-12954337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d47c27e5d472ff1b640597e34cef6e223dad950' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\stripe_connect\\hooks\\companies\\general_information.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '130245742161e65e8c31e1d3-12954337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'runtime' => 0,
    'stripe_connect_url' => 0,
    'stripe_disconnect_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e65e8c326410_84763427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e65e8c326410_84763427')) {function content_61e65e8c326410_84763427($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('stripe_connect.stripe_connect','stripe_connect.stripe_account','stripe_connect.not_connected','stripe_connect.connect_with_stripe','stripe_connect.disconnect'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("stripe_connect.stripe_connect")), 0);?>

<div class="control-group">
    <label for="elm_stripe_connect_auth"
           class="control-label"
    ><?php echo $_smarty_tpl->__("stripe_connect.stripe_account");?>
:</label>
    <div class="controls">
        <input type="hidden"
               name="company_data[stripe_connect_account_id]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['stripe_connect_account_id'], ENT_QUOTES, 'UTF-8');?>
"
        />
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['stripe_connect_account_id']) {?>
            <p class="text-success"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['stripe_connect_account_id'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php } else { ?>
            <p><?php echo $_smarty_tpl->__("stripe_connect.not_connected");?>
</p>
        <?php }?>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_id']&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&($_smarty_tpl->tpl_vars['stripe_connect_url']->value||$_smarty_tpl->tpl_vars['stripe_disconnect_url']->value)) {?>
    <div class="control-group">
        <label class="control-label">&nbsp;</label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['stripe_connect_url']->value) {?>
                <a class="btn btn-primary"
                   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_connect_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo $_smarty_tpl->__("stripe_connect.connect_with_stripe");?>
</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['stripe_disconnect_url']->value) {?>
                <a class="btn cm-post"
                   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stripe_disconnect_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo $_smarty_tpl->__("stripe_connect.disconnect");?>
</a>
            <?php }?>
        </div>
    </div>
<?php }?>
<?php }} ?>
