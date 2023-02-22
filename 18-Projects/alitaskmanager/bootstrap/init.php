<?php

include "constants.php";
include 'config.php';

include 'vendor/autoload.php';

include 'libs/helpers.php';











// connect to a mysql database using driver invocation
$dsn = "mysql:dbname=$database_config->db; host={$database_config->host}";



try{
    $pdo = new PDO($dsn , $database_config->user , $database_config->pass);
}catch(PDOException $e){
  diePage('connection failed : ' . $e->getMessage());

}



include 'libs/lib-tasks.php';
include 'libs/libs-auth.php';





