<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 12:13:18
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\divido\hooks\products\prices_block.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60674210561d2be2e54f6c3-05572437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4696c0344fe22355c66e8f7066ee72bf44eac1c7' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\divido\\hooks\\products\\prices_block.post.tpl',
      1 => 1641195646,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '60674210561d2be2e54f6c3-05572437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2be2e55b1a3_62337755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2be2e55b1a3_62337755')) {function content_61d2be2e55b1a3_62337755($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['divido_data']['show_calculator']) {?>
    <div
            class="ty-divido__price"
            data-divido-widget
            data-divido-api-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['divido_data']['api_key'], ENT_QUOTES, 'UTF-8');?>
"
            data-divido-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['divido_data']['price'], ENT_QUOTES, 'UTF-8');?>
"
    ></div>
    <?php echo smarty_function_script(array('src'=>"js/addons/divido/widget.js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/divido/hooks/products/prices_block.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/divido/hooks/products/prices_block.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['divido_data']['show_calculator']) {?>
    <div
            class="ty-divido__price"
            data-divido-widget
            data-divido-api-key="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['divido_data']['api_key'], ENT_QUOTES, 'UTF-8');?>
"
            data-divido-amount="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['divido_data']['price'], ENT_QUOTES, 'UTF-8');?>
"
    ></div>
    <?php echo smarty_function_script(array('src'=>"js/addons/divido/widget.js",'class'=>"cm-ajax-force"),$_smarty_tpl);?>

<?php }
}?><?php }} ?>
