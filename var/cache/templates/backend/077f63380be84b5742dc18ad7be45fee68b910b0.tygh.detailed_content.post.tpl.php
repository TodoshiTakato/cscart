<?php /* Smarty version Smarty-3.1.21, created on 2022-01-04 12:14:29
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\discussion\hooks\pages\detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131440072361d40ff53c97c5-62776247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '077f63380be84b5742dc18ad7be45fee68b910b0' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\pages\\detailed_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '131440072361d40ff53c97c5-62776247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'runtime' => 0,
    'page_data' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d40ff53d1519_27278367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d40ff53d1519_27278367')) {function content_61d40ff53d1519_27278367($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('comments_and_reviews','discussion_title_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("comments_and_reviews"),'target'=>"#discussion_page_setting"), 0);?>

        <div id="discussion_page_setting" class="in collapse">
   		    <fieldset>
                <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::PAGE"),'title'=>$_smarty_tpl->__("discussion_title_page"),'non_editable'=>true,'discussion_default_type'=>$_smarty_tpl->tpl_vars['addons']->value['discussion']['page_discussion_type']), 0);?>

   		    </fieldset>
        </div>
    <?php }?>
<?php }?><?php }} ?>
