<?php






//1.Общие настойки
ini_set('display_errors', 1);
error_reporting(E_ALL);



//2. Подключения файлов системы

define('ROOT',dirname(__FILE__));

require_once (ROOT.'/components/Autoload.php');


//3.Установить соединения с БД



//4 Вызов Router
$router = new Router();
$router->run();