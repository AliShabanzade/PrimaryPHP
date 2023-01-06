<?php

// while  loop 
$index = 0;
while($index <= 10){
    echo $index . "<br>";
    $index++;
} 

echo "<hr>";
// while loop whit internal break
$shomareshgar=0;
while(true){

    echo $shomareshgar . "<br>";
   
    if($shomareshgar >= 10){
        break;
    }
       
    
    $shomareshgar++;
}

echo "<hr>";

$array_users = array(
    [
        "ali",
        47
    ],
    [
        "behnaz",
        35
    ],
    [
        "vahid",
        45
    ],
    [
        "mohsen",
        34
    ]
);

$counter =0;
while($counter<sizeof($array_users)){

    echo "name : {$array_users[$counter][0]} age : {$array_users[$counter][1]} <br>";
    $counter++;

}
