<?php
/*
json structure : json has 2 structure . 1- object  2- Array

object 
          "employee" : {
                         "name"    : "ali",
                         "family"  : shabanzade,
                         "age"     : 47
                        }
 


Array 
           "employee" : [
                           "name"  : "ali",
                           "family" : "shabanzade",
                           "age"  :  47
                        ]


*/

//an associative array 
$employee = array ("ali" => 47 , "vahid" => 45 , "ahmad" => 45 , "mohamad" => 44 );

//encode php array $employee to json
// php The json_encode() function is used to encode a value to JSON format
echo json_encode($employee) . "<hr>";

//an indexed array : object
$color = ["yellow" , "green" , "orang" , "red"];
echo json_encode($color);
echo "<hr>";


// PHP Outputs an object rather than an array when a non-associative array is used
echo json_encode($color , JSON_FORCE_OBJECT);
echo "<hr>";


//decode :

// json array must be in quotation ' '
$employeeJson = '{"ali":47,"vahid":45,"ahmad":45,"mohamad":44}';

// Store JSON data in a PHP variable, and then decode it into a PHP object
//return object stdclass array
var_dump(json_decode($employeeJson));
echo "<hr>";


//Store JSON data in a PHP variable, and then decode it into a PHP associative array
var_dump(json_decode($employeeJson , true));
echo "<hr>";


//save decode of employeeJson in variable as a object 
$employeeDecode = json_decode($employeeJson);
//can call in object call in php
echo $employeeDecode -> ali;
echo "<hr>";


//Loops through object
foreach($employeeDecode as $key => $value){
   echo $key . " => " . $value . "<br>";
  
}


//save employeeJson in variable ad a associative array
$empDecoTrue = json_decode($employeeJson , true);
//can call as a associative array
echo $empDecoTrue["vahid"];
echo "<hr>";


//loops through associative array
foreach($empDecoTrue as $key => $value){
   echo $key . " => " . $value . "<br>";
}





