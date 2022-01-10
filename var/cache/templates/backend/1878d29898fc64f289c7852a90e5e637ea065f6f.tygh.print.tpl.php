<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 13:17:08
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\orders\components\bulk_edit\print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18081468761d570244d3b55-88911867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1878d29898fc64f289c7852a90e5e637ea065f6f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\orders\\components\\bulk_edit\\print.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18081468761d570244d3b55-88911867',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d570244d8282_53527130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d570244d8282_53527130')) {function content_61d570244d8282_53527130($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('invoice','invoice_pdf','packing_slip'));
?>
<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("invoice"),'dispatch'=>"dispatch[orders.bulk_print]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("invoice_pdf"),'dispatch'=>"dispatch[orders.bulk_print..pdf]",'form'=>"orders_list_form"));?>

</li>

<li>
    <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("packing_slip"),'dispatch'=>"dispatch[orders.packing_slip]",'form'=>"orders_list_form",'class'=>"cm-new-window"));?>

</li>
<?php }} ?>
