<?php
// we can assign index for arrays
$capital_Of_Cuntery = array("iran" => "tehran" , "germany" => "berlin" , "japan" => "tokyo" , "unitedState" => "whashigton");
print_r($capital_Of_Cuntery);
echo "<br>";
echo $capital_Of_Cuntery["germany"];
echo "<br>";
echo $capital_Of_Cuntery["iran"];
echo "<br>";
$age_name = ["ali" => 40 , "behnaz" =>20 , "amir" => 23];
print_r("amir");
echo "<br>";
$mix_array = array("ali" => 20 , "behnaz" => 15 , 34 , 16);//  indexed and associated array toghader. just for php
print_r($mix_array);

echo '<br>';
$override_in_array = array("ali" => 20 , "behnaz" => 15 , "ali" => 36 );// override shodane index hamnam
print_r($override_in_array);
echo "<br>";
var_dump($override_in_array);
echo $override_in_array["ali"];

