<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 16:29:26
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\product_variations\hooks\products\update_fields_item.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44533297561e6c0b6edc522-45371655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b33c2b64a4a071b58cd7119d770b645bb3831f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_fields_item.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '44533297561e6c0b6edc522-45371655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'field' => 0,
    'v' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e6c0b6ee8aa8_85613829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e6c0b6ee8aa8_85613829')) {function content_61e6c0b6ee8aa8_85613829($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']&&$_smarty_tpl->tpl_vars['field']->value==="product") {?>
    <tr>
        <td valign="top" class="nowrap pad strong"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
        <td valign="top" class="pad nowrap">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['parent_product_id']) {?>
                <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</div>
                <input
                    type="hidden"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]"
                />
            <?php } else { ?>
                <input 
                    type="text"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                    class="input-medium input--no-margin"
                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]"
                />
            <?php }?>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_inline'=>true,'features_mini'=>true,'features_secondary'=>true), 0);?>

                <?php }?>
            </div>
        </td>
    </tr>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['product']->value['type']->isFieldAvailable($_smarty_tpl->tpl_vars['field']->value)) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
