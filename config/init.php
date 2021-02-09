<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CONF", ROOT . '/config');
define("CORE", ROOT . '/vendor/shop/core');
define("LIBS", ROOT . '/vendor/shop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("LAYOUT", 'watches');

$app_path = "http://{$_SERVER['SERVER_NAME']}";
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';
