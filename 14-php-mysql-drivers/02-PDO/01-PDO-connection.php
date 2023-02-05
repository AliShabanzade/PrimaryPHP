<?php
include_once 'lib.php';
// The list() function is used to assign values to a list of variables in one operation
list($host , $database , $user , $pass) = ["localhost" , "world" , "root" , ""];

try{
    //connetion to database with PDO interface
    $db = new PDO("mysql:host=$host; dbname=$database; charset=utf8mb4" , $user , $pass);
    //setAttribute set to show errors in case connection was successfull
    $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echoLine("successfully connected to mysql!");

}catch(PDOException $e){
    echoLine("PDO Err : failed to connect :" . $e->getMessage() . "in line" . $e->getLine());
    exit();
}

// for get attributes for connection status
//  echoLine($db->getAttribute(PDO::ATTR_CONNECTION_STATUS));
