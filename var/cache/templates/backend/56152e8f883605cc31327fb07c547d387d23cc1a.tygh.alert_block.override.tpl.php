<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 10:36:32
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_debt_payout\hooks\index\alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41791987061d2a7801b9c26-25543370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56152e8f883605cc31327fb07c547d387d23cc1a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\alert_block.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41791987061d2a7801b9c26-25543370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2a7801bc354_52331467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2a7801bc354_52331467')) {function content_61d2a7801bc354_52331467($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>
