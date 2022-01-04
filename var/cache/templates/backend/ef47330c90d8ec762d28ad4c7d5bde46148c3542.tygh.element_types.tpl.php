<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\form_builder\views\pages\components\element_types.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125333961361d40ff54a97b1-88905846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef47330c90d8ec762d28ad4c7d5bde46148c3542' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\form_builder\\views\\pages\\components\\element_types.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125333961361d40ff54a97b1-88905846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elm_id' => 0,
    'num' => 0,
    'selectable_elements' => 0,
    'element_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40ff54ccd84_55585589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40ff54ccd84_55585589')) {function content_61d40ff54ccd84_55585589($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('base','selectbox','radiogroup','multiple_checkboxes','multiple_selectbox','checkbox','input_field','textarea','header','separator','special','date','email','number','phone','countries_list','states_list','file','referer','ip_address'));
?>
<select id="elm_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="page_data[form][elements_data][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][element_type]" onchange="fn_check_element_type(this.value, this.id, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selectable_elements']->value, ENT_QUOTES, 'UTF-8');?>
');">
    <optgroup label="<?php echo $_smarty_tpl->__("base");?>
">
    <option value="<?php echo htmlspecialchars((defined('FORM_SELECT') ? constant('FORM_SELECT') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_SELECT') ? constant('FORM_SELECT') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("selectbox");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_RADIO') ? constant('FORM_RADIO') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_RADIO') ? constant('FORM_RADIO') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("radiogroup");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("multiple_checkboxes");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("multiple_selectbox");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("checkbox");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_INPUT') ? constant('FORM_INPUT') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_INPUT') ? constant('FORM_INPUT') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("input_field");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("textarea");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_HEADER') ? constant('FORM_HEADER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_HEADER') ? constant('FORM_HEADER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("header");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("separator");?>
</option>
    </optgroup>
    <optgroup label="<?php echo $_smarty_tpl->__("special");?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"pages:form_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <option value="<?php echo htmlspecialchars((defined('FORM_DATE') ? constant('FORM_DATE') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_DATE') ? constant('FORM_DATE') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("date");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("email");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("number");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_PHONE') ? constant('FORM_PHONE') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("phone");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("countries_list");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_STATES') ? constant('FORM_STATES') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_STATES') ? constant('FORM_STATES') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("states_list");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_FILE') ? constant('FORM_FILE') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("file");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_REFERER') ? constant('FORM_REFERER') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_REFERER') ? constant('FORM_REFERER') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("referer");?>
</option>
    <option value="<?php echo htmlspecialchars((defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['element_type']->value==(defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ip_address");?>
</option>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"pages:form_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </optgroup>
</select><?php }} ?>
