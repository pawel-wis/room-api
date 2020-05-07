<?php
require_once('config/DatabaseConnector.php');
require_once('app/Controller/WConditionsController.php');
require_once('app/Controller/ErrorController.php');

// splitted request url
$splitted_url = explode('/', $_SERVER['REQUEST_URI']);

 switch($splitted_url[2]){
     case '':
     break;

     case 'weather':
        $method = $_SERVER['REQUEST_METHOD'];
        $controller = new WConditionsController;

     break;

     default:
        $controller = new ErrorController;
        $controller->message();
     break;
 }