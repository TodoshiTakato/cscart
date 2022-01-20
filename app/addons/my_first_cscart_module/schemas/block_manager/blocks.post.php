<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

//use Tygh\Registry;
//use Tygh\Enum\ObjectStatuses;
//use Tygh\Enum\YesNo;

defined('BOOTSTRAP') or die('Access denied');

//require_once Registry::get('config.dir.addons') . 'blog/schemas/block_manager/blocks.functions.php';

/**
 * @var array<string, array> $schema
 */
$schema["my_first_cscart_module_setting"] = array(
//    'content' => array (
//        'items' => array (
//            'remove_indent' => true,
//            'hide_label' => true,
//            'type' => 'enum',
//            'object' => 'banners',
//            //'object' => 'pages',
//            'items_function' => 'fn_get_banners',
//            //'items_function' => 'fn_get_pages',
//            'fillings' => array (
//                'manually' => array (
//                    'picker' => 'addons/banners/pickers/banners/picker.tpl',
//                    'picker_params' => array (
//                        'type' => 'links',
//                        'positions' => true,
//                    ),
//                    'params' => array (
//                        'sort_by' => 'position',
//                        'sort_order' => 'asc'
//                    )
//                ),
//                'newest' => array (
//                    'params' => array (
//                        'sort_by' => 'timestamp',
//                        'sort_order' => 'desc',
//                        'ignore_settings' => array('cid')
//                    )
//                ),
//            ),
//        ),
//    ),
    'templates' => array (
        'addons/my_first_cscart_module/blocks/my_first_cscart_module_setting.tpl' => array(),
//        'addons/banners/blocks/carousel.tpl' => array(
//            'settings' => array (
//                'navigation' => array (
//                    'type' => 'selectbox',
//                    'values' => array (
//                        'N' => 'none',
//                        'D' => 'dots',
//                        'P' => 'pages',
//                        'A' => 'arrows'
//                    ),
//                    'default_value' => 'D'
//                ),
//                'delay' => array (
//                    'type' => 'input',
//                    'default_value' => '3'
//                ),
//            ),
//        )
    ),
    'wrappers' => 'blocks/wrappers',
//    'cache' => array(
//        'update_handlers' => array(
//            'banners', 'banner_descriptions', 'banner_images'
//        )
//    ),
//    'brief_info_function' => 'fn_block_get_block_with_items_info'
);

return $schema;
