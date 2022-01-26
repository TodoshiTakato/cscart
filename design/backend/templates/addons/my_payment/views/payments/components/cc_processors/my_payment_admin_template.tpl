{assign var="prepare_url" value="payment_notification.prepare?payment=click_uz"|fn_url:'C':'https'}
{assign var="complete_url" value="payment_notification.complete?payment=click_uz"|fn_url:'C':'https'}
<p>{__("text_my_payment_callback_url", ["[prepare_url]" => $prepare_url, "[complete_url]" => $complete_url])}</p>

<hr>

<div class="control-group">
    <label class="control-label" for="my_payment_merchant_id">{__("addons.my_payment.merchant_id")}:</label>
    <div class="controls">
        <input type="text"
               name="payment_data[processor_params][merchant_id]"
               id="my_payment_merchant_id"
               value="{$processor_params.merchant_id}"
               size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_merchant_user_id">{__("addons.my_payment.merchant_user_id")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][merchant_user_id]" id="my_payment_merchant_user_id" value="{$processor_params.merchant_user_id}"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_service_id">{__("addons.my_payment.service_id")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][service_id]" id="my_payment_service_id" value="{$processor_params.service_id}"  size="60">
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="my_payment_secret_key">{__("addons.my_payment.secret_key")}:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][secret_key]" id="my_payment_secret_key" value="{$processor_params.secret_key}"  size="60">
    </div>
</div>

<div class="control-group">
    {assign var="statuses" value=$smarty.const.STATUSES_ORDER|fn_get_simple_statuses}
    <label class="control-label" for="my_payment_paid">{__("addons.my_payment.paid_status")}:</label>
    <div class="controls">
        <select name="payment_data[processor_params][paid_status]" id="my_payment_paid">
            {foreach from=$statuses item="s" key="k"}
                <option value="{$k}" {if (isset($processor_params.paid_status) && $processor_params.paid_status == $k) || (!isset($processor_params.paid_status) && $k == 'P')}selected="selected"{/if}>{$s}</option>
            {/foreach}
        </select>
    </div>
</div>
