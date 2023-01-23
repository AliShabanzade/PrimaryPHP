<?php
include "text.txt";
$a = "shabanzade";
// The is_array() function checks whether a variable is an array or not
echo is_array($a) . "<br>";

$b = array("ali" , "shabanzade" );
echo is_array($b) . "<br>";

$c = true;
// The is_bool() function checks whether a variable is a boolean or not
echo is_bool($c) . "<br>";


$d = null;
// The is_null() function checks whether a variable is NULL or not
echo is_null($d) . "<br>";


$e = 1353;
//php The is_int() function checks whether a variable is of type integer or not
echo is_int($e) . "<br>";
// check whether a variable is of type iteger or not
echo is_integer($e) . "<br>";
// The is_long() function checks whether a variable is of type integer or not
echo is_long($e) . "<br>";

$f = "shabanzade";
// The is_string() function checks whether a variable is of type string or not
echo is_string($f) . "<br>"; 

$g = "ali";
$G = array("ali");
// This function returns true (1) if the variable is iterable, otherwise it returns false/nothing
echo is_iterable($g) . "<br>";
echo is_iterable($G) . "<br>"; // array is iterable


// is_readable — Tells whether a file exists and is readable
echo is_readable("text.txt") . "<br>";

// The is_resource() function will return FALSE if the resource has been closed
echo is_resource("text.txt") . "is_resource . if file closed it means false and return noting if true return 1";
echo "<br>";


$obj = new stdClass();
// The is_object() function checks whether a variable is an object
echo is_object($obj) . "<br>";



/*
Finds whether the given variable is a scalar.

Scalar variables are those containing an int, float, string or bool.
 Types array, object, resource and null are not scalar.
*/
$i = "ali";
echo is_scalar($i) . "<br>";


// intval() Return the integer value of different variables
$j1 = "22";
$j2 = 22;
$j3 = 22.07; 
$j4 = array();
$j5 = array ("ali" , "shabanzade");
echo intval($j1) . " is intval() " . $j1  . "<br>";
echo intval($j2) . " is intval() " . $j2  . "<br>";
echo intval($j3) . " is intval() " . $j3  . "<br>";
echo intval($j4) ."<br>";
echo intval($j5)."<br>";


/*
To serialize data means to convert a value to a sequence of bits,
 so that it can be stored in a file,
 a memory buffer, or transmitted across a network
*/
$data = serialize("shabanzade");
echo "(serialize is :)   " . $data . "<br>";

$unserializData = unserialize($data);
echo "unserialize is : ";
var_dump($unserializData); 



