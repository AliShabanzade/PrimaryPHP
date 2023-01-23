<?php
$data1 = array("ali" , "@%ali -%# shabanzade " , 1353);
foreach($data1 as $instance){
    // ctype_alnum — Check for alphanumeric character
    if(ctype_alnum($instance)){
        echo $instance . "- is ctype_alnum variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_alnum variable";
        echo "<br>";
    }
}

echo "<hr>";

$data1 = array("ali" , "@%ali -%# shabanzade " , 1353);
foreach($data1 as $instance){
    // ctype_alpha — Check for alphabetic character
    if(ctype_alpha($instance)){
        echo $instance . "- is ctype_alpha variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_alpha variable";
        echo "<br>";
    }
}

echo "<hr>";

$data2 = array("ali" , "@%ali -%# shabanzade " , 1353 , '\n' , '\t' , "\n" , "\t");
foreach($data2 as $instance){
    // ctype_cntrl — Check for control character
    if(ctype_cntrl($instance)){
        echo $instance . "- is ctype_cntrl (control) variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_cntrl (control) variable";
        echo "<br>";
    }
}

echo "<hr>";

$data2 = array("ali" , "@%ali -%# shabanzade " , 1353 , '\n' , '\t' , "\n" , "\t");
foreach($data2 as $instance){
    // ctype_cntrl — Check for control character
    // -- CONTROL CHARACTER MUST BE IN DOUBLE QUOTATION --
    if(ctype_cntrl($instance)){
        echo $instance . "- is ctype_cntrl (control) variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_cntrl (control) variable";
        echo "<br>";
    }
}

echo "<hr>";

$data3 = array("127" , '220' ,  '12A' , 12.7 , "33.65" );
foreach($data3 as $instance){
    // ctype_digit — Check for numeric character
    if(ctype_digit($instance)){
        echo $instance . "- is ctype_digit  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_digit  variable";
        echo "<br>";
    }
}

echo "<hr>";

$data4 = array("127" , "php" ,  "\n" , "\t" , "A  L  i" , "\r" );
foreach($data4 as $instance){
    // ctype_graph — Check for any printable character(s) except space
    if(ctype_graph($instance)){
        echo $instance . "- is ctype_graph  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_graph variable";
        echo "<br>";
    }
}




echo "<hr>";

$data5 = array("127" , "php" ,  "\n" , "\t" , "A  L  i" , "\r" );
foreach($data5 as $instance){
    // ctype_print — Check for printable character
    // space is printable
    if(ctype_print($instance)){
        echo $instance . "- is ctype_print  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_print variable";
        echo "<br>";
    }
}


echo "<hr>";

$data6 = array("ALI" , "php" ,  "\n" , "\t" , "SHabanzade" , "123" );
foreach($data6 as $instance){

    //ctype_lower — Check for lowercase character
  
    if(ctype_lower($instance)){
        echo $instance . "- is ctype_lower  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_lower variable";
        echo "<br>";
    }
}


echo "<hr>";

$data7 = array("127" , "@php" ,  "\n" , 125 , "  " , "#" , ")");
foreach($data7 as $instance){
    // ctype_punct — Check for any printable character which is not whitespace or an alphanumeric character
    // in php 7 Ascii code aceptable 125 = }
    if(ctype_punct($instance)){
        echo $instance . "- is ctype_punct  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_punct variable";
        echo "<br>";
    }
}


echo "<hr>";

$data8 = array("ali" , "ph p" ,  "\n" , "\t" , " " , "ali" , 125 , "\r" );
foreach($data8 as $instance){
    // ctype_space — Check for whitespace character
    // control character is true
    if(ctype_space($instance)){
        echo $instance . "- is ctype_space  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_space variable";
        echo "<br>";
    }
}



echo "<hr>";

$data9 = array("ALI" , "php" ,  "\n" , "\t" , "SHabanzade" , "123" );
foreach($data9 as $instance){

    //ctype_upper — Check for uppercase character
    // up to php 8 Askii code aceptable 
    if(ctype_upper($instance)){
        echo $instance . "- is ctype_upper  variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_upper variable";
        echo "<br>";
    }
}



echo "<hr>";

$data10 = array("ali" , '220' ,  '12A' , 12.7 , "e67e22" , "9b59b6" );
foreach($data10 as $instance){
    // ctype_xdigit — Check for character(s) representing a hexadecimal digit
    if(ctype_xdigit($instance)){
        echo $instance . "- is ctype_xdigit (hexadecimal) variable";
        echo "<br>";
    }else{
        echo $instance . "- is NOT ctype_xdigit (hexadecimal)  variable";
        echo "<br>";
    }
}

