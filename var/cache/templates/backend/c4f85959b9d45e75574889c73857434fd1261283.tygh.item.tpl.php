<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 09:30:36
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_plans\views\vendor_plans\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175553427461e65e8c528992-84273831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f85959b9d45e75574889c73857434fd1261283' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_plans\\views\\vendor_plans\\components\\picker\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175553427461e65e8c528992-84273831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'title_post' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e65e8c5302b8_21573911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e65e8c5302b8_21573911')) {function content_61e65e8c5302b8_21573911($_smarty_tpl) {?><div class="object-picker__vendor-plan-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="result") {?>
        <div class="object-picker__vendor-plan-content">
            <div class="object-picker__vendor-plan-name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name}<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
            <div class="object-picker__vendor-plan-monthly-fee">
                ${data.price}&nbsp;${data.periodicity}
            </div>
            <div class="object-picker__vendor-plan-transaction-fee">
                ${data.commission_text}
            </div>
            <div class="object-picker__vendor-plan-vendor-count">
                ${data.vendor_count_text}
            </div>
            <div class="object-picker__vendor-plan-status">
                ${data.status}
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="selection") {?>
        ${data.name}(${data.price})
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="new_item") {?>
        <div class="object-picker__results-label object-picker__vendor-plan-results-label">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__vendor-plan-results-label-icon-wrapper">
                    <i class="object-picker__results-label-icon object-picker__vendor-plan-results-label-icon <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? "icon-plus-sign" : $tmp), ENT_QUOTES, 'UTF-8');?>
"></i>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__vendor-plan-results-label-prefix">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__vendor-plan-results-label-body">
                ${data.name}
            </div>
        </div>
    <?php }?>
</div><?php }} ?>
