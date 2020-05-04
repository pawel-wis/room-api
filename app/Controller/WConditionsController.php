<?php
require_once(dirname(__DIR__) . '/Entities/WConditions.php');

class WConditionsController{
    public function hello(){
        echo('Hello from ' . get_class($this));
    }
}