<?php

use \EnvLoader;

class DatabaseConnector {
    // DB configuration, conn is connection object it will be returned by connect method
    private $db_host;
    private $db_name;
    private $db_username;
    private $db_password;
    public $conn;


    //Init fields in constructor
    public function __construct(){
        $env = \EnvLoader::getInstance()->getEnv();

        $this->db_host = $env['DB_HOST'];
        $this->db_name = $env['DB_NAME'];
        $this->db_username = $env['DB_USERNAME'];
        $this->db_password = $env['DB_PASSSWORD'];
    }

    //Init db connection
    public function connect(){
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host=' . $this->db_host . ';dbname=' . $this->db_name,
                                  $this->db_username, $this->db_password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo('Database connection error: ' . $e->getMessage());
        }

        return $this->conn;
    }
}