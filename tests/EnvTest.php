<?php

include_once('config/EnvLoader.php');

 class EnvTest extends \PHPUnit\Framework\TestCase{

     public function testShouldCreateInstance(){
         $envInstance = \EnvLoader::getInstance();

         $this->assertNotNull($envInstance);
     }

     public function testSameRefForMultipleVariables(){
         $envInstanceOne = \EnvLoader::getInstance();
         $envInstanceTwo = \EnvLoader::getInstance();

         $this->assertTrue($envInstanceOne === $envInstanceTwo);
     }

     public function testEnvIsArray(){
         $env = \EnvLoader::getInstance()->getEnv();

         $this->assertTrue(is_array($env));
     }
 }