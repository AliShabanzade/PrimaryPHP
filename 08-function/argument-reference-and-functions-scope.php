<?php

$num = 5;
//call by value
function test_Call_By_value($num = null)
{
    return $num *= $num;
}
echo $num;
echo "<br>";
echo test_Call_By_value($num);
echo "<br>";
echo $num;
echo "<hr>";

// call by reference
function test_Call_By_Reference(&$num)
{
    return $num *= $num;
}

echo $num;
echo "<br>";
echo test_Call_By_Reference($num);
echo "<br>";
echo $num;
echo "<hr>";


// local variable can call just in functions
function make_Local_variable()
{
    //scope of $massage is just in this function
    $massage = "hello world";
    echo $massage;
}
echo make_Local_variable();
echo "<br>";



//global variable 
$mass = "hello world";
function call_External_Variable_In_Function()
{
    //to call external variable $mass in function we use global/GLOBAL befor $mass
    global $mass;
    echo $mass;
}
echo call_External_Variable_In_Function();
echo "<br>";
$mass = "bye . bye....";
echo $mass;
echo "<hr>";



//functions are dynamic call
function call($name = null)
{
    return "hello $name <br>";
}
//a function can assign to a variable  
$dynamic = "call";
echo $dynamic("Ali Shabanzade");
