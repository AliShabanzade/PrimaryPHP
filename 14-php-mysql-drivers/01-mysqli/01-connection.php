<?php

//create mysql connection whit mysqli driver
$mysqli = new mysqli("localhost" , "root" , "" , "world");

//check connection is ok
if($mysqli->connect_errno){
    echo "Failed to connect to Mysql . error is :" . $mysqli->errno . PHP_EOL;
    
}else{
    echo "successfully connected to mysql" . PHP_EOL;
}


//set characters for showing persian properly
$mysqli->set_charset('utf8');


// ?for analyze mysql connection error
// print_r($mysqli);
// var_dump($mysqli);