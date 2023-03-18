<?php

include "bootstrap/init.php";

$home_url= site_url('index.php');
$login_url= site_url('auth.php');
// check that request method is POST or not
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // check that action is login or register action come from html url
    $action = $_GET['action'];
    //save $_post array in a variable
    $params = $_POST;
    
    if($action == 'register'){
      if(!validate_username($params['name'])){
        message("Error : Your Name is Invalid . 
        A Valid Name Contains a-z , A-Z , 0-9 , (- _ ) , bettween 3 and 20 characters
        <a href='$login_url'>Please Enter a VALID Name</a>" , 'success');
        die();

      }


      if(!validate_password($params['password'])){
        message("Error : Your Password is not Valid .
        Valid Password Should 
        Contains at least one lowercase letter,
        one uppercase letter,
        one number,
        and one special character from @$!%*?& .<br><br>
        <a href='$login_url'>Please input a valid Password</a>" , 'success');
        die();
      }

      if(!filter_var($params['email'] , FILTER_VALIDATE_EMAIL)){
        message("Error : Your Email is Invalid 
        <a href='$login_url'>Please Enter a VALID Email</a>" , 'success');
        die();
       
      }
     
        $result = register($params);
          if(!$result){
            message("Error : an error in Registration occured!");
          }else{
            message("Registration is Successful . Welcome to alitaskmanager .<br>
            <a href='$login_url'>Please LogIn</a>" , 'success');
          }
    }else if($action == 'login'){
        
        $result = login($params['email'] , $params['password']);
        if(!$result){
          message("Error : email or password is Incorrect! . <br><a href='$login_url'>Please Try Again</a>" );
        } else{
          redirect($home_url);
          // message("You are Logged In.<br>
          // <a href='$home_url'>Please Manage Your Tasks</a>" , 'success');
         
        }
       
    
    }
    
}

include 'tpl/tpl-auth.php';