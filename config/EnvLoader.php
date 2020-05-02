<?php
// This class responses for loading data from .env file
class EnvLoader{
    //own instance -> singleton
    private static $instance = null;
    private $fpath;
    private $env;

    // method that creates instance
    public static function getInstance(){
        if(static::$instance === null){
            static::$instance = new EnvLoader;
        }

        return static::$instance;
    }

    // returns env array
    public function getEnv(){
        return $this->env;
    }
    
    // private constructor. Singleton needs it to control instance creation.
    private function __construct(){
        $this->fpath = dirname(__DIR__) . '/.env';
        $this->env = $this->load();
    }

    // function check that line isn't a comment or tag
    // comment means '//' and tag means '[]'
    private function check_line($line){
        if( (strpos($line, '//') === 0) || (strpos($line, '[') === 0)){
            return false;
        }
        return true;
    }

    // function return env variables from .env file
    // if file can't be opened it throws an exception
    private function load(){
        $handle = fopen($this->fpath, 'r');
        if($handle){
            $env = array();
            while( ($line = fgets($handle)) !== false){
                if( $this->check_line($line)){
                    $splitted_line = explode("=", $line);
                    $splitted_line[1] = str_replace(array("\r\n", " ", "\n"), "",$splitted_line[1]); // remove white spaces
                    $env[$splitted_line[0]] = $splitted_line[1];
                }
            }
            fclose($handle);
        } else{
            throw new Exception('.env file open field !');
        }
        return $env;
    }
}