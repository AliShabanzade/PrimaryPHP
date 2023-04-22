<?php

require 'constants.php';
require 'config.php';
require  BASE_PATH . 'libs/helpers.php';

// dsn= driver(mysql) host , dbname , charset
$dsn="mysql:host=$database_config->host;dbname=$database_config->dbname;charset=$database_config->charset";

try{
   $pdo = new PDO($dsn , $database_config->user , $database_config->password );
    
    
}catch(PDOException $e){
    diePage("Connection Failed : " . $e->getMessage());

}

