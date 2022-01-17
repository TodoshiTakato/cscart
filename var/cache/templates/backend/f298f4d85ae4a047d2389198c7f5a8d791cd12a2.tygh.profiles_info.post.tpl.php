<?php /* Smarty version Smarty-3.1.21, created on 2022-01-17 10:54:01
         compiled from "C:\OpenServer\domains\cscart\design\backend\templates\addons\geo_maps\hooks\order_management\profiles_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80468699161e520997391c1-44605309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f298f4d85ae4a047d2389198c7f5a8d791cd12a2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\cscart\\design\\backend\\templates\\addons\\geo_maps\\hooks\\order_management\\profiles_info.post.tpl',
      1 => 1616559142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '80468699161e520997391c1-44605309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'user_data' => 0,
    'show_move_map_mobile_hint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e52099747897_85978914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e52099747897_85978914')) {function content_61e52099747897_85978914($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map','store_locator.use_two_fingers_for_move_map'));
?>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']==="yandex") {?>
    <?php $_smarty_tpl->tpl_vars['show_move_map_mobile_hint'] = new Smarty_variable(true, null, 0);?>
<?php }?>
<div class="sidebar-row" id="om_ajax_location_map">
    <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
        <div class="geo-map__map-container">
            <div class="cm-geo-map-container cm-aom-map-container"
                data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-aom-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-aom-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-aom-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-geo-map-behaviors-enable-drag="true"
                data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                data-ca-geo-map-behaviors-enable-smart-drag="true"
                data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                data-ca-geo-map-behaviors-enable-multi-touch="true"
            ></div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
            <div class="mobile-visible muted"><?php echo $_smarty_tpl->__("store_locator.use_two_fingers_for_move_map");?>
</div>
        <?php }?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->__('no_data');?>

    <?php }?>
<!--om_ajax_location_map--></div>
<?php }} ?>
