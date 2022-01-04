<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_data_premoderation\components\disapproval_popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210177295761d3e7b6416d70-23009791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e40fd751819d4be39f91f8c2de998edb56da709' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\components\\disapproval_popup.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210177295761d3e7b6416d70-23009791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b641ca32_66366700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b641ca32_66366700')) {function content_61d3e7b641ca32_66366700($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('disapprove_products','vendor_data_premoderation.disapproval_reason','cancel','disapprove'));
?>

<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['product_id']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? $_smarty_tpl->__("disapprove_products") : $tmp), null, 0);?>
<div class="hidden" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" id="disapproval_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label">
                <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
            </label>
            <div class="controls">
                <textarea class="input-textarea-long premoderation-reason"
                          name="product_approval[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
][reason]"
                          cols="55"
                          rows="8"
                ></textarea>
            </div>
        </div>
    </div>
    <div class="buttons-container">
        <a class="cm-dialog-closer cm-cancel tool-link btn">
            <?php echo $_smarty_tpl->__("cancel");?>

        </a>
        <input type="submit"
               class="btn btn-primary"
               name="dispatch[premoderation.m_decline.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
               value="<?php echo $_smarty_tpl->__("disapprove");?>
"
        />
    </div>
    <!--disapproval_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
