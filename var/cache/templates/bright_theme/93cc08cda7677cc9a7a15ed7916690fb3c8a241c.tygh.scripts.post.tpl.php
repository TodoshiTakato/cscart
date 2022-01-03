<?php /* Smarty version Smarty-3.1.21, created on 2022-01-03 12:13:21
         compiled from "C:\OpenServer\domains\cscart\design\themes\responsive\templates\addons\searchanise\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93752419961d2be31af9726-23650014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93cc08cda7677cc9a7a15ed7916690fb3c8a241c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\themes\\responsive\\templates\\addons\\searchanise\\hooks\\index\\scripts.post.tpl',
      1 => 1641195654,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93752419961d2be31af9726-23650014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'searchanise_api_key' => 0,
    'searchanise_search_allowed' => 0,
    'se_servise_url' => 0,
    'auth' => 0,
    'addons' => 0,
    'company_id' => 0,
    'searchanise_prices' => 0,
    'settings' => 0,
    'category_data' => 0,
    'secondary_currency' => 0,
    'currencies' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61d2be31b421d0_31833714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d2be31b421d0_31833714')) {function content_61d2be31b421d0_31833714($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\modifier.enum.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\OpenServer\\domains\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OpenServer/domains/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['searchanise_api_key']->value&&$_smarty_tpl->tpl_vars['searchanise_search_allowed']->value==smarty_modifier_enum("YesNo::YES")) {?>
<?php if (defined("HTTPS")) {?>
    <?php $_smarty_tpl->tpl_vars["se_servise_url"] = new Smarty_variable(smarty_modifier_replace((defined('SE_SERVICE_URL') ? constant('SE_SERVICE_URL') : null),'http://','https://'), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["se_servise_url"] = new Smarty_variable((defined('SE_SERVICE_URL') ? constant('SE_SERVICE_URL') : null), null, 0);?>
<?php }?>

<style type="text/css">
div.snize-ac-results{
    margin-left:15px !important;
}
#search_input.snize-ac-loading{
    background-position:90% center !important;
}
</style>

<?php echo '<script'; ?>
 type="text/javascript">
    Searchanise = {};
    Searchanise.host = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['se_servise_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.api_key = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchanise_api_key']->value, ENT_QUOTES, 'UTF-8');?>
';

    Searchanise.AutoCmpParams = {};
    Searchanise.AutoCmpParams.restrictBy = {};
    Searchanise.AutoCmpParams.restrictBy.status = '<?php echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.empty_categories = '<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.usergroup_ids = '<?php echo htmlspecialchars(join("|",$_smarty_tpl->tpl_vars['auth']->value['usergroup_ids']), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.category_usergroup_ids = '<?php echo htmlspecialchars(join("|",$_smarty_tpl->tpl_vars['auth']->value['usergroup_ids']), ENT_QUOTES, 'UTF-8');?>
';
<?php if ($_smarty_tpl->tpl_vars['addons']->value['age_verification']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.age_limit = <?php if ($_SESSION['auth']['age']&&(defined('AREA') ? constant('AREA') : null)=="C") {?>'0,<?php echo htmlspecialchars($_SESSION['auth']['age'], ENT_QUOTES, 'UTF-8');?>
'<?php } else { ?>',0'<?php }?>;
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.approved = '<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
'; 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.product_type = '<?php echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_SIMPLE"), ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['master_products']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.master_product_status = '<?php echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.company_id = '<?php if ($_smarty_tpl->tpl_vars['company_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['searchanise_prices']->value) {?>
    Searchanise.AutoCmpParams.union = {};
    Searchanise.AutoCmpParams.union.price = {};
    Searchanise.AutoCmpParams.union.price.min = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchanise_prices']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']!==smarty_modifier_enum("YesNo::NO")&&$_smarty_tpl->tpl_vars['settings']->value['General']['show_out_of_stock_products']==smarty_modifier_enum("YesNo::NO")&&(defined('AREA') ? constant('AREA') : null)=="C") {?>
    Searchanise.AutoCmpParams.restrictBy.amount = '1,';
<?php }?>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    Searchanise.AutoCmpParams.restrictBy.active_company = '<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="products") {?>
    Searchanise.AutoCmpParams.restrictBy.company_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.category_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
    Searchanise.options = {};
    Searchanise.options.PriceFormat = {rate : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'], ENT_QUOTES, 'UTF-8');?>
, decimals: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'], ENT_QUOTES, 'UTF-8');?>
, decimals_separator: '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', thousands_separator: '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', symbol: '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', after: <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['after']==smarty_modifier_enum("YesNo::NO")) {?>false<?php } else { ?>true<?php }?>};
    Searchanise.AdditionalSearchInputs = '#additional_search_input';
    Searchanise.SearchInput = '#search_input,form[name="search_form"] input[name="hint_q"],form[name="search_form"] input[name="q"]';

    Tygh.$.ceEvent('on', 'ce.commoninit', function(context) {
        // Re-initialize Searchanise widget if its search input was updated after AJAX request
        if (typeof(Searchanise) !== 'undefined' && Searchanise.Loaded && typeof(Searchanise.SetOptions) === 'function' && Tygh.$(Searchanise.SearchInput, context).length) {
            Searchanise.SetOptions({ SearchInput: Tygh.$(Searchanise.SearchInput) });
            Searchanise.AutocompleteClose();
            Searchanise.Start();
        }
    });

    (function() {
        var __se = document.createElement('script');
        __se.src = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['se_servise_url']->value, ENT_QUOTES, 'UTF-8');?>
/widgets/v1.0/init.js';
        __se.setAttribute('async', 'true');
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(__se, s);
    })();
<?php echo '</script'; ?>
>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['se_use_custom_frontend_sync_call']) {?>
<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function() {
        Tygh.$.get('<?php echo fn_url('searchanise.async?no_session=Y&is_ajax=3','C','current');?>
');
    });
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/searchanise/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/searchanise/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['searchanise_api_key']->value&&$_smarty_tpl->tpl_vars['searchanise_search_allowed']->value==smarty_modifier_enum("YesNo::YES")) {?>
<?php if (defined("HTTPS")) {?>
    <?php $_smarty_tpl->tpl_vars["se_servise_url"] = new Smarty_variable(smarty_modifier_replace((defined('SE_SERVICE_URL') ? constant('SE_SERVICE_URL') : null),'http://','https://'), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["se_servise_url"] = new Smarty_variable((defined('SE_SERVICE_URL') ? constant('SE_SERVICE_URL') : null), null, 0);?>
<?php }?>

<style type="text/css">
div.snize-ac-results{
    margin-left:15px !important;
}
#search_input.snize-ac-loading{
    background-position:90% center !important;
}
</style>

<?php echo '<script'; ?>
 type="text/javascript">
    Searchanise = {};
    Searchanise.host = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['se_servise_url']->value, ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.api_key = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchanise_api_key']->value, ENT_QUOTES, 'UTF-8');?>
';

    Searchanise.AutoCmpParams = {};
    Searchanise.AutoCmpParams.restrictBy = {};
    Searchanise.AutoCmpParams.restrictBy.status = '<?php echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.empty_categories = '<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.usergroup_ids = '<?php echo htmlspecialchars(join("|",$_smarty_tpl->tpl_vars['auth']->value['usergroup_ids']), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.category_usergroup_ids = '<?php echo htmlspecialchars(join("|",$_smarty_tpl->tpl_vars['auth']->value['usergroup_ids']), ENT_QUOTES, 'UTF-8');?>
';
<?php if ($_smarty_tpl->tpl_vars['addons']->value['age_verification']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.age_limit = <?php if ($_SESSION['auth']['age']&&(defined('AREA') ? constant('AREA') : null)=="C") {?>'0,<?php echo htmlspecialchars($_SESSION['auth']['age'], ENT_QUOTES, 'UTF-8');?>
'<?php } else { ?>',0'<?php }?>;
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_data_premoderation']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.approved = '<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
'; 
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.product_type = '<?php echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_SIMPLE"), ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['master_products']['status']==smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
    Searchanise.AutoCmpParams.restrictBy.master_product_status = '<?php echo htmlspecialchars(smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.company_id = '<?php if ($_smarty_tpl->tpl_vars['company_id']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['searchanise_prices']->value) {?>
    Searchanise.AutoCmpParams.union = {};
    Searchanise.AutoCmpParams.union.price = {};
    Searchanise.AutoCmpParams.union.price.min = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchanise_prices']->value, ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking']!==smarty_modifier_enum("YesNo::NO")&&$_smarty_tpl->tpl_vars['settings']->value['General']['show_out_of_stock_products']==smarty_modifier_enum("YesNo::NO")&&(defined('AREA') ? constant('AREA') : null)=="C") {?>
    Searchanise.AutoCmpParams.restrictBy.amount = '1,';
<?php }?>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
    Searchanise.AutoCmpParams.restrictBy.active_company = '<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="products") {?>
    Searchanise.AutoCmpParams.restrictBy.company_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
';
    Searchanise.AutoCmpParams.restrictBy.category_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
    Searchanise.options = {};
    Searchanise.options.PriceFormat = {rate : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'], ENT_QUOTES, 'UTF-8');?>
, decimals: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'], ENT_QUOTES, 'UTF-8');?>
, decimals_separator: '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', thousands_separator: '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', symbol: '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', after: <?php if ($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['after']==smarty_modifier_enum("YesNo::NO")) {?>false<?php } else { ?>true<?php }?>};
    Searchanise.AdditionalSearchInputs = '#additional_search_input';
    Searchanise.SearchInput = '#search_input,form[name="search_form"] input[name="hint_q"],form[name="search_form"] input[name="q"]';

    Tygh.$.ceEvent('on', 'ce.commoninit', function(context) {
        // Re-initialize Searchanise widget if its search input was updated after AJAX request
        if (typeof(Searchanise) !== 'undefined' && Searchanise.Loaded && typeof(Searchanise.SetOptions) === 'function' && Tygh.$(Searchanise.SearchInput, context).length) {
            Searchanise.SetOptions({ SearchInput: Tygh.$(Searchanise.SearchInput) });
            Searchanise.AutocompleteClose();
            Searchanise.Start();
        }
    });

    (function() {
        var __se = document.createElement('script');
        __se.src = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['se_servise_url']->value, ENT_QUOTES, 'UTF-8');?>
/widgets/v1.0/init.js';
        __se.setAttribute('async', 'true');
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(__se, s);
    })();
<?php echo '</script'; ?>
>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['se_use_custom_frontend_sync_call']) {?>
<?php echo '<script'; ?>
 type="text/javascript">
    Tygh.$(document).ready(function() {
        Tygh.$.get('<?php echo fn_url('searchanise.async?no_session=Y&is_ajax=3','C','current');?>
');
    });
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
