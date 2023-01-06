<?php
//for loop incerment

for($counter =0; $counter<=10; $counter++){
    echo "<span style = 'color: #fff; background-color : red; padding: 2pxl;'> $counter </span><br>";
}

echo "<hr>";

// for loop decrement
for($counter = 10; $counter>=0; $counter-- ){
    
    echo "<span style = 'color: #fff; background-color : blue; padding: 2pxl;'> $counter </span><br>";
}

echo "<hr>";

$array_users = array(["ali",47],["behnaz" , 35],["vahid" , 45], ["amir" , 27]);// indexed array

print_r($array_users);
echo "<hr>";

$size_of_arrays = sizeof($array_users);// this function gives array length like array.length in java


print_r($size_of_arrays);
echo "<hr>";

for($counter =0; $counter<sizeof($array_users); $counter++ ){
    echo "name : {$array_users[$counter][0]} age : {$array_users[$counter][1] }<br>";
}