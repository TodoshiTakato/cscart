<?php /* Smarty version Smarty-3.1.21, created on 2022-01-22 15:36:02
         compiled from "C:\OpenServer\domains\cscart\design\backend\mail\templates\common\letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157512256661ebde12b39921-25541364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef73ddab88527507b157a868809c96c6da8a0709' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\mail\\templates\\common\\letter_footer.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157512256661ebde12b39921-25541364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61ebde12b3b781_00257016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61ebde12b3b781_00257016')) {function content_61ebde12b3b781_00257016($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_text_letter_footer'));
?>
<p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php }} ?>
