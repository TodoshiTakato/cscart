<?php /* Smarty version Smarty-3.1.21, created on 2022-01-18 09:30:36
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\vendor_rating\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189991212161e65e8c4d4678-32447169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d98726e0718743f0377a2fdf0ea9ad47c1c7bc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\vendor_rating\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189991212161e65e8c4d4678-32447169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'rating_criterion' => 0,
    'company_data' => 0,
    'settings' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e65e8c4e82b1_44183529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e65e8c4e82b1_44183529')) {function content_61e65e8c4e82b1_44183529($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_rating.manual_vendor_rating','vendor_rating.absolute_vendor_rating','vendor_rating.calculated_at','vendor_rating.recalculate_now'));
?>
<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <div id="content_rating" class="hidden">
        <div class="control-group">
            <label for="elm_manual_rating" class="control-label">
                <?php echo $_smarty_tpl->__("vendor_rating.manual_vendor_rating");?>
:
            </label>
            <div class="controls">
                <input type="text"
                       class="cm-numeric"
                       data-m-dec="0"
                       <?php if (isset($_smarty_tpl->tpl_vars['rating_criterion']->value['range']['min'])) {?>
                           data-v-min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating_criterion']->value['range']['min'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       <?php if (isset($_smarty_tpl->tpl_vars['rating_criterion']->value['range']['max'])) {?>
                           data-v-max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating_criterion']->value['range']['max'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       id="elm_manual_rating"
                       name="company_data[manual_vendor_rating]"
                       value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['company_data']->value['manual_vendor_rating'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                />
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['company_data']->value['company_id']) {?>
            <div class="control-group" id="vendor_rating">
                <label for="elm_rating" class="control-label">
                    <?php echo $_smarty_tpl->__("vendor_rating.absolute_vendor_rating");?>
:
                </label>
                <div class="controls">
                    <p>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['relative_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
%)
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['company_data']->value['absolute_vendor_rating_updated_timestamp']) {?>
                        <p>
                            <?php echo $_smarty_tpl->__("vendor_rating.calculated_at",array("[date]"=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['company_data']->value['absolute_vendor_rating_updated_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format']))));?>

                        </p>
                    <?php }?>
                    <p>
                        <a class="cm-ajax cm-post"
                           data-ca-target-id="vendor_rating"
                           href="<?php ob_start();
echo htmlspecialchars(rawurlencode(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url'])), ENT_QUOTES, 'UTF-8');
$_tmp5=ob_get_clean();?><?php echo htmlspecialchars(fn_url("vendor_rating.recalculate?company_id=".((string)$_smarty_tpl->tpl_vars['company_data']->value['company_id'])."?redirect_url=".$_tmp5), ENT_QUOTES, 'UTF-8');?>
"
                        ><?php echo $_smarty_tpl->__("vendor_rating.recalculate_now");?>
</a>
                    </p>
                </div>
            <!--vendor_rating--></div>
        <?php }?>
    <!--content_rating--></div>
<?php }?>
<?php }} ?>
