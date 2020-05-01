<?php
// This class represents database entity
class WConditions{
    // db connection and table name
    private $conn;
    private $table_name;

    private $temperature;
    private $humidity;

    public function __construct($conn){
        $this->conn = $conn;
    }

    // need to implement db reading functions
}