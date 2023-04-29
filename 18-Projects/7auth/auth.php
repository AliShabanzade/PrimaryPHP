<?php
require "bootstrap/init.php";


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action =  $_GET['action'];
    $params = $_POST;
    var_dump($params);
    if($action == 'register') {
        // validate data
        if(empty($params['name']) || empty($params['email']) || empty($params['phone'])) {
           setErrorAndRedirect('All Input Fields Required' , 'auth.php?action=register');
          
        }
        if(!filter_var($params['email'] , FILTER_VALIDATE_EMAIL)){
            setErrorAndRedirect('Enter the Valid Email Address' , 'auth.php?action=register');
        }
    }
}


if(isset($_GET['action']) && $_GET['action'] == 'register'){
    
    include 'tpl/register-tpl.php';
    
    
}else{
    include 'tpl/login-tpl.php';
}