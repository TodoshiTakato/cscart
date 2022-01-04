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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Http;

//$ip = fn_get_ip();
//$ip = $ip["host"];
$ip = $auth["ip"];
//$ip = "87.76.12.115";

//$url = "http://ipgeobase.ru:7020/geo";
$url = "https://www.reg.ru/misc/geoip_lookup";
$param = array(
    "ip_address_or_host" => $ip,
);
$extra =array(
    "timeout" => 3,
);

$result = Http::get($url, $param, $extra);

//$result = iconv("windows-1251", "utf-8", $result);

fn_print_r($result);