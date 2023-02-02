<?php
include_once "01-connection.php";

$sql = "update people set fullname = 'vahid abdi' , sex = 'm' where id=21";

if($mysqli->query($sql)){
    echo $mysqli -> affected_rows  . "records successfully updated" . PHP_EOL;
}else{
    echo "Failed to update";
}




$correction = "behnaz banifatemi"; 
$sql2 = "update people set fullname = ?  where fullname like 'beh%' ";
$stmt = $mysqli -> prepare($sql2);
$stmt -> bind_param('s', $correction);
$stmt -> execute();


$correction2 = "Ali shabanzade";
$sql3 = "update people set fullname = ?  where fullname like 'Ali%' ";
$stmt2 = $mysqli -> prepare($sql3);
$stmt2 -> bind_param('s' , $correction2);
$stmt2 -> execute();





print_r($mysqli);
