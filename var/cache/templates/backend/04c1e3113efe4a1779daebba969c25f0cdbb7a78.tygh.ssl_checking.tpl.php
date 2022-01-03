<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 10:38:42
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\settings_wizard\components\ssl_checking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179194379561d2a802cf83a5-02185773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c1e3113efe4a1779daebba969c25f0cdbb7a78' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\settings_wizard\\components\\ssl_checking.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '179194379561d2a802cf83a5-02185773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checking_result' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2a802cfe4f3_00862279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2a802cfe4f3_00862279')) {function content_61d2a802cfe4f3_00862279($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('warning_https_is_disabled','ssl_certificate','check_ssl','fail','ok'));
?>
<div id="ssl_checking">
    <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
    <br>
    <div class="alert alert-block alert-error fade in">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p><?php echo $_smarty_tpl->__("warning_https_is_disabled",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['kb_https_failed_url']));?>
</p>
    </div>
    <?php }?>
    <br>
    <div class="control-group setting-wide">
        <label for="" class="control-label"><?php echo $_smarty_tpl->__("ssl_certificate");?>
</label>
        <div class="controls">
            <a class="btn cm-ajax" href="<?php echo htmlspecialchars(fn_url("settings_wizard.check_ssl"), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="ssl_checking"><?php echo $_smarty_tpl->__("check_ssl");?>
</a>
            <?php if ($_smarty_tpl->tpl_vars['checking_result']->value=="fail") {?>
                <span class="label label-important"><?php echo $_smarty_tpl->__("fail");?>
</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['checking_result']->value=="ok") {?>
                <span class="label label-success"><?php echo $_smarty_tpl->__("ok");?>
</span>
            <?php }?>
        </div>
    </div>
<!--ssl_checking--></div><?php }} ?>
