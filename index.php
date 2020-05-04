<?php
require_once('config/DatabaseConnector.php');
require_once('app/Controller/WConditionsController.php');

// splitted request url
$splitted_url = explode('/', $_SERVER['REQUEST_URI']);
 var_dump($splitted_url);

 switch($splitted_url[2]){
     case '':
     break;

     case 'weather':
        $method = $_SERVER['REQUEST_METHOD'];
        $controller = new WConditionsController;
        $controller->hello();
     break;

     default:
        echo("WRONG request");
     break;
 }