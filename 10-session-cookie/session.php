<?php
//this command start session and should be in first line of script
session_start();

//check if session started
if(!isset($_SESSION['counter'])){
    // 1 = means set the session
    $_SESSION['counter'] = 1;
}else{
    //if session started befor session ++
    $_SESSION['counter'] += 1;
}

$msg = "You have viseted this page" . $_SESSION['counter'];
 
echo $msg;
 
// to clear the session
session_unset();

// to destroy any sessions
session_destroy();


var_dump($_SESSION['counter']);