<?php
defined('BASE_PATH') OR die("Permision Denied");


// *** Auth Fucnction ***/
function getCurrentUserId(){
    return 1;
}


function login($user , $password){
    return 1;
}


function register($userData){
    global $pdo;
    // validate of $userData (isValidEmail , isValidUserName , isValidPassword)
   
    $passHash = password_hash($userData['password'] , PASSWORD_BCRYPT);
    $sql = "INSERT INTO users (name, email , password) VALUES (:name , :email , :pass);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':name' => $userData['name'] , ':email' => $userData['email'] , ':pass' => $passHash]);
    // if($stmt->rowCount()){
    //     return true;
    // }
    // return false;
    return $stmt->rowCount() ? true :false;
}

   

function isLoggedIn(){
    return false;
}