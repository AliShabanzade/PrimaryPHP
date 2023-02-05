<?php
include_once "01-PDO-connection.php";





function echoPeople($row){
   
    echo implode("-", (array)$row) . PHP_EOL;
}

function echoPeoples($rows){
    foreach($rows as $row){
        echoPeople($row);
    }
    echo PHP_EOL;
}


// $sql = "select * from people where age < 36";
// $stmt = $db->prepare($sql);
// $stmt->execute();



// echoline("------------------fecthAll()------------------------");
// $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
// echoPeoples($rows);


// echoLine("----------------------fetch()------------------------------");
// while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//    echoLine("$row->fullName : $row->age");
// }


echoLine("------------------get single row-------------------------------");
$sql2 = "select * from people where id = 29";
$stmt2 = $db->prepare($sql2);
$stmt2->execute();
$user29 = $stmt2->fetch(PDO::FETCH_OBJ);
echoLine("$user29->fullName  $user29->age");




  














