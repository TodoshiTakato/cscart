<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 13:13:12
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\my_first_cscart_module\blocks\my_first_cscart_module_setting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135651193661e7e56e6460d6-50755676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e61321e3ba876f27fd967797fbae6e2044f5d4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\my_first_cscart_module\\blocks\\my_first_cscart_module_setting.tpl',
      1 => 1642673587,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '135651193661e7e56e6460d6-50755676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e7e56e6903e2_47181500',
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'city' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e7e56e6903e2_47181500')) {function content_61e7e56e6903e2_47181500($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><p>
    Халоу
    <a class="cm-dialog-opener cm-dialog-auto-size"
       data-ca-target-id="my_first_cscart_module_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['clock_id'], ENT_QUOTES, 'UTF-8');?>
"
       href="<?php echo htmlspecialchars(fn_url("categories.view&category_id=245"), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
 Ссылка-открывашка
    </a>
</p>

<div id="my_first_cscart_module_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['clock_id'], ENT_QUOTES, 'UTF-8');?>
"
     class="hidden"
     title="Заголовок окна"
>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/my_first_cscart_module/blocks/my_first_cscart_module_setting.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/my_first_cscart_module/blocks/my_first_cscart_module_setting.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><p>
    Халоу
    <a class="cm-dialog-opener cm-dialog-auto-size"
       data-ca-target-id="my_first_cscart_module_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['clock_id'], ENT_QUOTES, 'UTF-8');?>
"
       href="<?php echo htmlspecialchars(fn_url("categories.view&category_id=245"), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8');?>
 Ссылка-открывашка
    </a>
</p>

<div id="my_first_cscart_module_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['clock_id'], ENT_QUOTES, 'UTF-8');?>
"
     class="hidden"
     title="Заголовок окна"
>
</div><?php }?><?php }} ?>
