<?php
require_once('config/DatabaseConnector.php');

$db_c = new DatabaseConnector;
$db = $db_c->connect();

$create_db_query = 'CREATE DATABASE IF NOT EXISTS ' . $db_c->getDBName();
$stmt = $db->prepare($create_db_query);
$stmt->execute();

$create_weather_table = 'CREATE TABLE IF NOT EXISTS weather(
    id INT NOT NULL AUTO_INCREMENT,
    temperature DECIMAL NOT NULL,
    humidity INT NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT NOW(),
    PRIMARY KEY (id)
);';

$stmt = $db->prepare($create_weather_table);
$stmt->execute();