<?php /* Smarty version Smarty-3.1.21, created on 2022-01-19 09:17:13
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\advanced_import\views\import_presets\components\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86293538161e7ace979f641-30150724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a840367f7610cbf280b9a9338a744e4d6e522a14' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\advanced_import\\views\\import_presets\\components\\form.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '86293538161e7ace979f641-30150724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wrapper_extra_id' => 0,
    'object_type' => 0,
    'wrapper_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e7ace97a49a6_11357607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e7ace97a49a6_11357607')) {function content_61e7ace97a49a6_11357607($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="manage_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset cm-ajax cm-comet"
        data-ca-advanced-import-element="management_form"
        id="manage_import_presets_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }} ?>
