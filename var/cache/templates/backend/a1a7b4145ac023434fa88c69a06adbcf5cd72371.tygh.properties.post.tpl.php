<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:03
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\google_export\hooks\product_options\properties.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53228323761dbce6f2aeba2-98729127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a7b4145ac023434fa88c69a06adbcf5cd72371' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\google_export\\hooks\\product_options\\properties.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53228323761dbce6f2aeba2-98729127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field_options' => 0,
    'field_option' => 0,
    'option_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6f2b78e1_23884329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6f2b78e1_23884329')) {function content_61dbce6f2b78e1_23884329($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('addons.google_export.google_export','google_name_option','none','tt_addons_google_export_hooks_product_options_properties_post_google_name_option'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.google_export.google_export"),'target'=>"#acc_google_export"), 0);?>

<div id="acc_google_export">
    <div class="control-group">
        <label class="control-label" for="google_name_option"><?php echo $_smarty_tpl->__("google_name_option");?>
</label>
        <div class="controls">
            <select id="google_name_option" name="option_data[google_export_name_option]">
                <option value="not_option" selected="selected"><?php echo $_smarty_tpl->__("none");?>
</option>
                <?php  $_smarty_tpl->tpl_vars["field_option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field_option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field_option"]->key => $_smarty_tpl->tpl_vars["field_option"]->value) {
$_smarty_tpl->tpl_vars["field_option"]->_loop = true;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_option']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['google_export_name_option']==$_smarty_tpl->tpl_vars['field_option']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_option']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_google_export_hooks_product_options_properties_post_google_name_option");?>
</p>
        </div>
    </div>
</div>
<?php }} ?>
