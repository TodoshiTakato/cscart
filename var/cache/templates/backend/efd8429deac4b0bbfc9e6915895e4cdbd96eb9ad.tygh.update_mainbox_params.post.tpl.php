<?php /* Smarty version Smarty-3.1.21, created on 2022-01-10 09:13:03
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_mainbox_params.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167605588661dbce6f4e57e3-01923270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd8429deac4b0bbfc9e6915895e4cdbd96eb9ad' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_mainbox_params.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167605588661dbce6f4e57e3-01923270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'heading_length' => 0,
    'product_name_length' => 0,
    'product_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61dbce6f4f81a1_58470485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61dbce6f4f81a1_58470485')) {function content_61dbce6f4f81a1_58470485($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_script')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_features']) {?>
    

    
    <?php $_smarty_tpl->tpl_vars['heading_length'] = new Smarty_variable(40, null, 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_title", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product_data']->value['variation_features'],'features_tags'=>false), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php $_smarty_tpl->tpl_vars['product_name_length'] = new Smarty_variable($_smarty_tpl->tpl_vars['heading_length']->value-mb_strlen(Smarty::$_smarty_vars['capture']['variation_features_title'], 'UTF-8'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['product_name'] = new Smarty_variable(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_data']->value['product']),$_smarty_tpl->tpl_vars['product_name_length']->value,"...",true), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['title_end'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['product_name']->value)." ??? ".((string)Smarty::$_smarty_vars['capture']['variation_features_title']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['title_end'] = clone $_smarty_tpl->tpl_vars['title_end'];?>

    <?php $_smarty_tpl->tpl_vars['title_alt'] = new Smarty_variable(((string)preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product_data']->value['product']))." ??? ".((string)Smarty::$_smarty_vars['capture']['variation_features_title']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['title_alt'] = clone $_smarty_tpl->tpl_vars['title_alt'];?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/addons/product_variations/tygh/backend/func.js"),$_smarty_tpl);?>

<?php }} ?>
