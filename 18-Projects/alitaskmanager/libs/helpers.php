<?php
defined('BASE_PATH') OR die("Permision Denied");

function getCurrentUrl(){

}

function isAjaxRequest(){
   
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
   return true;
       } 
      return false;
}

function site_url($uri = ""){
    return BASE_URL . $uri;
}


function diePage($msg){
    echo "<div  style=' padding: 30px; width: 80%; margin: 5% auto; background: #f9dede; border: 1px solid #cca4a4; color: #c51f1f; border-radius: 5px; font-family: sans-serif;'>$msg</div>";
    die();
}


function message($msg , $cssClass = 'info'){
    echo "<div class='$cssClass' style=' padding: 20px; width: 80%; margin: 10px auto; background: #f9dede; border: 1px solid #cca4a4; color: #c51f1f; border-radius: 5px; font-family: sans-serif;'>$msg</div>";
    
}


function dd($var){
    echo "<pre style='color: #518dfb; background: #fff; position: relative; padding: 10px; border-radius: 5px; border-left: 5px solid orange; margin: 10px; z-index: 999;' >";
    var_dump($var);
    echo "</pre>";
}


function validate_password($password) {
    $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    return preg_match($pattern, $password);
}


function validate_username($username) {
    $pattern = '/^[a-zA-Z0-9_-]{3,20}$/';
    return preg_match($pattern, $username);
}

function redirect($url){
    header("Location: $url");
    // die();
}
