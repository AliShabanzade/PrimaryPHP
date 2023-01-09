<?php
$num = 1353;
$name = ["ali", "shabanzade"];
echo "<pre>";
//super GLOBALS is pridefine array by php 
// var_dump($GLOBALS);
echo "<hr>";

$x = 10;
$y = 20;
// GLOBALS variable can call evry where on the script
function sum()
{
   $GLOBALS["FAMILY"] = 'SHABANZADE';
   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// to access to $z should call sum() one time
sum();
echo $z . "<br>";
// create GLOBALS variable in a function and call out of function
echo $GLOBALS["FAMILY"] . "<br>";
echo $FAMILY . "<hr>";

var_dump($GLOBALS);
echo $x;
echo "<hr><hr><hr><hr>";


//some important $_SERVER arrays
echo  "PHP_SELF : " . $_SERVER['PHP_SELF'];
echo "<hr>";
echo "SERVER_NAME : " . $_SERVER["SERVER_NAME"];
echo "<hr>";
echo "HTTP_HOST : " .  $_SERVER['HTTP_HOST'];
echo "<hr>";
echo "REQUEST_METHOD : " . $_SERVER["REQUEST_METHOD"];
echo "<hr>";
echo "REQUEST_TIME : " . $_SERVER['REQUEST_TIME'];
echo "<hr>";
echo "HTTP_USER_AGENT : " . $_SERVER["HTTP_USER_AGENT"];
echo "<hr>";
echo "SCRIPT_NAME : " . $_SERVER['SCRIPT_NAME'];
echo "<hr>";
echo "QUERY_STRING : " . $_SERVER['QUERY_STRING'];
