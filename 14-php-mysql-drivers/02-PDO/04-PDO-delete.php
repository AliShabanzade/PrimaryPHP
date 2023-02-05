<?php
include_once '01-PDO-connection.php';

// $sql =  "delete from people where id = ? ";
// $stmt= $db->prepare($sql);
// $stmt->execute([41]);
// echoLine("deleted rows :"  . $stmt->rowCount() );


$sql2 = "delete from people where id = :id ";
$stmt2 = $db->prepare($sql2);
$stmt2->execute(["id" => 42]);
echoLine("deleted rows : " . $stmt2->rowCount());