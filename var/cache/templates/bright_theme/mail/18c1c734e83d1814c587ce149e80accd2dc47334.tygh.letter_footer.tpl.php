<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:01
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\mail\templates\common\letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132351755061ebde11e8bae1-70290614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c1c734e83d1814c587ce149e80accd2dc47334' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\mail\\templates\\common\\letter_footer.tpl',
      1 => 1641195373,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132351755061ebde11e8bae1-70290614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_type' => 0,
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde11e8e3d9_22372120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde11e8e3d9_22372120')) {function content_61ebde11e8e3d9_22372120($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('affiliate_text_letter_footer','customer_text_letter_footer'));
?>
<p>
<?php if ($_smarty_tpl->tpl_vars['user_type']->value=='P'||$_smarty_tpl->tpl_vars['user_data']->value['user_type']=='P') {?>
    <?php echo $_smarty_tpl->__("affiliate_text_letter_footer");?>

<?php } else { ?>
    <?php echo $_smarty_tpl->__("customer_text_letter_footer");?>

<?php }?>
</p>
</body>
</html><?php }} ?>
