<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 09:22:47
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_data_premoderation\hooks\products\manage_mainbox_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28654730061d3e7b7571ed4-85214386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '900a029e39fbdbd52e58a74a29aa6cfd2166e8f5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_data_premoderation\\hooks\\products\\manage_mainbox_title.override.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '28654730061d3e7b7571ed4-85214386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d3e7b7574be5_73654592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3e7b7574be5_73654592')) {function content_61d3e7b7574be5_73654592($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]['title'], ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php }} ?>
