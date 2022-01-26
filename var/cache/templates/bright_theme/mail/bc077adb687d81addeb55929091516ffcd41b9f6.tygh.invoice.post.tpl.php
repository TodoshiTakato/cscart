<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:01
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\mail\templates\addons\store_locator\hooks\orders\invoice.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107149470561ebde11e5f869-21770931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc077adb687d81addeb55929091516ffcd41b9f6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\mail\\templates\\addons\\store_locator\\hooks\\orders\\invoice.post.tpl',
      1 => 1641195378,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107149470561ebde11e5f869-21770931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'shipping' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde11e6fd15_34747203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde11e6fd15_34747203')) {function content_61ebde11e6fd15_34747203($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['order_info']->value['shipping']) {?>
    <?php  $_smarty_tpl->tpl_vars["shipping"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["shipping"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value['shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["shipping"]->key => $_smarty_tpl->tpl_vars["shipping"]->value) {
$_smarty_tpl->tpl_vars["shipping"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["shipping"]->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['module']=='store_locator'&&$_smarty_tpl->tpl_vars['addons']->value['store_locator']['print_map']=='Y') {?>
            <?php if ($_smarty_tpl->tpl_vars['shipping']->value['store_data']) {?>
                <hr/>
                <div>
                    <div>
                    <h2><?php echo $_smarty_tpl->__('store_locator.pickup');?>
</h2>
                    <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
                    <p>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['city'], ENT_QUOTES, 'UTF-8');?>
<br/>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_address']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_address'], ENT_QUOTES, 'UTF-8');?>
<br/><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_phone']) {?><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi><br/><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_time']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping']->value['store_data']['pickup_time'], ENT_QUOTES, 'UTF-8');?>
<br/><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['shipping']->value['store_data']['description']) {
echo $_smarty_tpl->tpl_vars['shipping']->value['store_data']['description'];
}?>
                    </p>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['shipping']->value['store_data']['longitude']&&$_smarty_tpl->tpl_vars['shipping']->value['store_data']['latitude']) {?>
                    <div>
                        <img src="http://static-maps.yandex.ru/1.x/?l=map&ll=<?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['shipping']->value['store_data']['longitude']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['shipping']->value['store_data']['latitude']), ENT_QUOTES, 'UTF-8');?>
&z=15&size=400,300&pt=<?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['shipping']->value['store_data']['longitude']), ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars(doubleval($_smarty_tpl->tpl_vars['shipping']->value['store_data']['latitude']), ENT_QUOTES, 'UTF-8');?>
,pm2lbl" width="400" height="300" />
                    </div>
                    <?php }?>
                </div>
                <hr/>
            <?php }?>
        <?php }?>
    <?php } ?>
<?php }?><?php }} ?>
