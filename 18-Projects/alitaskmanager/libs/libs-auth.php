<?php
defined('BASE_PATH') OR die("Permision Denied");


// *** Auth Fucnction ***/
function getCurrentUserId(){
    return getLoggedUserInfo()->id ?? null;
}


// get user information from db 
function getUserByEmail($email){
    global $pdo;
    $sql = "SELECT * FROM users WHERE  email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records[0] ?? null;
      

}

function logout(){
    unset($_SESSION['login']);
    
}


function login($email , $pass){
    // get user information from db with getUserByEmail function
    $user = getUserByEmail($email);
   if(is_null($user)){
    return false;
   }

   # check the user Password with password_veryfy $pass come from user and $user-password com from db
   if(password_verify($pass , $user->password)){
     $user->image ="https://www.gravatar.com/avatar/" . md5(strtolower(trim($user->email)));
     $_SESSION['login'] = $user;
     return true;
   }

    return false;

 
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
    return isset($_SESSION['login'])? true :false;
       
    
}


function getLoggedUserInfo(){
    return $_SESSION['login'] ?? null;
}