<?php
function A($value){
    echo "<pre>";
    print_r($value);
    echo  "</pre>" . "<hr>" ; 
}


function odd(int $value){
    return ($value & 1);
}

function even(int $value){
   return (!($value & 1));
}
echo odd(5);

$arr1 = [1,3, 25, 78, 36, 14, 17, 99, 121,34];


//callback function with odd function return odd number of $arr1
A(array_filter($arr1 , "odd"));

//callback function with even function return even number of $arr1
A(array_filter($arr1 , "even"));




$name = "ali";
$family = "shabanzade";
$age = 47;
// The compact() function creates an array from variables and their values
$arrayMake=(compact("name","family","age"));
A($arrayMake);



$arrayForExtract = array("a" => "benz" , "b" => "bmw" , "c" => "ford");
// The extract() function imports variables into the local symbol table from an array
extract($arrayForExtract);
echo "\$a = $a;"; 
echo "<br>";
echo "\$b = $b";
echo "<br>";
echo "\$c = $c; ";
echo "<br>";

echo $a;

// implode()
// explode()




