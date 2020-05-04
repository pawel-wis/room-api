<?php
require_once(dirname(dirname(__DIR__)) . '../config/DatabaseConnector.php');

abstract class Model{
    protected $table_name;
    protected $db;

    public function __construct($table_name){
        $this->table_name = $table_name;
        $this->db = (new DatabaseConnector)->connect();
    }

    public function getAll(){
        $query = 'SELECT * FROM ' . $this->table_name;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // if fetch returns 0 records or fails, function returns empty array
        if(!$res){
            $res = array();
        }

        return $res;
    }

    public function where($field, $value){
        $db->connect();
        $query = 'SELECT * FROM ' . $this->table_name . ' WHERE ' . $field . ' = ' . $value;
        $stmt = $db->prepare($query);
        $smtm->execute;

        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        // if fetch returns 0 records or fails, function returns empty array
        if(!$res){
            $res = array();
        }

        return $res;
    }
}