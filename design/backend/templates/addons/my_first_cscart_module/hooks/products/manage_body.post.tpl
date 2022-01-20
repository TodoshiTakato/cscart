<td width="13%"
    class="product-my_first_cscart_module_setting-column"
    data-th="{__("my_first_cscart_module_setting")}"
>
    <a class="row-status"
       title="{$product.my_first_cscart_module_setting|strip_tags}"
       href="{"products.update?product_id=`$product.product_id`"|fn_url}"
    >
        {$product.my_first_cscart_module_setting|truncate:20}
    </a>

    <input type="text"
           name="products_data[{$product.product_id}][my_first_cscart_module_setting]"
           size="6"
           value="{$product.my_first_cscart_module_setting|default:$product.my_first_cscart_module_setting}"
           class="input-full input-hidden"
    />

</td>