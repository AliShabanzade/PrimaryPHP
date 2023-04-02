<?php    

include "../bootstrap/init.php";

// check is ajax request
if(!isAjaxRequest()){
    diePage("invalid request");
}

//request is ajax and ok
// var_dump($_POST);
if(insertLocation($_POST)){
    echo "مکان جدید با موفقیت در پایگاه داده ثبت شدو منتظر تایید مدیر است";

}else{
    echo "مشکلی در ثبت مکان پیش آمده است"; 
}