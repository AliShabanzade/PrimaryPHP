<?php
include_once "01-connection.php";

//delete user . come from user
$user_id = 4;

$sql = "delete from people where id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i",$user_id);
$stmt->execute();

print_r($stmt);


//delete query when the data does not come from the user
$sql_1 = "delete from people where id>15";
$stmt = $mysqli->prepare($sql_1);
$stmt->execute();
print_r($stmt);


//delete query when the data does not come from the user 
$sql_2 = "delete from people where sex = 'f'  ";
if($mysqli->query($sql_2)){
    echo "$mysqli->affected_rows Record successfully deleted" . PHP_EOL;
}else{
    echo "fail to delete " . PHP_EOL;
}
