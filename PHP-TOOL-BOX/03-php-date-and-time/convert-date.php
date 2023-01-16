<?php
// jdf.php (jaf.ir) convert gregorian to jalali calender
include "jdf.php";
include 'helper.php';


//function to show array
function A($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


// return calaender in array
var_dump(gregorian_to_jalali(2023,01,15,"-"));



A(gregorian_to_jalali(2023,01,15, "/"));

//show the date as a string
echo(gregorian_to_jalali(2022,11,03 ,"-"));
echo "<hr>";


//read jdf help file for instruction
echo jdate('Y/m/d');
echo "<br>";
echo jdate('Y-m-d');
echo "<br>";


//show date and time
echo jdate("Y/m/d  H:i:s");
echo "<hr>";

$date = "2020-02-02 12:32:27";

//conver $date to jalali calander
echo date_To_Jalali($date);

