<?php /* Smarty version Smarty-3.1.21, created on 2022-01-21 14:07:23
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\addons\gift_certificates\hooks\orders\extra_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106533238661ea77cb27f944-88881442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6f3541ac6818c81845d40dc01b802f5bd46897' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\addons\\gift_certificates\\hooks\\orders\\extra_list.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '106533238661ea77cb27f944-88881442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'gift' => 0,
    'settings' => 0,
    'addons' => 0,
    '_colspan' => 0,
    'oi' => 0,
    'gift_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ea77cb2a5867_91400832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ea77cb2a5867_91400832')) {function content_61ea77cb2a5867_91400832($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('gift_certificate','code','free','free','free_products','product','quantity','unit_price','discount','tax','subtotal','deleted_product','sku'));
?>
<?php if ($_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']) {?>

<?php  $_smarty_tpl->tpl_vars["gift"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gift"]->_loop = false;
 $_smarty_tpl->tpl_vars["gift_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gift"]->key => $_smarty_tpl->tpl_vars["gift"]->value) {
$_smarty_tpl->tpl_vars["gift"]->_loop = true;
 $_smarty_tpl->tpl_vars["gift_key"]->value = $_smarty_tpl->tpl_vars["gift"]->key;
?>
<tr>
    <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;">
        <?php echo $_smarty_tpl->__("gift_certificate");?>

        <?php if ($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code']) {?>
        <p><?php echo $_smarty_tpl->__("code");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
    </td>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;">&nbsp;1</td>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></td>    
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">-</td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">-</td>
    <?php }?>

    <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><b><?php if (!$_smarty_tpl->tpl_vars['gift']->value['extra']['exclude_from_calculate']) {
echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['gift']->value['display_subtotal']), 0);
} else {
echo $_smarty_tpl->__("free");
}?></b>&nbsp;</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['gift']->value['products']&&$_smarty_tpl->tpl_vars['addons']->value['gift_certificates']['free_products_allow']=='Y') {?>
<tr>
    <?php $_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable("4", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {
$_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);
}?>
    <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {
$_smarty_tpl->tpl_vars["_colspan"] = new Smarty_variable($_smarty_tpl->tpl_vars['_colspan']->value+1, null, 0);
}?>
    <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;" colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_colspan']->value, ENT_QUOTES, 'UTF-8');?>
">
        <p><?php echo $_smarty_tpl->__("free_products");?>
 (<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['gift']->value['gift_cert_code'])===null||$tmp==='' ? "&nbsp;" : $tmp), ENT_QUOTES, 'UTF-8');?>
):</p>

        <table width="100%" cellpadding="0" cellspacing="1" style="background-color: #dddddd;">
        <tr>
            <th width="70%" style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("product");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("quantity");?>
</th>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("unit_price");?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['use_discount']) {?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("discount");?>
</th>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['order_info']->value['taxes']&&$_smarty_tpl->tpl_vars['settings']->value['Checkout']['tax_calculation']!="subtotal") {?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("tax");?>
</th>
            <?php }?>
            <th style="background-color: #eeeeee; padding: 6px 10px; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->__("subtotal");?>
</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars["oi"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["oi"]->_loop = false;
 $_smarty_tpl->tpl_vars["sub_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["oi"]->key => $_smarty_tpl->tpl_vars["oi"]->value) {
$_smarty_tpl->tpl_vars["oi"]->_loop = true;
 $_smarty_tpl->tpl_vars["sub_key"]->value = $_smarty_tpl->tpl_vars["oi"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']&&$_smarty_tpl->tpl_vars['oi']->value['extra']['parent']['certificate']==$_smarty_tpl->tpl_vars['gift_key']->value) {?>
        <tr>
            <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['oi']->value['product'])===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp), ENT_QUOTES, 'UTF-8');?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"orders:product_info")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"orders:product_info"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_code']) {?><p><?php echo $_smarty_tpl->__("sku");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"orders:product_info"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php if ($_smarty_tpl->tpl_vars['oi']->value['product_options']) {?><div style="padding-top: 1px; padding-bottom: 2px;"><?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['oi']->value['product_options']), 0);?>
</div><?php }?>
            </td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oi']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['price']), 0);?>
</td>
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
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['oi']->value['display_subtotal']), 0);?>
&nbsp;</td>
        </tr>
        <?php }?>
        <?php } ?>
        </table>
    </td>
</tr>
<?php }?>
<?php } ?>
<?php }?><?php }} ?>
