<?php
include_once 'lib.php';

list($host , $database , $user , $pass) = ["localhost" , "world" , "root" , ""];

try{
    $db = new PDO("mysql:host=$host; dbname=$database; charset=utf8mb4" , $user , $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echoLine("successfully connected to mysql!");

}catch(PDOException $e){
    echoLine("PDO Err : failed to connect :" . $e->getMessage() . "in line" . $e->getLine());
    exit();
}