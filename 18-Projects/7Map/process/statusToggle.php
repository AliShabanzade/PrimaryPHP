<?php
include '../bootstrap/init.php';

if(!isAjaxRequest()){
    diePage("Invalid Request");
}

if(is_null($_POST) &&  !is_numeric($_POST)){
    echo "Invalid Request";
    die();
}

echo toggleStatus($_POST['loc']);