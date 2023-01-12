<?php

// 1. Общие настройки

// Отображение ошибок на этап разработки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/router.php');
require_once(ROOT . '/components/db.php');
// 3.


// 4. Подключение Router

$router = new Router();
$router->run();