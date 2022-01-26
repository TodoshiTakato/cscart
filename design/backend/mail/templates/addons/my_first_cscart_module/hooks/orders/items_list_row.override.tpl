{*{$order_info.product_groups.0.products.1061624811.main_pair.detailed|fn_print_r}*}
{*{$oi|fn_print_r}*}
{*{$order_info|fn_print_r}*}

{foreach from=$order_info.products item="oi"}
    {if !$oi.extra.parent}
        {$abc = $oi["item_id"]}
{*        {$abc|fn_print_r}*}
{*        {$order_info.product_groups.0.products.$abc.main_pair.detailed.relative_path|fn_print_r}*}
        <tr>
            <td style="padding: 5px 10px; background-color: #ffffff; font-size: 12px; font-family: Arial;">
                <div style="display: flex; align-items: center">
                    <div>
                        <img src="/images/{$order_info.product_groups.0.products.$abc.main_pair.detailed.relative_path}"
                             width="100" height="100">
                    </div>
                    <div>
                        {$oi.product|default:__("deleted_product") nofilter}
                        {hook name="orders:product_info"}
                        {if $oi.product_code}<p style="margin: 2px 0px 3px 0px;">{__("sku")}: {$oi.product_code}</p>{/if}
                        {/hook}
                        {if $oi.product_options}<br/>{include file="common/options_info.tpl" product_options=$oi.product_options}{/if}
                    </div>
                </div>
            </td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: center; font-size: 12px; font-family: Arial;">{$oi.amount}</td>
            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">{if $oi.extra.exclude_from_calculate}{__("free")}{else}{include file="common/price.tpl" value=$oi.original_price}{/if}</td>
            {if $order_info.use_discount}
                <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">{if $oi.extra.discount|floatval}{include file="common/price.tpl" value=$oi.extra.discount}{else}&nbsp;-&nbsp;{/if}</td>
            {/if}
            {if $order_info.taxes && $settings.Checkout.tax_calculation != "subtotal"}
                <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; font-size: 12px; font-family: Arial;">{if $oi.tax_value}{include file="common/price.tpl" value=$oi.tax_value}{else}&nbsp;-&nbsp;{/if}</td>
            {/if}

            <td style="padding: 5px 10px; background-color: #ffffff; text-align: right; white-space: nowrap; font-size: 12px; font-family: Arial;"><b>{if $oi.extra.exclude_from_calculate}{__("free")}{else}{include file="common/price.tpl" value=$oi.display_subtotal}{/if}</b>&nbsp;</td>
        </tr>
    {/if}
{/foreach}