<?php /* Smarty version Smarty-3.1.21, created on 2022-01-27 12:55:42
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\views\products\components\picker\item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25351254761f24ffe07ee29-56609141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e170e7cc9a3800b81af9417bce3f10069979475' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\views\\products\\components\\picker\\item.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '25351254761f24ffe07ee29-56609141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61f24ffe080a25_77686404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61f24ffe080a25_77686404')) {function content_61f24ffe080a25_77686404($_smarty_tpl) {?>
    ${data.image && data.image.image_path
    ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>`
        : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <i class="glyph-image"></i></div>`
    }

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.product} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
