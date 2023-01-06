<?php
// define std object in php :

$car1 = new stdClass;
$car1 -> name = "Benz";
$car1 -> model = 2022;
$car1 -> gear = "auto";
print_r($car1);
echo "<br>";
// access $car1 index with print_r()
print_r($car1 -> model);
echo "<br>";
// access $car1 index with echo
echo ($car1 -> gear);
echo "<br><hr><br>";

// assign car1 to car1_1
$car1_1 = $car1;
print_r($car1_1);
echo "<br>";
// call by refrence
$car1_1 -> name = "Toyota"; // name of $car1 & $car1_1 change to Toyota . this is call by refrence
echo ($car1_1 -> name);
echo "<br>";
echo ($car1 -> name);
$car1_2 = $car1_1;
$car1_2 -> name = "pride";
echo "<br>";
echo ($car1_2 -> name);
echo "<br>";
echo ($car1_1 -> name);
echo "<br>";
echo ($car1 -> name);


echo "<br><hr><hr><br>";

// call by value 
$car2 = new stdClass;
$car2 -> name = "BMW";
$car2 -> model = 2020;
$car2 -> gear = "manual";
var_dump($car2); 
echo "<br>";

$car2_1 = clone $car2;//for  call by value and assign defrent memory . 
var_dump($car2_1);
echo "<br>";

$car2_1 -> name = "Suzuki";// name of $car2 & $car2_1 are defrent . 
echo ($car2_1 -> name);

echo "<br>";
echo ($car2 ->name);
echo "<br>";

$car2_2 = clone $car2;// call by value 
var_dump($car2_2);
echo "<br>";

$car2_2 -> name = "Ford";// the name of $car2 & $car2_1 &  $car2_2 are defrent
echo ($car2_2 -> name);
echo "<br>";
echo ($car2_1 -> name);
echo "<br>";
echo ($car2 -> name );

echo "<hr>";

echo "hamishe assocciated array ra be Object tabdil konid chon agar indexed array ra be object tabdil konid momken ast
 dar zaman tabdil indexha ba khata rooberoo shavand . BESIYAR MOHEM AST";
 ?>
















