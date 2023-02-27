<?php
include_once '../bootstrap/init.php';

if(!isAjaxRequest()){
diePage("Invalid Request!");
}

if(!isset($_POST['action'])  || empty($_POST['action'])){
    diePage("Invalid Action!");
}
// var_dump($_POST['folderName']);
// var_dump($_POST['action']);
switch($_POST['action']){
    case "addFolder":
        if(!isset($_POST['folderName'])  || strlen($_POST['folderName']) < 3){
            echo "نام فولدر باید بیشتر از سه حرف باشد";
            die();
        }else{
            echo addFolders($_POST['folderName']);
        }
        
    break;

    case "addTask":

    break;

    default:
         diePage("Invalid Action");
}