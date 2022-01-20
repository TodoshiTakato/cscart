<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 14:25:18
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\my_first_cscart_module\hooks\products\manage_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58717180761e6814fbb5427-46496265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e732e4508b1ba70efa4d64e465d36685147652' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\my_first_cscart_module\\hooks\\products\\manage_body.post.tpl',
      1 => 1642505115,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58717180761e6814fbb5427-46496265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e6814fbe7ac1_33191644',
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e6814fbe7ac1_33191644')) {function content_61e6814fbe7ac1_33191644($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('my_first_cscart_module_setting'));
?>
<td width="13%"
    class="product-my_first_cscart_module_setting-column"
    data-th="<?php echo $_smarty_tpl->__("my_first_cscart_module_setting");?>
"
>
    <a class="row-status"
       title="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['my_first_cscart_module_setting']), ENT_QUOTES, 'UTF-8');?>
"
       href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['my_first_cscart_module_setting'],20), ENT_QUOTES, 'UTF-8');?>

    </a>

    <input type="text"
           name="products_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][my_first_cscart_module_setting]"
           size="6"
           value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product']->value['my_first_cscart_module_setting'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['my_first_cscart_module_setting'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
           class="input-full input-hidden"
    />

</td><?php }} ?>
