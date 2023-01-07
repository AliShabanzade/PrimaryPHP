<?php
// temp_sum plus numbers and need int type 
// function temp_sum($x = null , $y= null )
// {
//  return $x + $y;
// }
// echo temp_sum(20 , "10 days");// exit : erorr + 30 . in this type "10 days" are string(int+char)


//temp2_sum plus numbers and need int type
// function temp2_sum($x = null , $y= null )
// {
//  return $x + $y;
// }
// echo temp2_sum(20 , "10");// exit  30 . in this type "10" is a string type



//declare func must be befor first function . 
// if strict_types=1 means true and functions  can not recive wrong parameter
declare(strict_types = 1);




// sum method plus the numbers and recive int type for parameter . >>hinting<< use for increase processing 
function sum(int $a = 10 , int $b = null){
    
        return $a + $b;
    
    }
echo sum(20+10);
echo "<br>";    


//process countinue because we declare $a is a string type . exit is 60
function sum2(string $a = "10" , int $b = 50){
    return $a + $b;
}

echo sum2();
echo "<hr>";


// defined type like :int  after parameter use for very strict type . and return just defined type
// notic that in very strict external data taype case :dataType come with declare(strict_types = 1)
function sum3 (int $a = null , int $b= null)
:int
{
    return  $a + $b; 
}

echo sum3(40 , 80);
echo "<hr>";



//doLogIn recive string type and external type just string 
function doLogIn(string $a = null , string $b = null)
:string
{
  return $a . '<br>'  .$b;
}
echo DoLogIn("ali" , "12345@#");

//delare strict data type power:
// (int $a , string $b) = **
// just  :int after parameter = ***
//declare(strict_types=1) + (int $a , string $b) = ****
// declare(strict_types=1) + (int $a , int $b) + :int = *****




