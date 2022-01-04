<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:22
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\blog\hooks\pages\sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153705982561d40fee4e6c23-79910262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca045e7dfab03ed5cc2a8a48a814997d85f5149' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\pages\\sidebar.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '153705982561d40fee4e6c23-79910262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_managing_blog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40fee4eb7b5_00728379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40fee4eb7b5_00728379')) {function content_61d40fee4eb7b5_00728379($_smarty_tpl) {?><?php if (!is_callable('smarty_block_notes')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\block.notes.php';
?><?php if ($_smarty_tpl->tpl_vars['is_managing_blog']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('notes', array()); $_block_repeat=true; echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="sidebar-note-item">
        <?php echo $_smarty_tpl->__('blog_functionality_notes');?>

    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_notes(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
