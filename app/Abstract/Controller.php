<?php
class Controller{
    private $method;
    private $params;

    public function __construct($method, $params){
        $this->method = $method;
        $this->params = $params;
    }

}