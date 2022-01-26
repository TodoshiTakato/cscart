<?php /* Smarty version Smarty-3.1.21, created on 2022-01-24 12:42:58
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\my_first_cscart_module\hooks\orders\items_list_row.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27725523361eabd4cdee047-27171190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e342189d949fad7ffb3fb89142354d09984f7f51' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\my_first_cscart_module\\hooks\\orders\\items_list_row.override.tpl',
      1 => 1643010176,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '27725523361eabd4cdee047-27171190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61eabd4ce59e30_19886675',
  'variables' => 
  array (
    'order_info' => 0,
    'oi' => 0,
    'abc' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61eabd4ce59e30_19886675')) {function content_61eabd4ce59e30_19886675($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('deleted_product','sku','free','free'));
?>




<?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
?>
    <?php if (!$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']) {?>
        <?php $_smarty_tpl->tpl_vars['abc'] = new Smarty_variable($_smarty_tpl->tpl_vars['oi']->value["item_id"], null, 0);?>


        <tr>
            <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;">
                <div style="display: flex; align-items: center">
                    <div>
                        <img src="/images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['product_groups'][0]['products'][$_smarty_tpl->tpl_vars['abc']->value]['main_pair']['detailed']['relative_path'], ENT_QUOTES, 'UTF-8');?>
"
                             width="100" height="100">
                    </div>
                    <div>
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['oi']->value['product'])===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp);?>

                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?><p style="margin: 2px 0px 3px 0px;"><?php echo $_smarty_tpl->__("sku");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><br/><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);
}?>
                    </div>
                </div>
            </td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['original_price']), 0);
}?></td>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
                <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if (floatval($_smarty_tpl->tpl_vars['oi']->value['extra']['discount'])) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['extra']['discount']), 0);
} else { ?>&nbsp;-&nbsp;<?php }?></td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
                <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if ($_smarty_tpl->tpl_vars['oi']->value['tax_value']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['tax_value']), 0);
} else { ?>&nbsp;-&nbsp;<?php }?></td>
            <?php }?>

            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b><?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->__("free");
} else {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0);
}?></b>&nbsp;</td>
        </tr>
    <?php }?>
<?php } ?><?php }} ?>
