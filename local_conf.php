<?php

// При работе с "живым" магазином можно сделать так, чтобы настройки из файла применялись только для определённого IP-адреса. Так local_conf.php не затронет покупателей. Замените 127.0.0.1 на нужный вам IP.
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {

    // Включаем дебаг-панель на витрине и в панели администратора
     define('DEBUG_MODE', true);

    // Включаем режим разработки для отображения ошибок
    define('DEVELOPMENT', true);

    // Включаем отображение SMARTY- и PHP-ошибок на экране
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    ini_set('display_startup_errors', true);

    // Отключаем PHP-кэш блоков
    $config['tweaks']['disable_block_cache'] = true;

}

// Можно задать настройки для локальной копии, не изменяя сам config.local.php


$config['db_host'] = 'localhost';
$config['db_name'] = 'cscart';
$config['db_user'] = 'cscart';
$config['db_password'] = 'cscart';

$config['http_host'] = 'cscart';
$config['http_path'] = '';

$config['https_host'] = 'cscart';
$config['https_path'] = '';


// Также вы можете настроить хранилища


// Хранилище для кэша:
// Возможные варианты: file, sqlite, database, redis, xcache, apc
// Чтобы использовать sqlite, на сервере должен быть установлен модуль PHP "sqlite3"
// Чтобы использовать xcache, на сервере должен быть установлен модуль PHP "xcache"
// Чтобы использовать apc, на сервере должен быть установлен модуль PHP "apc"
$config['cache_backend'] = 'file';
$config['cache_redis_server'] = 'localhost';
$config['cache_redis_global_ttl'] = 0; // установите ограничение по времени, если кэш занимает всю память, выделенную Redis

// Хранилище для сессий. Возможные варианты: database, redis
$config['session_backend'] = 'database';
$config['session_redis_server'] = 'localhost';
$config['cache_apc_global_ttl'] = 0;
$config['cache_xcache_global_ttl'] = 0;
