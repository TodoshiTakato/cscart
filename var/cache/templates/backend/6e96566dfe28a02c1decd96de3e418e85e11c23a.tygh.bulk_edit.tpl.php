<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:22
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\pages\components\bulk_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166205656061d40fee1d7226-86708039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e96566dfe28a02c1decd96de3e418e85e11c23a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\pages\\components\\bulk_edit.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166205656061d40fee1d7226-86708039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages_statuses' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40fee1ddfe3_18508994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40fee1ddfe3_18508994')) {function content_61d40fee1ddfe3_18508994($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('selected','parent','status','actions'));
?>
<div class="bulk-edit clearfix hidden"
     data-ca-bulkedit-expanded-object="true"
     data-ca-bulkedit-component="expandedObject"
>

    <ul class="btn-group bulk-edit__wrapper">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:bulk_edit_items")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:bulk_edit_items"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="btn bulk-edit__btn bulk-edit__btn--check-items">
            <input class="bulk-edit__btn-content--checkbox hidden bulkedit-disabler" 
                   type="checkbox" 
                   checked 
                   data-ca-bulkedit-toggler="true"
                   data-ca-bulkedit-enable="[data-ca-bulkedit-default-object=true]" 
                   data-ca-bulkedit-disable="[data-ca-bulkedit-expanded-object=true]"
            />
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown">
                <span data-ca-longtap-selected-counter="true">0</span> <span class="mobile-hide"><?php echo $_smarty_tpl->__("selected");?>
</span> <span class="caret mobile-hide"></span>
            </span>
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dropdown_menu_class'=>"cm-check-items",'wrap_select_actions_into_dropdown'=>true,'check_statuses'=>$_smarty_tpl->tpl_vars['pages_statuses']->value), 0);?>

        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--parent dropleft-mod">
            <span class="bulk-edit__btn-content bulk-edit-toggle bulk-edit__btn-content--parent" data-toggle=".bulk-edit__content--parent">
                <?php echo $_smarty_tpl->__("parent");?>
 
                <span class="caret mobile-hide"></span>
            </span>

            <div class="bulk-edit--reset-dropdown-menu bulk-edit__content bulk-edit__content--parent">
                <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/bulk_edit/parent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>

            <div class="bulk-edit--overlay"></div>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--status dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("status");?>
 <span class="caret mobile-hide"></span></span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/bulk_edit/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>

        <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__("actions");?>
 <span class="caret mobile-hide"></span></span>

            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->getSubTemplate ("views/pages/components/bulk_edit/actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </ul>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:bulk_edit_items"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

</div>
<?php }} ?>
