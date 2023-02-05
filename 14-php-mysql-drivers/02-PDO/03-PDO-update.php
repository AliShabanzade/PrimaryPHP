<?php
include_once '01-PDO-connection.php';

// $sql = "update people set isSingle = 0";
// $stmt = $db->prepare($sql);
// $stmt->execute();


// $sql2 = "update people set isSingle = 1 where id < :id";
// $stmt2 = $db->prepare($sql2);
// $stmt2->execute(["id" => 30]);

// echoLine($stmt2->rowCount());

// $sql3= "update people set isSingle = 0 where age < ?";
// $stmt3 = $db->prepare($sql3);
// $stmt3->execute([40]);
// echoLine($stmt3->rowCount());

$sql4 = "update people set isSingle = :isSingle where id < :id";
$stmt4 = $db->prepare($sql4);
$stmt4->execute([ "isSingle" => 0 , "id" => 10]);
echoLine($stmt4->rowCount());