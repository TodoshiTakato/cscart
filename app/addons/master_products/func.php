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

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Addons\MasterProducts\ServiceProvider;
use Tygh\Addons\ProductVariations\Product\Group\GroupFeatureCollection;
use Tygh\Addons\ProductVariations\ServiceProvider as VariationsServiceProvider;
use Tygh\BlockManager\Block;
use Tygh\BlockManager\ProductTabs;
use Tygh\Common\OperationResult;
use Tygh\Enum\ObjectStatuses;
use Tygh\Enum\VendorStatuses;
use Tygh\Enum\YesNo;
use Tygh\Registry;
use Tygh\Settings;
use Tygh\Storefront\Storefront;

// phpcs:disable SlevomatCodingStandard.ControlStructures.EarlyExit.EarlyExitNotUsed

/**
 * Installs the add-on products block and the product tab.
 */
function fn_master_products_install()
{
    $company_ids = [0];

    /** @var \Tygh\BlockManager\Block $block */
    $block = Block::instance();
    /** @var ProductTabs $product_tabs */
    $product_tabs = ProductTabs::instance();

    foreach ($company_ids as $company_id) {
        $block_data = [
            'type'         => 'products',
            'properties'   => [
                'template' => 'addons/master_products/blocks/products/vendor_products.tpl',
            ],
            'content_data' => [
                'content' => [
                    'items' => [
                        'filling' => 'master_products.vendor_products_filling',
                        'limit'   => '0',
                    ],
                ],
            ],
            'company_id'   => $company_id,
        ];

        $block_description = [
            'lang_code' => DEFAULT_LANGUAGE,
            'name'      => __('master_products.vendor_products_block_name', [], DEFAULT_LANGUAGE),
        ];

        $block_id = $block->update($block_data, $block_description);

        $tab_data = [
            'tab_type'      => 'B',
            'block_id'      => $block_id,
            'template'      => '',
            'addon'         => 'master_products',
            'status'        => 'A',
            'is_primary'    => 'N',
            'position'      => 0,
            'product_ids'   => null,
            'company_id'    => $company_id,
            'show_in_popup' => 'N',
            'lang_code'     => DEFAULT_LANGUAGE,
            'name'          => __('master_products.vendor_products_tab_name', [], DEFAULT_LANGUAGE),
        ];

        $product_tabs->update($tab_data);
    }
}

/**
 * Hook handler: adds extra products search parameters.
 *
 * @param array  $params         Products search params
 * @param int    $items_per_page Amount of products shown per page
 * @param string $lang_code      Two-letter language code for product descriptions
 */
function fn_master_products_get_products_pre(&$params, $items_per_page, $lang_code)
{
    $params = array_merge([
        'show_master_products_only'  => false,
        'area'                       => AREA,
    ], $params);

    $params['runtime_company_id'] = (int) Registry::ifGet('runtime.vendor_id', Registry::get('runtime.company_id'));

    // Vendors must see only active master products
    if ($params['show_master_products_only'] && $params['runtime_company_id']) {
        $params['status'] = ObjectStatuses::ACTIVE;
    }

    // FIXME: Product offers must be displayed only in the blocks with the specific filling
    if (
        isset($params['block_data']['content']['items']['filling'])
        && $params['block_data']['content']['items']['filling'] !== 'master_products.vendor_products_filling'
    ) {
        $params['runtime_company_id'] = 0;
    }
}

/**
 * Hook handler: modifies products obtaining process to include vendor products into the list.
 */
function fn_master_products_get_products(
    &$params,
    &$fields,
    $sortings,
    &$condition,
    &$join,
    $sorting,
    &$group_by,
    $lang_code,
    $having
) {
    $condition_replacements = [];

    if ($params['area'] === 'C') {
        $condition .= db_quote(' AND products.master_product_status IN (?a)', ['A']);

        if (isset($params['company_status']) && !empty($params['company_status'])) {
            $search = db_quote('AND companies.status IN (?a)', $params['company_status']);
            $replace = db_quote('AND (companies.status IN (?a) OR products.company_id = ?i)', $params['company_status'], 0);
        } else {
            $search = db_quote('AND companies.status = ?s', ObjectStatuses::ACTIVE);
            $replace = db_quote('AND (companies.status = ?s OR products.company_id = ?i)', ObjectStatuses::ACTIVE, 0);
        }

        $condition_replacements[$search] = $replace;

        if (!empty($params['vendor_products_by_product_id'])) {
            $repository = ServiceProvider::getProductRepository();

            $master_product_id = $repository->findMasterProductId($params['vendor_products_by_product_id']);

            if (!$master_product_id) {
                $master_product_id = (int) $params['vendor_products_by_product_id'];
            }

            $condition .= db_quote(' AND products.master_product_id = ?i', $master_product_id);
        } elseif (empty($params['runtime_company_id']) && empty($params['pid']) && empty($params['only_for_counting'])) {
            /** @var \Tygh\Storefront\Storefront $storefront */
            $storefront = $params['storefront'] instanceof Storefront
                ? $params['storefront']
                : Tygh::$app['storefront'];

            $join .= db_quote(
                ' LEFT JOIN ?:master_products_storefront_offers_count AS master_products_storefront_offers_count '
                . ' ON master_products_storefront_offers_count.product_id = products.product_id'
                .   ' AND master_products_storefront_offers_count.storefront_id = ?i',
                $storefront->storefront_id
            );

            $condition .= db_quote(
                ' AND products.master_product_id = 0'
                . ' AND (products.company_id > 0 OR master_products_storefront_offers_count.count > 0)'
            );

            if ($storefront->getCompanyIds()) {
                $search = db_quote('companies.company_id IN (?n)', $storefront->getCompanyIds());
                $replace = db_quote('(companies.company_id IN (?n) OR products.company_id = ?i)', $storefront->getCompanyIds(), 0);
                $condition_replacements[$search] = $replace;
            }
        }
    }

    if ($params['show_master_products_only']) {
        if ($params['runtime_company_id']) {
            $search = db_quote(' AND products.company_id = ?i', $params['runtime_company_id']);
            $replace = db_quote(' AND products.company_id = ?i', 0);
            $condition_replacements[$search] = $replace;
        } else {
            $condition .= db_quote(' AND products.company_id = ?i', 0);
        }
    } elseif ($params['area'] === 'A'
        && empty($params['pid'])
        && empty($params['show_all_products'])
        && empty($params['has_not_variation_group'])
        && !isset($params['master_product_id'])
        && (!isset($params['parent_product_id']) || empty($params['parent_product_id']))
        && !isset($params['variation_group_id'])
        && empty($params['cid'])
        && empty($params['is_picker'])
    ) {
        $condition .= db_quote(' AND products.company_id <> ?i ', 0);
    }

    if (!empty($params['remove_company_condition'])) {
        $search = db_quote(' AND products.company_id = ?i', $params['runtime_company_id']);
        $condition_replacements[$search] = '';
    }

    if (!empty($params['master_product_id'])) {
        if (is_array($params['master_product_id'])) {
            $condition .= db_quote(' AND products.master_product_id IN (?n)', $params['master_product_id']);
        } else {
            $condition .= db_quote(' AND products.master_product_id = ?i', $params['master_product_id']);
        }
    }

    // FIXME: Dirty hack
    if ($condition_replacements) {
        $condition = strtr($condition, $condition_replacements);
    }

    $fields['master_product_offers_count'] = 'products.master_product_offers_count';
    $fields['master_product_id'] = 'products.master_product_id';
    $fields['company_id'] = 'products.company_id';

    return;
}

function fn_master_products_gather_additional_products_data_params($product_ids, &$params, &$products, $auth)
{
    if (!isset($params['get_vendor_products'])) {
        $params['get_vendor_products'] = false;
    }

    if (!isset($params['get_vendor_product_ids'])) {
        $params['get_vendor_product_ids'] = false;
    }

    if (!isset($params['runtime_company_id'])) {
        $params['runtime_company_id'] = (int) Registry::ifGet('runtime.vendor_id', Registry::get('runtime.company_id'));
    }

    if ($params['get_vendor_products'] && !empty($params['runtime_company_id'])) {
        list($vendor_products) = fn_get_products([
            'master_product_id' => $product_ids,
            'company_id'        => $params['runtime_company_id']
        ]);

        $product_id_map = array_column($vendor_products, 'product_id', 'master_product_id');

        foreach ($products as &$product) {
            $product_id = $product['product_id'];
            $vendor_product_id = isset($product_id_map[$product_id]) ? (int) $product_id_map[$product_id] : null;

            $product['vendor_product'] = isset($vendor_products[$vendor_product_id]) ? $vendor_products[$vendor_product_id] : null;
            $product['vendor_product_id'] = $vendor_product_id;
        }
        unset($product);
    }

    if ($params['get_vendor_product_ids'] && !empty($params['runtime_company_id'])) {
        $repository = ServiceProvider::getProductRepository();

        $product_id_map = $repository->findVendorProductIdsByMasterProductIds($product_ids, $params['runtime_company_id']);

        foreach ($products as &$product) {
            $product_id = $product['product_id'];
            $product['vendor_product_id'] = isset($product_id_map[$product_id]) ? (int) $product_id_map[$product_id] : null;
        }
        unset($product);
    }
}

function fn_master_products_gather_additional_products_data_post($product_ids, $params, $products, $auth, $lang_code)
{
    if (AREA !== 'C') {
        return;
    }

    $vendor_id = fn_master_products_get_runtime_company_id();

    if (empty($vendor_id)) {
        return;
    }

    $repository = VariationsServiceProvider::getProductRepository();
    $product_id_map = VariationsServiceProvider::getProductIdMap();

    $runtime_vendor_id = Registry::ifGet('runtime.vendor_id', null);
    foreach ($products as &$product) {
        if (empty($product['company_id'])
            || empty($product['master_product_id'])
            || empty($product['detailed_params']['info_type'])
            || $product['detailed_params']['info_type'] !== 'D'
        ) {
            continue;
        }

        $master_product_id = $product['master_product_id'];

        if (!$product_id_map->isChildProduct($master_product_id) && !$product_id_map->isParentProduct($master_product_id)) {
            continue;
        }

        $master_product = $repository->findProduct($master_product_id);

        if (!$master_product) {
            continue;
        }

        $master_product = $repository->loadProductGroupInfo($master_product);

        // swap runtime vendor ID to load master product data even when viewing a vendor product page
        Registry::set('runtime.vendor_id', (int) $master_product['company_id']);
        $master_product = $repository->loadProductFeaturesVariants($master_product);

        if (empty($master_product['variation_features_variants'])) {
            continue;
        }

        $product['variation_features_variants'] = $master_product['variation_features_variants'];
        $master_product_ids = [];

        foreach ($product['variation_features_variants'] as $features) {
            if (empty($features['variants'])) {
                continue;
            }

            foreach ($features['variants'] as $variant) {
                if (empty($variant['product'])) {
                    continue;
                }

                $master_product_ids[$variant['product']['product_id']] = $variant['product']['product_id'];
            }
        }

        if (!$master_product_ids) {
            continue;
        }

        $vendor_products_map = ServiceProvider::getProductRepository()->findVendorProductIdsByMasterProductIds($master_product_ids, $vendor_id, ['A']);

        if (empty($vendor_products_map)) {
            continue;
        }

        foreach ($product['variation_features_variants'] as &$features) {
            if (empty($features['variants'])) {
                continue;
            }

            foreach ($features['variants'] as &$variant) {
                if (empty($variant['product'])) {
                    continue;
                }

                $variant_product_id = $variant['product']['product_id'];

                if (empty($vendor_products_map[$variant_product_id])) {
                    continue;
                }

                $variant['product']['product_id'] = $vendor_products_map[$variant_product_id];
            }
            unset($variant);
        }
        unset($features);
    }
    unset($product);

    Registry::set('runtime.vendor_id', $runtime_vendor_id);
}

/**
 * Hook handler: adds master product ID into a list of fetched product fields.
 */
function fn_master_products_get_product_data($product_id, &$field_list, &$join, $auth, $lang_code, $condition)
{
    $field_list .= ', ?:products.master_product_id, ?:products.master_product_status';
}

/**
 * Fetches company ID from any passed object or runtime.
 * FIXME: Obtaining company_id from the $_REQUEST is ugly. Must be redone.
 *
 * @param array|null $object Object to extract company_id from
 * @param string     $area   Site area
 *
 * @return int Company ID
 */
function fn_master_products_get_runtime_company_id($object = null, $area = AREA)
{
    if ($object === null && $area === 'C') {
        // FIXME
        $object = $_REQUEST;
    }

    static $runtime_company_id;

    if (isset($object['vendor_id'])) {
        return (int) $object['vendor_id'];
    }

    if ($runtime_company_id === null) {
        $runtime_company_id = (int) Registry::ifGet('runtime.vendor_id', Registry::get('runtime.company_id'));
    }

    return $runtime_company_id;
}

/**
 * Helper function that generates sidebar menu with master and vendor products on the products management pages.
 *
 * @param string $controller     Currently dispatched controller
 * @param string $mode           Currently dispatched controller mode
 * @param array  $request_params Additional params from request
 */
function fn_master_products_generate_navigation_sections($controller, $mode, $request_params = [])
{
    $active_section = '';

    if (empty($request_params['cid'])) {
        $active_section = $controller . '.' . $mode;
    }

    $dynamic_sections = Registry::ifGet('navigation.dynamic.sections', []);

    $dynamic_sections['products.manage'] = [
        'title' => __('master_products.products_being_sold'),
        'href'  => 'products.manage',
    ];
    $dynamic_sections['products.master_products'] = [
        'title' => __('master_products.products_that_vendors_can_sell'),
        'href'  => 'products.master_products',
    ];

    Registry::set('navigation.dynamic.sections', $dynamic_sections);
    if (!Registry::get('navigation.dynamic.active_section')) {
        Registry::set('navigation.dynamic.active_section', $active_section);
    }
}

/**
 * Hook handler: allows viewing master products.
 */
function fn_master_products_company_products_check(&$product_ids, $notify, &$company_condition)
{
    $controller = Registry::ifGet('runtime.controller', 'products');
    $mode = Registry::ifGet('runtime.mode', 'update');
    $request_method = isset($_SERVER['REQUEST_METHOD']) // FIXME
        ? $_SERVER['REQUEST_METHOD']
        : 'GET';

    if ($controller !== 'products' || $request_method !== 'GET' || !in_array($mode, ['update', 'update_file', 'update_folder'])) {
        return;
    }

    $company_condition = fn_get_company_condition(
        '?:products.company_id',
        true,
        Registry::get('runtime.company_id'),
        true
    );
}

/**
 * Hook handler: allows viewing master products.
 */
function fn_master_products_is_product_company_condition_required_post($product_id, &$is_required)
{
    $product_company_id = (int) db_get_field('SELECT company_id FROM ?:products WHERE product_id = ?i', $product_id);

    if ($product_company_id === 0) {
        $is_required = false;
    }
}

/**
 * Hook handler: updates vendor products descriptions when editing a master product.
 */
function fn_master_products_update_product_post($product_data, $product_id, $lang_code, $create)
{
    if ($create) {
        return;
    }

    $product_id_map = ServiceProvider::getProductIdMap();

    if (!$product_id_map->isMasterProduct($product_id) && !$product_id_map->isVendorProduct($product_id)) {
        return;
    }

    $service = ServiceProvider::getService();

    $service->onTableChanged('products', $product_id);
    $service->onTableChanged('product_descriptions', $product_id);
    $service->onTableChanged('product_status', $product_id);
    $service->onTableChanged('product_popularity', $product_id);

    $service->actualizeMasterProductPrice($product_id);
    $service->actualizeMasterProductOffersCount($product_id);
    $service->actualizeMasterProductQuantity($product_id);
}

/**
 * Hook handler: prevents vendor product categories update.
 */
function fn_master_products_update_product_categories_pre($product_id, &$product_data, $rebuild, $company_id)
{
    if (empty($product_data['category_ids'])) {
        return;
    }

    $repository = ServiceProvider::getProductRepository();

    if ($repository->findMasterProductId($product_id)) {
        $product_data['category_ids'] = [];
    }
}

/**
 * Hook handler: updates vendor products categories when editing a master product.
 */
function fn_master_products_update_product_categories_post(
    $product_id,
    $product_data,
    $existing_categories,
    $rebuild,
    $company_id
) {
    $service = ServiceProvider::getService();
    $service->onTableChanged('products_categories', $product_id);
}

/**
 * Hook handler: actualizers master product price on vendor product removal.
 */
function fn_master_products_delete_product_pre($product_id, $status)
{
    Registry::del('master_products.removed_product');

    if (!$status) {
        return;
    }

    $repository = ServiceProvider::getProductRepository();

    $master_product_id = $repository->findMasterProductId($product_id);

    if ($master_product_id) {
        Registry::set('master_products.removed_product.master_product_id', $master_product_id, true);
    }
}

/**
 * Hook handler: removes vendor products after master product removal.
 */
function fn_master_products_delete_product_post($product_id, $is_deleted)
{
    if (!$is_deleted) {
        return;
    }

    $repository = ServiceProvider::getProductRepository();
    $service = ServiceProvider::getService();
    $indexer = ServiceProvider::getIndexer();

    $vendor_product_ids = $repository->findVendorProductIds($product_id);

    foreach ($vendor_product_ids as $vendor_product_id) {
        fn_delete_product($vendor_product_id);
    }

    $master_product_id = Registry::get('master_products.removed_product.master_product_id');

    if ($master_product_id) {
        $service->actualizeMasterProductPrice($master_product_id);
        $service->actualizeMasterProductOffersCount($master_product_id);
        $service->actualizeMasterProductQuantity($master_product_id);
    } else {
        $indexer->clearStorefrontOffersCountIndexByProductId($product_id);
    }
    Registry::del('master_products.removed_product');
}


/**
 * Hook handler: actualizes master product price when the disabling/enabling vendor products.
 */
function fn_master_products_tools_change_status($params, $result)
{
    if (!$result || $params['table'] !== 'products') {
        return;
    }

    $product_id = $params['id'];

    $product_id_map = ServiceProvider::getProductIdMap();

    if (!$product_id_map->isMasterProduct($product_id) && !$product_id_map->isVendorProduct($product_id)) {
        return;
    }

    $service = ServiceProvider::getService();

    $service->onTableChanged('product_status', $product_id);
    $service->actualizeMasterProductPrice($product_id);
    $service->actualizeMasterProductOffersCount($product_id);
    $service->actualizeMasterProductQuantity($product_id);
}

function fn_master_products_product_type_create_by_product($product, $product_id, &$type)
{
    if (!empty($product['master_product_id'])) {
        $type = PRODUCT_TYPE_VENDOR_PRODUCT_OFFER;
    }
    if (!empty($product['master_product_id']) && !empty($product['parent_product_id'])) {
        $type = PRODUCT_TYPE_PRODUCT_OFFER_VARIATION;
    }
}

/**
 * Hook handler: normalize request for children products
 */
function fn_master_products_get_route(&$req, &$result, $area, &$is_allowed_url)
{
    if ($area !== 'C'
        || empty($req['dispatch'])
        || $req['dispatch'] !== 'products.view'
        || empty($req['product_id'])
        || empty($req['vendor_id'])
    ) {
        return;
    }

    $repository = ServiceProvider::getProductRepository();

    if (isset($req['variation_id'])) {
        $vendor_product_id = $repository->findVendorProductId($req['variation_id'], $req['vendor_id']);

        if (!$vendor_product_id) {
            return;
        }

        $product_id_map = VariationsServiceProvider::getProductIdMap();

        $parent_product_id = $product_id_map->getParentProductId($vendor_product_id);

        if ($parent_product_id) {
            $req['variation_id'] = $vendor_product_id;
            $req['product_id'] = $parent_product_id;
        } else {
            $req['product_id'] = $vendor_product_id;
            unset($req['variation_id']);
        }
    } else {
        $vendor_product_id = $repository->findVendorProductId($req['product_id'], $req['vendor_id']);

        if (!$vendor_product_id) {
            return;
        }

        $req['product_id'] = $vendor_product_id;
    }
}

/**
 * Hook handler: sync global options
 */
function fn_master_products_add_global_option_link_post($product_id, $option_id)
{
    $sync_service = ServiceProvider::getService();
    $sync_service->onTableChanged('product_global_option_links', $product_id, ['option_id' => $option_id]);
}

/**
 * Hook handler: sync global options
 */
function fn_master_products_delete_global_option_link_post($product_id, $option_id)
{
    $sync_service = ServiceProvider::getService();
    $sync_service->onTableChanged('product_global_option_links', $product_id, ['option_id' => $option_id]);
}

/**
 * Hook handler: sync feature values
 */
function fn_master_products_update_product_features_value_post($product_id)
{
    $sync_service = ServiceProvider::getService();
    $sync_service->onTableChanged('product_features_values', $product_id);
}

function fn_master_products_clone_product_data($product_id, &$data, $is_cloning_allowed)
{
    if (empty($data)) {
        return;
    }

    unset(
        $data['master_product_id'],
        $data['master_product_status'],
        $data['master_product_offers_count']
    );
}

function fn_master_products_variation_group_create_products_by_combinations_item($service, $parent_product_id, $combination_id, $combination, &$product_data)
{
    if (empty($product_data)) {
        return;
    }

    unset(
        $product_data['master_product_id'],
        $product_data['master_product_status'],
        $product_data['master_product_offers_count']
    );
}

/**
 * @param \Tygh\Addons\ProductVariations\SyncService $sync_service
 * @param array $events
 */
function fn_master_products_variation_sync_flush_sync_events($sync_service, $events)
{
    $product_ids = [];
    $table_product_ids = [];

    foreach ($events as $event) {
        if (empty($event['destination_product_ids'])
            || empty($event['table_id'])
        ) {
            continue;
        }

        foreach ($event['destination_product_ids'] as $product_id) {
            $product_ids[$product_id] = $product_id;
            $table_product_ids[$product_id][$event['table_id']] = $event['table_id'];
        }
    }

    if (empty($product_ids)) {
        return;
    }

    $product_repository = ServiceProvider::getProductRepository();
    $service = ServiceProvider::getService();

    $vendor_product_ids_map = $product_repository->findVendorProductIdsByMasterProductIds($product_ids);

    foreach ($vendor_product_ids_map as $master_product_id => $vendor_product_ids) {
        foreach ($table_product_ids[$master_product_id] as $table_id) {
            $service->syncData($table_id, $master_product_id, (array) $vendor_product_ids);
        }
    }
}

function fn_master_products_get_attachments_pre($object_type, &$object_id, $type, $lang_code)
{
    if ($object_type !== 'product' || !empty($params['skip_check_vendor_product'])) {
        return;
    }

    $product_repository = ServiceProvider::getProductRepository();

    $master_product_id = $product_repository->findMasterProductId($object_id);

    if ($master_product_id) {
        $object_id = $master_product_id;
    }
}

function fn_master_products_get_discussion_pre(&$object_id, $object_type, $get_posts, $params)
{
    if ($object_type !== DISCUSSION_OBJECT_TYPE_PRODUCT || !empty($params['skip_check_vendor_product'])) {
        return;
    }

    $product_repository = ServiceProvider::getProductRepository();

    $master_product_id = $product_repository->findMasterProductId($object_id);

    if ($master_product_id) {
        $object_id = $master_product_id;
    }
}

function fn_master_products_get_product_data_post(&$product_data, $auth, $preview, $lang_code)
{
    ServiceProvider::getProductIdMap()->setMastertProductIdMapByProducts([$product_data]);
}

function fn_master_products_load_products_extra_data_pre(&$products, $params, $lang_code)
{
    if (!empty($params['vendor_products_by_product_id'])) {
        $master_product_id = $params['vendor_products_by_product_id'];
        $product_options = $combination = null;

        if (isset($params['master_product_combination'])) {
            $combination = (string) $params['master_product_combination'];
        } elseif (isset($params['master_product_data']['product_options'])) {
            $product_options = (array) $params['master_product_data']['product_options'];
        } elseif (isset($params['master_product_data'][$master_product_id]['product_options'])) {
            $product_options = (array) $params['master_product_data'][$master_product_id]['product_options'];
        }

        if ($combination || $product_options) {
            foreach ($products as $product_id => &$product) {
                if ($combination) {
                    $product['combination'] = $combination;
                } else {
                    $product['selected_options'] = $product_options;
                }
            }
            unset($product);
        }
    }

    ServiceProvider::getProductIdMap()->setMastertProductIdMapByProducts($products);
}

function fn_master_products_url_pre(&$url, $area, $protocol, $lang_code)
{
    if ($area !== 'C'
        || strpos($url, 'products.view') === false
        || Registry::get('addons.seo.status') !== 'A'
    ) {
        return;
    }

    $parsed_url = parse_url($url);
    $dispatch = null;

    if (empty($parsed_url['query'])) {
        return;
    }

    parse_str($parsed_url['query'], $parsed_query);

    if (isset($parsed_query['dispatch'])) {
        $dispatch = $parsed_query['dispatch'];
    } elseif (isset($parsed_url['path'])) {
        $dispatch = $parsed_url['path'];
    }

    if (empty($parsed_query['product_id']) || $dispatch !== 'products.view') {
        return;
    }

    $product_id = $parsed_query['product_id'];
    $master_product_id = ServiceProvider::getProductIdMap()->getMasterProductId($product_id);

    if (!$master_product_id) {
        return;
    }

    $company_id = ServiceProvider::getProductIdMap()->getVendorProductCompanyId($product_id);

    if (Registry::get('runtime.seo.is_creating_canonical_url')) {
        $url = strtr($url, ["product_id={$product_id}" => "product_id={$master_product_id}"]);
    } else {
        $url = strtr($url, ["product_id={$product_id}" => "product_id={$master_product_id}&vendor_id={$company_id}"]);
    }
}

function fn_master_products_update_image_pairs($pair_ids, $icons, $detailed, $pairs_data, $object_id, $object_type)
{
    if (empty($pair_ids) || empty($object_id) || $object_type !== 'product') {
        return;
    }

    $sync_service = ServiceProvider::getService();
    $sync_service->onTableChanged('images_links', $object_id);
}

function fn_master_products_delete_image_pair($pair_id, $object_type, $image)
{
    if (empty($image) || empty($image['object_id']) || $image['object_type'] !== 'product') {
        return;
    }

    $sync_service = ServiceProvider::getService();
    $sync_service->onTableChanged('images_links', $image['object_id']);
}

function fn_product_variations_master_products_create_vendor_product($master_product_id, $company_id, $product, $vendor_product_id)
{
    $group_repository = VariationsServiceProvider::getGroupRepository();
    $variation_service = VariationsServiceProvider::getService();
    $product_repository = ServiceProvider::getProductRepository();

    $master_product_group = $group_repository->findGroupInfoByProductId($master_product_id);

    if (empty($master_product_group)) {
        return;
    }

    $product_ids = $group_repository->findGroupProductIdsByGroupIds([$master_product_group['id']]);
    $vendor_product_ids = $product_repository->findVendorProductIdsByMasterProductIds($product_ids, $company_id);

    if (empty($vendor_product_ids)) {
        return;
    }

    $group_ids = $group_repository->findGroupIdsByProductIds($vendor_product_ids);

    if (empty($group_ids)) {
        $group_id = null;
    } else {
        $group_id = reset($group_ids);
    }

    if ($group_id !== null) {
        $variation_service->attachProductsToGroup($group_id, [$vendor_product_id]);
    } else {
        $variation_service->createGroup([$vendor_product_id], null, GroupFeatureCollection::createFromFeatureList($master_product_group['feature_collection']));
    }
}

/**
 * The "master_products_actualize_master_product_quantity" hook handler.
 *
 * Actions performed::
 *  - Change default variation if needed.
 *
 * @param int $product_id        Product identifier
 * @param int $master_product_id Master product identifier
 */
function fn_product_variations_master_products_actualize_master_product_quantity($product_id, $master_product_id)
{
    VariationsServiceProvider::getService()->onChangedProductQuantity($master_product_id);
}

/**
 * The "check_add_to_cart_post" hook handler.
 *
 * Actions performed:
 *  - Prevents the addition of a common product to cart
 *
 * @see fn_check_add_product_to_cart
 */
function fn_master_products_check_add_to_cart_post($cart, $product, $product_id, &$result)
{
    if (!$result
        || (Registry::get('addons.vendor_debt_payout.status') === 'A'
        && !empty($product_id)
        && (int) $product_id === fn_vendor_debt_payout_get_payout_product())
    ){
        return;
    }

    $product_company_id = db_get_field('SELECT company_id FROM ?:products WHERE product_id = ?i', $product_id);
    $result = !empty($product_company_id);
}

/**
 * The "seo_get_schema_org_markup_items_post" hook handler.
 *
 * Actions performed:
 *     - Adds aggregate offer into the Product markup item when viewing a common product.
 *
 * @param array<string, int>                                              $product_data Product data to get markup items from
 * @param bool                                                            $show_price   Whether product price must be shown
 * @param string                                                          $currency     Currency to get product price in
 * @param array<string, array<string, array<int, array<string, string>>>> $markup_items Schema.org markup items
 *
 * @param-out array<string, array<string, array<int, array<string, int|list<array{@type: string, availability: string, price?: float, priceCurrency?: string, url: string}>|mixed|string>>>> $markup_items Schema.org markup items
 *
 * @see fn_seo_get_schema_org_markup_items()
 */
function fn_master_products_seo_get_schema_org_markup_items_post($product_data, $show_price, $currency, &$markup_items)
{
    if (!$show_price) {
        return;
    }

    if (empty($product_data['master_product_offers_count'])) {
        return;
    }

    $product_repository = ServiceProvider::getProductRepository();

    $offer_count = $product_repository->getVendorProductsCount(
        $product_data['product_id'],
        [ObjectStatuses::ACTIVE, ObjectStatuses::HIDDEN],
        [VendorStatuses::ACTIVE],
        Registry::get('settings.General.show_out_of_stock_products') === YesNo::YES
    );

    if ($offer_count === 0) {
        return;
    }

    $aggregate_offer = reset($markup_items['product']['offers']);
    if (!$aggregate_offer) {
        return;
    }
    $offer_id = key($markup_items['product']['offers']);

    $base_offer_url = $aggregate_offer['url'];
    $aggregate_offer = [
        '@type'         => 'http://schema.org/AggregateOffer',
        'lowPrice'      => $aggregate_offer['price'],
        'priceCurrency' => $aggregate_offer['priceCurrency'],
        'offerCount'    => $offer_count,
        'offers'        => [],
    ];

    if ($offer_count <= Registry::ifGet('config.master_products.seo_snippet_offers_threshold', 100)) {
        $vendor_product_ids = $product_repository->findVendorProductIds(
            $product_data['product_id'],
            [ObjectStatuses::ACTIVE, ObjectStatuses::HIDDEN],
            [VendorStatuses::ACTIVE],
            Registry::get('settings.General.show_out_of_stock_products') === YesNo::YES
        );
        $vendor_products = $product_repository->findProducts($vendor_product_ids);

        foreach ($vendor_products as $vendor_product) {
            if (!isset($vendor_product['schema_org_features'])) {
                $vendor_product['schema_org_features'] = fn_seo_get_schema_org_product_features($vendor_product['product_id']);
            }

            $aggregate_offer['offers'][] = [
                '@type'         => 'http://schema.org/Offer',
                'name'          => fn_seo_get_schema_org_product_name($vendor_product),
                'sku'           => fn_seo_get_schema_org_product_sku($vendor_product),
                'gtin'          => fn_seo_get_schema_org_product_feature($vendor_product['schema_org_features'], 'gtin'),
                'mpn'           => fn_seo_get_schema_org_product_feature($vendor_product['schema_org_features'], 'mpn'),
                'availability'  => fn_seo_get_schema_org_product_availability($vendor_product),
                'url'           => fn_link_attach($base_offer_url, "vendor_id={$vendor_product['company_id']}"),
                'price'         => fn_format_price_by_currency(
                    $vendor_product['price'],
                    CART_PRIMARY_CURRENCY,
                    $currency
                ),
                'priceCurrency' => $aggregate_offer['priceCurrency'],
            ];
        }
    }

    $markup_items['product']['offers'][$offer_id] = $aggregate_offer;
}

/**
 * The "update_product_amount_post" hook handler.
 *
 * Actions performed:
 *  - Actualizes master product price, offers and quantity, after the amount was changed.
 *
 * @see fn_update_product_amount
 */
function fn_master_products_update_product_amount_post($product_id)
{
    $product_id_map = ServiceProvider::getProductIdMap();

    if (!$product_id_map->isMasterProduct($product_id) && !$product_id_map->isVendorProduct($product_id)) {
        return;
    }

    $service = ServiceProvider::getService();

    $service->actualizeMasterProductPrice($product_id);
    $service->actualizeMasterProductOffersCount($product_id);
    $service->actualizeMasterProductQuantity($product_id);
}

/**
 * Hook handler: after options reselected
 */
function fn_master_products_after_options_calculation($mode, $data)
{
    if (empty($data['reload_tabs'])) {
        return;
    }

    /** @var \Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];

    /** @var array $product */
    $product = $view->getTemplateVars('product');

    fn_init_product_tabs($product);

    // check if product option change happened not in block
    if (empty($data['appearance']['obj_prefix'])) {
        $view->assign('no_capture', false);
    }
}

/**
 * The "discussion_is_user_eligible_to_write_review_for_product_post" hook handler.
 *
 * Actions performed:
 *  - Checks if common product is bought by chosen user
 *
 * @see fn_discussion_is_user_eligible_to_write_review_for_product
 */
function fn_master_products_discussion_is_user_eligible_to_write_review_for_product_post($user_id, $product_id, &$result, $need_to_buy_first)
{
    if (!$result && $need_to_buy_first) {
        $product_map = ServiceProvider::getProductIdMap();
        if ($product_map->isVendorProduct($product_id)) {
            $master_product_id = $product_map->getMasterProductId($product_id);
        } else {
            $master_product_id = $product_id;
        }
        $product_repository = ServiceProvider::getProductRepository();
        $product_ids = $product_repository->findVendorProductIds($master_product_id);
        if (!empty($product_ids)) {
            $query = VariationsServiceProvider::getQueryFactory()->createQuery(
                'orders',
                ['user_id' => $user_id],
                ['orders.order_id'],
                'orders'
            );
            $query->addLeftJoin('details', 'order_details', ['order_id' => 'order_id'], ['product_id' => $product_ids]);
            $query->setLimit(1);
            $result = (bool) $query->column();
        }
    }
}

/**
 * The "create_seo_name_pre" hook handler.
 *
 * Actions performed:
 * - Updates object name for vendor common product.
 *
 * @param int    $object_id   Object ID
 * @param string $object_type Object type
 * @param string $object_name Object name
 * @param int    $index       Index
 *
 * @see fn_create_seo_name
 */
function fn_master_products_create_seo_name_pre($object_id, $object_type, &$object_name, $index)
{
    if ($object_type !== 'p') {
        return;
    }

    $repository = ServiceProvider::getProductRepository();
    $product = current($repository->findVendorProductsInfo([$object_id]));

    if (empty($product['master_product_id']) || empty($product['company_id'])) {
        return;
    }

    $master_product_seo_name = fn_seo_get_name('p', $product['master_product_id']);
    $company_seo_name = fn_seo_get_name('m', $product['company_id']);

    /*
     * If $index <= 1 - means that seo name ($object_name) is not in use.
     * if $index > 1 - means that seo name ($object_name) already in use.
     * For example:
     *      One of the variations of the vendor product have seo name master-product-company
     *      Another variation will have the master-product-2-company seo name, 2 - is $index
     */

    if ($index <= 1) {
        $object_name = $master_product_seo_name . SEO_DELIMITER . $company_seo_name;
        return;
    }

    $object_name = $master_product_seo_name . SEO_DELIMITER . $index . SEO_DELIMITER . $company_seo_name;
}

/**
 * The "update_product_popularity" hook handler.
 *
 * Actions performed:
 * - Updates common products popularity
 *
 * @param int                       $product_id Product id
 * @param array<string, string|int> $popularity Popularity data
 *
 * @see fn_update_product_popularity
 */
function fn_master_products_update_product_popularity($product_id, array $popularity)
{
    $product_id_map = ServiceProvider::getProductIdMap();
    $master_product_id = $product_id_map->isMasterProduct($product_id) ? $product_id : $product_id_map->getMasterProductId($product_id);

    if (!$master_product_id) {
        return;
    }

    $product_repository = ServiceProvider::getProductRepository();
    $products = $product_repository->findVendorProductIdsByMasterProductIds([$master_product_id]);

    if (!$products) {
        return;
    }

    $product_ids = (array) $products[$master_product_id];
    $product_ids[$master_product_id] = $master_product_id;

    $sync_service = ServiceProvider::getService();
    $sync_service->syncData('product_popularity', $product_id, $product_ids);
}

/**
 * phpcs:disable SlevomatCodingStandard.TypeHints.DisallowMixedTypeHint
 * --------------------------------------------------------------------
 *
 * The "attachments_check_permission_post" hook handler.
 *
 * Actions performed:
 * - Checks permission to work with attachment for common products
 *
 * @param mixed[] $request    Array of query parameters
 * @param bool    $permission Permission
 *
 * @return void
 */
function fn_master_products_attachments_check_permission_post(array $request, &$permission)
{
    if ($permission || empty($request['object_id'])) {
        return;
    }

    $product_id_map = ServiceProvider::getProductIdMap();
    $permission = $product_id_map->isMasterProduct($request['object_id']);
}

/**
 * The "change_company_status_before_mail" hook handler.
 *
 * Actions performed:
 *  - Marks storefront to reindex the offers count of master products if vendor status changed
 *
 * @param int    $company_id  Company ID
 * @param string $status_to   Status to letter
 * @param string $reason      Reason text
 * @param string $status_from Status from letter
 *
 * @see \fn_change_company_status()
 */
function fn_master_products_change_company_status_before_mail($company_id, $status_to, $reason, $status_from)
{
    if ($status_to !== VendorStatuses::ACTIVE && $status_from !== VendorStatuses::ACTIVE) {
        return;
    }

    $indexer = ServiceProvider::getIndexer();
    $indexer->markStorefrontToReindexStorefrontOffersCountByVendorId($company_id);
}


/**
 * The "storefront_repository_save_post" hook handler.
 *
 * Actions performed:
 *  - Marks storefront to reindex the offers count of master products if storefront was added
 *  - Marks storefront to reindex the offers count of master products if storefront vendors were changed
 *
 * @param \Tygh\Storefront\Storefront  $storefront  Storefront
 * @param \Tygh\Common\OperationResult $save_result Result of the save process
 *
 * @see \Tygh\Storefront\Repository::save()
 */
function fn_master_products_storefront_repository_save_post(Storefront $storefront, OperationResult $save_result)
{
    if ($save_result->isFailure()) {
        return;
    }

    $storefront_id = (int) $save_result->getData();

    if (empty($storefront->storefront_id)) {
        ServiceProvider::getIndexer()->markStorefrontToReindexStorefrontOffersCount($storefront_id);
        return;
    }

    if (!$storefront->isReleationChanged('company_ids')) {
        return;
    }

    $company_ids = array_map('intval', $storefront->getCompanyIds());
    $stored_company_ids = array_map('intval', (array) $storefront->getStoredRelationValue('company_ids'));

    if ($company_ids === $stored_company_ids) {
        return;
    }

    ServiceProvider::getIndexer()->markStorefrontToReindexStorefrontOffersCount($storefront_id);
}

/**
 * The "settings_update_value_by_id_post" hook handler.
 *
 * Actions performed:
 *  - Marks storefront to reindex the offers count of master products if the "Show out of stock products" setting was changed for storefront
 *
 * @param \Tygh\Settings $settings          Settings instance
 * @param string         $object_id         Setting object ID
 * @param string|array   $value             New value that was passed to function
 * @param int            $company_id        Company ID
 * @param bool           $execute_functions Whether to execute action functions
 * @param array          $data              Data to be inserted/updated into settings objects table
 * @param array          $old_data          Previously existed data (if any) of settings object at settings objects table
 * @param string         $table             Table to save setting object value ("settings_objects" or "settings_vendor_values")
 * @param int            $storefront_id     Storefront identifier
 *
 * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingTraversableTypeHintSpecification
 */
function fn_master_products_settings_update_value_by_id_post(Settings $settings, $object_id, $value, $company_id, $execute_functions, array $data, array $old_data, $table, $storefront_id)
{
    if ($old_data['value'] === $value) {
        return;
    }

    if ($old_data['section_name'] === 'General' && $old_data['name'] === 'show_out_of_stock_products') {
        if ($storefront_id) {
            ServiceProvider::getIndexer()->markStorefrontToReindexStorefrontOffersCount($storefront_id);
        } else {
            ServiceProvider::getIndexer()->markAllStorefrontToReindexStorefrontOffersCount();
        }
        return;
    }

    if ($old_data['section_name'] === 'vendor_debt_payout' && $old_data['name'] === 'hide_products') {
        ServiceProvider::getIndexer()->markAllStorefrontToReindexStorefrontOffersCount();
        return;
    }
}

/**
 * The "update_product_tab_post" hook handler.
 *
 * Actions performed:
 *  - If master product were removed when the tab settings, this hook handler will launch tab syncing.
 *      This is necessary because the product page of a offer must not differ from the product page of its master product.
 *
 * @param int                       $tab_id   Product tab identifier
 * @param array<string, string|int> $tab_data Product tab data
 *
 * @see \Tygh\BlockManager\ProductTabs::update
 */
function fn_master_products_update_product_tab_post($tab_id, $tab_data)
{
    if (empty($tab_data['product_ids'])) {
        return;
    }

    $current_product_ids = [];
    $product_ids = fn_explode(',', (string) $tab_data['product_ids']);

    if (!empty($tab_data['current_product_ids'])) {
        $current_product_ids = fn_explode(',', (string) $tab_data['current_product_ids']);
    }

    $deleted_product_ids = array_diff($current_product_ids, $product_ids);
    $added_product_ids = array_diff($product_ids, $current_product_ids);
    $affected_product_ids = array_merge($deleted_product_ids, $added_product_ids);

    if (empty($affected_product_ids)) {
        return;
    }

    $service = ServiceProvider::getService();
    $product_id_map = ServiceProvider::getProductIdMap();
    foreach ($affected_product_ids as $product_id) {
        if (!$product_id_map->isMasterProduct($product_id) && !$product_id_map->isVendorProduct($product_id)) {
            continue;
        }
        $service->onTableChanged('product_tabs', $product_id, ['tab_id' => $tab_id]);
    }
}

/**
 * The "master_products_reindex_storefront_offers_count" hook handler.
 *
 * Actions performed:
 *   - Extends company statuses list with suspended status for update vendor offres count if "Hide products of suspended vendors" (Vendor-to-admin payments) is disabled
 *
 * @param array<string, int[]>  $params     Params
 * @param array<string, string> $conditions Conditions
 */
function fn_vendor_debt_payout_master_products_reindex_storefront_offers_count(array $params, array &$conditions)
{
    if (YesNo::toBool(Settings::instance(['company_id' => 0])->getValue('hide_products', 'vendor_debt_payout'))) {
        return;
    }

    // FIXME Indexer should be use fn_get_products conditions
    $conditions['companies_status'] = db_quote('companies.status IN (?a)', [VendorStatuses::ACTIVE, VendorStatuses::SUSPENDED]);
}

/**
 * Loads seller data for product offers.
 *
 * @param array<int, array<string, string|int|bool>> $products Product offers
 *
 * @return array<int, array<string, string|int|bool|array<string, string>>> Product offers with loaded seller data
 */
function fn_master_products_load_products_seller_data(array $products)
{
    list($companies,) = fn_get_companies([
        'company_id' => array_column($products, 'company_id'),
        'extend'     => [
            'product_count'  => YesNo::NO,
            'logos'          => true,
            'placement_info' => true,
        ],
    ], Tygh::$app['session']['auth']);

    $companies = fn_array_combine(array_column($companies, 'company_id'), $companies);

    foreach ($products as &$product) {
        $product['company'] = $companies[$product['company_id']];
        $product['is_vendor_products_list_item'] = true;
    }
    unset($product);

    return $products;
}

/**
 * The "storefront_rest_api_gather_additional_products_data_pre" hook handler.
 *
 * Actions performed:
 * - Loads sellers data for products when requested via API.
 *
 * @param array<int, array<string, string|int|bool>> $products           Products
 * @param array<string, string>                      $params             Request parameters
 * @param array<string, string>                      $data_gather_params Product data gather parameters
 *
 * @return void
 *
 * @param-out array<int, array<string, string|int|bool|array<string, string>>> $products Products
 *
 * @see \fn_storefront_rest_api_gather_additional_products_data()
 */
function fn_master_products_storefront_rest_api_gather_additional_products_data_pre(
    array &$products,
    array $params,
    array $data_gather_params
) {
    if (empty($params['vendor_products_by_product_id'])) {
        return;
    }

    $products = fn_master_products_load_products_seller_data($products);

    $public_company_properties = [
        'email'               => true,
        'company'             => true,
        'company_description' => true,
        'address'             => true,
        'city'                => true,
        'state'               => true,
        'country'             => true,
        'zipcode'             => true,
        'phone'               => true,
        'url'                 => true,
        'logos'               => true,
        'average_rating'      => true,
        'discussion'          => true,
    ];
    foreach ($products as &$product) {
        /**
         * @psalm-var array{
         *   company: array<string, string>
         * } $product
         */
        $product['company'] = array_filter(
            $product['company'],
            static function ($property) use ($public_company_properties) {
                return isset($public_company_properties[$property]);
            },
            ARRAY_FILTER_USE_KEY
        );
    }
    unset($product);
}
