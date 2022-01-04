<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:46
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\bulk_edit_items.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164460629161d3e7b63b9848-34286724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334f42231653cb5faeec3f7a1e60e4affc043a71' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\bulk_edit_items.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '164460629161d3e7b63b9848-34286724',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b63c0679_75602981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b63c0679_75602981')) {function content_61d3e7b63c0679_75602981($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_approval','approve_selected','disapprove_selected','vendor_data_premoderation.disapprove_products'));
?>
<?php if (fn_check_permissions("premoderation","m_approve","admin")) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:bulk_edit_items_product_approval")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:bulk_edit_items_product_approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="btn bulk-edit__btn bulk-edit__btn--actions dropleft-mod">
            <span class="bulk-edit__btn-content dropdown-toggle"
                  data-toggle="dropdown"
            >
                <?php echo $_smarty_tpl->__("product_approval");?>

                <span class="caret mobile-hide"></span>
            </span>

            <ul class="dropdown-menu">
                <li>
                    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("approve_selected"),'dispatch'=>"dispatch[premoderation.m_approve]",'form'=>"manage_products_form"));?>

                </li>

                <li>
                    <a data-ca-target-id="disapproval_reason_0"
                       class="cm-dialog-opener cm-dialog-auto-size"
                    >
                        <?php echo $_smarty_tpl->__("disapprove_selected");?>

                    </a>
                </li>
            </ul>
        </li>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>0,'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_products")), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:bulk_edit_items_product_approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
