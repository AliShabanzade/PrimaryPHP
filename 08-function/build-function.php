<?php

/*
A function is a block of statments that can be used
repeatedly in a program.
A funcrion  will not execute automatically when a page loads.
A function wil be executed by a call to the function.

function funName(){
    code to be executed;
}

*/

function printMsg(){
    // echo "Hello World"; its better to not use echo or print_r or var_dump in functions.
    return "Hello World in function";
}


echo printMsg();

echo "<br><hr>";

// call function and pass the argument
function doLogIn($userEmail){
    return "your are loged in and your email $userEmail";
}

// function can call by echo 
echo doLogIn("shabanzade.ali@gmail.com");
echo "<br>";

//create function with tow parametr
function do_LogIn_Whith_Tow_Parameter( $userName , $pass ){
    return "your user name is : $userName and your paa is $pass";

}

echo do_LogIn_Whith_Tow_Parameter("ali" , 1234);

echo "<br>";

//create function with null parameter
function function_with_null_Parameter($userName , $pass = null){

    return "your user name is $userName and your pass is $pass ";

}

echo function_with_null_Parameter("ali");

echo "<br>";

//create function with int parameter and null
function sum($x = 5 , $y = 10 , $z = null){
    return $x + $y + $z;
}

//call sum function without argument
echo sum();

echo "<br>";

//call sum function with argument
echo sum(10,20,30);

echo "<br>";

//   sumOfAll function plus unknown numbers.  
function sumOfAll(){
    // func_get_args return all of function argument Automaticly
    $args = func_get_args();
    //array_sum return total number of array value numbers
    return array_sum($args);
}

//call sumOfAll and pass the argument
var_dump(sumOfAll(10,10,30,50));

echo "<br>";

echo sumOfAll(1,2,3,4,5,6,);

echo "<br>";

//from php 5.6 later we can use this syntax for unknown parameter for function
function sumOfAll_With_Unknown_parameter(...$parameter){
    return array_sum($parameter);
}

echo sumOfAll_With_Unknown_parameter(10,20,30);



