<?php
include "bootstrap/init.php";

if(isset($_GET['logout']) and $_GET['logout'] == 1){
   logout();
}


//Checks if the form(post method in html form) has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){

   if(!login($_POST['username'] , $_POST['password'])){
      message("نام کاربری یا رمز عبور اشتباه است");
   }
}


 if(isLoggedIn()){
    include "tpl/tpl-adm.php";
 }else{
    include "tpl/tpl-adm-form.php";
 }

