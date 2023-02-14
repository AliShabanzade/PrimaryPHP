<?php

//  use define To avoid hard coding
define('FILE_NAME', "ajaxInput.txt");


// get answer from ajax and save to php file
$ajaxData = $_POST['data'];
if(strlen($ajaxData) < 10){
    // Print a message and terminate the current scrip
    die("امکان دخیره فایل برای متن های بالاتر از 10 حرف وجود ندارد.");
}else{
    // The file_put_contents() writes data to a file
    file_put_contents(FILE_NAME , $ajaxData . PHP_EOL , FILE_APPEND);
    // The file_get_contents() reads a file into a string
    $fileContent = file_get_contents(FILE_NAME);
    // The nl2br() function inserts HTML line breaks (<br> or <br />) in front of each newline (\n) in a string
    echo nl2br($fileContent);
    
}


