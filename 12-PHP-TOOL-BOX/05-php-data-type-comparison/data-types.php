<?php
$a = '10';
echo gettype($a) . "<br>";
$b = 6.7;
echo gettype($b) . "<br>";
$c = array();
echo gettype($c) . "<br>";
$d = "shabanzade";
echo gettype($d) . "<br>";
$e = 10;
echo gettype($e) . "<br>";
$f = array("ali" , "shabanzade" , "vahid");
echo gettype($f) . "<br>";
$g = null;
echo gettype($g) . "<br>";
$h = '';
echo gettype($h) . "<br>";
$i = new stdClass;
echo gettype($i) . "<br>";
$j = tmpfile();
echo gettype($j) . "<br>";
$k = true;
echo gettype($k) . "<br>";
echo "<hr>";


//this function check that variable is empty or not
function is_empty($value){
    if(empty($value)){
        var_dump($value);
        echo "= true =  empty";
    }else{
        var_dump($value);
        echo "= false = not empty";
    }
    echo "<br>";
}


//call is empty and pass varius value
is_empty($a);
is_empty($b);
is_empty($c);
is_empty($d);
is_empty($e);
is_empty($f);
is_empty($g);
is_empty($h);
is_empty($i);
is_empty($j);
is_empty($k);

echo "<hr>";



//is_set function check that the variable have been set or not 
function is_set($value){
    if(isset($value)){
        var_dump($value);
        echo " = true = the variable is set";
    }else{
        var_dump($value);
        echo " = false = the variable is not set";

    }echo "<br>";
}


//call is_set function to check variable 
is_set($a);
is_set($b);
is_set($c);
is_set($d);
is_set($e);
is_set($f);
is_set($g);
is_set($h);
is_set($i);
is_set($j);
is_set($k);
