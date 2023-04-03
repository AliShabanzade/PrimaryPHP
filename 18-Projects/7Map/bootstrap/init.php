<?php
session_start();


include "constants.php";

include BASE_PATH . "bootstrap/config.php";

include   BASE_PATH ."libs/helpers.php";






// connect to a mysql database using driver invocation
$dsn = "mysql:dbname=$database_config->db;host={$database_config->host}";



try{
    $pdo = new PDO($dsn , $database_config->user , $database_config->pass);
}catch(PDOException $e){
  diePage('connection failed : ' . $e->getMessage());

}


// echo "connection to database is OK";
include BASE_PATH . "libs/lib-users.php";
include BASE_PATH . "libs/lib-locations.php";





