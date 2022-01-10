<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 15:02:05
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\gdpr\views\gdpr\get_user_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162331166661d588bdd36e58-58243032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8bf5387ee75978a7bd917b4a5e1ea0e22e8048e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\gdpr\\views\\gdpr\\get_user_data.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162331166661d588bdd36e58-58243032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'anonymized' => 0,
    'return_current_url' => 0,
    'gdpr_user_data' => 0,
    'item_name' => 0,
    'user' => 0,
    'field_name' => 0,
    'field_values' => 0,
    'order_link' => 0,
    'order_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d588bdd84925_54423305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d588bdd84925_54423305')) {function content_61d588bdd84925_54423305($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.export_to_xml','gdpr.text_anonymize_question','gdpr.anonymize','user_info','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','gdpr_'));
?>
<div id="content_gdpr_user_data">
    <?php $_smarty_tpl->tpl_vars['return_current_url'] = new Smarty_variable(rawurlencode("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"action",'but_meta'=>"cm-post",'target'=>"_blank",'but_href'=>"gdpr.export_to_xml?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value),'but_text'=>$_smarty_tpl->__("gdpr.export_to_xml")), 0);?>

    <?php if (!$_smarty_tpl->tpl_vars['anonymized']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("gdpr.text_anonymize_question");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"text",'href'=>"gdpr.anonymize?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'class'=>"btn cm-confirm",'data'=>array("data-ca-confirm-text"=>$_tmp1),'text'=>$_smarty_tpl->__("gdpr.anonymize"),'method'=>"POST"));?>

    <?php }?>
    <table class="table table-sort table-middle table--relative">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->__("user_info");?>
</th>
            </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['item_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gdpr_user_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['item_name']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
            <tr>
                <td>
                    <span alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts"><span class="icon-caret-right"></span></span>
                    <span alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-combination-carts"><span class="icon-caret-down"></span></span>
                    <?php echo $_smarty_tpl->__("gdpr_".((string)$_smarty_tpl->tpl_vars['item_name']->value));?>

                </td>
            </tr>
            <tbody id="user_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden row-more">
                <tr class="no-border">
                    <td colspan="3" class="row-more-body top row-gray">
                        <dl>
                            <?php  $_smarty_tpl->tpl_vars['field_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_values']->_loop = false;
 $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_values']->key => $_smarty_tpl->tpl_vars['field_values']->value) {
$_smarty_tpl->tpl_vars['field_values']->_loop = true;
 $_smarty_tpl->tpl_vars['field_name']->value = $_smarty_tpl->tpl_vars['field_values']->key;
?>
                                <dt><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name']->value, ENT_QUOTES, 'UTF-8');?>
</b></dt>
                                <dd>
                                    <?php if ($_smarty_tpl->tpl_vars['field_name']->value=="orders_list") {?>
                                        <?php  $_smarty_tpl->tpl_vars['order_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_link']->_loop = false;
 $_smarty_tpl->tpl_vars['order_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_link']->key => $_smarty_tpl->tpl_vars['order_link']->value) {
$_smarty_tpl->tpl_vars['order_link']->_loop = true;
 $_smarty_tpl->tpl_vars['order_id']->value = $_smarty_tpl->tpl_vars['order_link']->key;
?>
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_id']->value, ENT_QUOTES, 'UTF-8');?>
 </a>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <?php echo (($tmp = @implode(" | ",(array) $_smarty_tpl->tpl_vars['field_values']->value))===null||$tmp==='' ? "—" : $tmp);?>

                                    <?php }?>
                                </dd>
                            <?php } ?>
                        </dl>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
<!--content_gdpr_user_data--></div>
<?php }} ?>
