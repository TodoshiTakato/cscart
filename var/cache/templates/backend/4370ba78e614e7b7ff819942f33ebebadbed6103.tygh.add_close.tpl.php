<?php /* Smarty version Smarty-3.1.21, created on 2022-01-05 10:45:14
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\buttons\add_close.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57248866661d54c8af33706-29638095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4370ba78e614e7b7ff819942f33ebebadbed6103' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\buttons\\add_close.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '57248866661d54c8af33706-29638095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'disable_cancel' => 0,
    'is_js' => 0,
    'but_close_text' => 0,
    'but_close_onclick' => 0,
    'but_text' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d54c8af3a2d7_68880790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d54c8af3a2d7_68880790')) {function content_61d54c8af3a2d7_68880790($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('cancel'));
?>
<a class="cm-dialog-closer cm-cancel tool-link btn <?php if ($_smarty_tpl->tpl_vars['disable_cancel']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("cancel");?>
</a>
<?php if ($_smarty_tpl->tpl_vars['is_js']->value==true) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_close_onclick']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items cm-dialog-closer btn-primary"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>'','but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_role'=>"submit",'but_meta'=>"cm-process-items btn-primary"), 0);?>

    <?php }?>
<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"submit",'but_text'=>$_smarty_tpl->tpl_vars['but_close_text']->value,'but_role'=>"button_main",'but_meta'=>"cm-process-items btn-primary"), 0);?>

<?php }?><?php }} ?>
