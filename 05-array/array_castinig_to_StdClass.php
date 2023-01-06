<?php
// baraye tabdile 1 array be stdClass dar php chand ravesh vojood darad : 

$array = array(

    "user1" => [
        "name" => [
            "firstName" => "ali",
            "lastName" => "shabanzade",

        ],

        "email" => "shabanzade.ali@gmail.com",
        "age" => 47
    ],

    "user2" => [
        "name" => "mohsen",
        "email" => "mohsen@gmail.com",
        "age" => 60
    ]

);

var_dump($array);
echo "<hr>";
// raveshe aval direct casting php array to php object (stdClass) . in this way castisg are just for super array 
$array_direct_casting_to_stdClass = (object) $array;
var_dump($array_direct_casting_to_stdClass);
echo "<hr>";

// raveshe 2 direct casting + edit array

$array2 = array(

   "user1" =>(object) [
            "name" => (object) [ // name is sub array and we shoud cast manualy
            "firstName" => "ali",
            "lastName" => "shabanzade",

          ],

        "email" => "shabanzade.ali@gmail.com",
        "age" => 47
    ],

    "user2" => (object)[
        "name" => "mohsen",
        "email" => "mohsen@gmail.com",
        "age" => 60
    ]

);


echo "<hr>";

$array_direct_casting_and_edit_array_to_object = (object) $array2;
var_dump($array2_direct_casting_and_edit_array_to_object);



