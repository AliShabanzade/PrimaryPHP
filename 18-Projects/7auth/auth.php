<?php
require "bootstrap/init.php";

var_dump($_POST);

if(isset($_GET['action']) && $_GET['action'] == 'register'){
    
    include 'tpl/register-tpl.php';
    
    
}else{
    include 'tpl/login-tpl.php';
}