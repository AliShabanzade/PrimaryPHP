<?php

include "vendor/autoload.php";


use Hekmatinasser\Verta\Verta;

echo new Verta() . "<br>";



echo verta('2023-01-15') . "<br>";

echo Verta::parse('1401-10-27 14:12:32');
echo "<br>";

$v= Verta();

echo $v->year;

echo "<br>";

$v = verta(); 
echo $v->setTimeString('12:25:45');


echo "<br>";

echo verta()->format('Y.m.d'); 
echo verta()->formatWord('l dS F'); 


echo "<br>";

echo verta()->startWeek(3); 
 