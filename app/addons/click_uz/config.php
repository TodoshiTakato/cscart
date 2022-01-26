<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }


define('CLICK_SUCCESS', 0);
define('CLICK_ERROR_SIGN_CHECK', -1);
define('CLICK_ERROR_AMOUNT', -2);
define('CLICK_ERROR_ACTION_NOT_FOUND', -3);
define('CLICK_ERROR_ALREADY_PAID', -4);
define('CLICK_ERROR_USER_NOT_EXIST', -5);
define('CLICK_ERROR_TRANSACTION_NOT_EXIST', -6);
define('CLICK_ERROR_IN_REQUEST', -8);
define('CLICK_ERROR_TRANSACTION_CANCELLED', -9);