<?php
/**
 *  MODX Configuration file
 */
$database_type = 'mysql';
$database_server = 'mysql';
$database_connection_charset = 'utf8mb4';
$table_prefix = 'modx_';
$dbase = 'modx';
$database_user = 'modx';
$database_password = 'modx';
$database_dsn = 'mysql:host=mysql;dbname=modx;charset=utf8mb4';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1737123292;

$site_id = 'modx678a65dc402672.18181858';
$site_sessionname = 'SN678a65cad7800';
$https_port = '443';
$uuid = '8ec3dac1-c90b-4457-afa1-b0ad813c2051';

if (!defined('MODX_ASSETS_PATH')) {
    $modx_assets_path= '/var/www/html/assets/';
    $modx_assets_url= '/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_path= '/var/www/html/';
    $modx_base_url= '/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_connectors_path= '/var/www/html/connectors/';
    $modx_connectors_url= '/connectors/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_CORE_PATH')) {
    $modx_core_path= '/var/www/html/core/';
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_manager_path= '/var/www/html/manager/';
    $modx_manager_url= '/manager/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path= '/var/www/html/core/src/Revolution/Processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}

if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || parse_url('http://' . $_SERVER['HTTP_HOST'], PHP_URL_PORT) == $https_port);
}

if (!defined('MODX_URL_SCHEME')) {
    $url_scheme =  $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host= 'modx-test.ru';
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host = array_key_exists('HTTP_HOST', $_SERVER) ? parse_url($url_scheme . $_SERVER['HTTP_HOST'], PHP_URL_HOST) : 'modx-test.ru';
        $http_port = parse_url($url_scheme . $_SERVER['HTTP_HOST'], PHP_URL_PORT);
        $http_host .= in_array($http_port, [null, 80, 443]) ? '' : ':' . $http_port;
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}

if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}