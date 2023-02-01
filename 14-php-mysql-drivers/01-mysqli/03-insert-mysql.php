<?php
include_once '01-connection.php';
// (sample : get user data from get or post method that saved in $_POST OR $_GET):
$userData = array (
    "fullname" => "Ali Shaba;nzade",
    "age" => 47,
    "sex" => 'm',
    "isSingle" => 0
);


// !unsafe for execute a query Because the type of values is not checked when querying 
// $Sql = "insert into people(fullname,age,sex,isSingle)
// value('{$userData['fullname']}',{$userData['age']},'{$userData['sex']}',{$userData['isSingle']})";

// if($mysqli->query($Sql)){
//     echo "user successfully added" . PHP_EOL;
// }else{
//     echo "can not add user error is : " . $mysqli->error;
// }


// ! very important ** safe query Because at the time of querying, the type of values is controlled and modified by MySQL
$sql= "insert into people (fullname,age,sex,isSingle) value(?,?,?,?)";
$stmt = $mysqli->prepare($sql);
$stmt -> bind_param('sisb',$userData['fullname'],$userData["age"],$userData["sex"], $userData["isSingle"]);
$stmt->execute();
$stmt->close();


// var_dump($stmt);


// function for add user in a safe method
function addUser($userInput){
    global $mysqli;
    // ! very important ** safe query Because at the time of querying, the type of values is controlled and modified by MySQL
    $sql = "insert into people(fullname,age,sex,isSingle) value(?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sisb", $userInput["fullname"],$userInput["age"],$userInput["sex"],$userInput['isSingle']);
    $stmt->execute();
    return $stmt->insert_id;
    //var_dump($mysqli); -- for return any error report
}

//add new user in people table
$user_id= addUser(["fullname" => "behna;z", "age" => 35 , "sex" => 'f' , "isSingle" => 0]);
echo $user_id;
