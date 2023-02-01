<?php
//include mysqli connection set from 01-connection.php
include_once '01-connection.php';


//Defining a query and assigning it to a variable
$sql = " create table people (
    id int primary key auto_increment,
    fullName varchar(256),
    age int unsigned,
    sex enum ('f','m'),
    isSingle boolean default 1
);";



// if create table people , qyery() function return true
if($mysqli->query($sql)){
    
    echo "Table successfully created" . PHP_EOL;
}else{
    echo "table is not created" . PHP_EOL;
}
 

$sql2 = "create table *TABLE* (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    FULLNAME VARCHAR(256),
    AGE INT UNSIGNED,
    SEX ENUM('F','M'),
    ISSINGLE BOOLEAN DEFAULT 1
);";


for($i = 2 ; $i <= 3 ; $i++){
  $table_sql = str_replace("*TABLE*" , "people$i" , $sql2);
  if($mysqli->query($table_sql)){
    echo "table created" . PHP_EOL;
  }else{
    echo "table is not create" . PHP_EOL;
  }
}


//drop query 
// for($i = 2 ; $i <= 3; $i++){
//     $mysqli -> query("drop table people$i");
//     echo "cleare table people$i" . PHP_EOL;
// }