<?php
include_once '01-PDO-connection.php';

//*insert sql command solution 1 in pdo
// $sql= "INSERT INTO people(fullname,age) VALUES(?,?)";
// $stmt= $db->prepare($sql);
// $stmt->execute(["farzane",35]);

//*insert sql command solution 2 in pdo
// $sql2 = "INSERT INTO people(fullname,age)  VALUE(:fullname, :age)";
// $stmt2 = $db->prepare($sql2);
// $stmt2->execute(["fullname" => "milad" , "age" => 36]);


//* $db lastInsertId shows the last ID added to the database
// echoLine("Last insert ID : " , $db->lastInsertId());


// use PDO insert structure in a loop
// $sql3 = "INSERT INTO people(fullname , age , sex) VALUE (? , ? , ?)";
// $stmt3 = $db->prepare($sql3);
// *list of users to add into database
// $usersToAdd=[
//    ["koorosh" , 40 , 'm'],
//    ['elham' , 38 , 'f'],
//    ['shermine', 14 , 'f'],
//    ['abbas' , 42 , 'm'],
//    ['hadi' , 40 , 'm'],
//    ['nasim' , 39 , 'f']
// ];

// foreach($usersToAdd as $user){
       // *One user is added at a loop
//     $stmt3->execute($user);

// }


$sql4 = "INSERT INTO people(fullname , age , sex ) VALUE (? , ? , ? )";
$stmt4 = $db->prepare($sql4);
$users = [
    ['ferdosi' , 1000 , 'm' ],
    ['changiz' , 800 , 'm' ],
    ['nader' , 300 , 'm' ]
];


/*
  *A transaction in MySQL is a sequential group of statements,
  *queries, or operations such as select, insert, update or delete to
  *perform as a one single work unit that can be committed or rolled back
*/
// $db->beginTransaction();
// foreach($users as $add){
//     $stmt4->execute($add);
//     if($add[0] = "changiz"){
//         exit();
//     }
// }

//* each transaction should end with commit()
//* A COMMIT or ROLLBACK statement ends the current transaction
// $db->commit();

$db->beginTransaction();
foreach($users as $add){
    $stmt4->execute($add);
    //*If the transaction is exited before it is committed,
    // * the transaction will be rolled back
    exit();
}

$db->commit();








