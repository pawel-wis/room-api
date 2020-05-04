<?php
require_once(dirname(__DIR__) . '/Abstract/Model.php');

// This class represents database entity
class WConditions extends Model{

    private $temperature;
    private $humidity;

    public function __construct(){
        //passs table name to parent constructor
        parent::__construct('weather');
    }

}