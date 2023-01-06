<?php
$array_sampel = array(
    "user1" => 
    [ 
        "name" => [
            "firstName" => "ali",
            "lastName" => "shabanzade"
          ],

        "email" => "ali@gmail.com",
        "age"   => 24
    
    ],

    "2" => 
    [ 
        "name" => "mohsen",
        "email" => "mohsen@gmail.com",
        "age"  => 22

    ]
);

print_r($array_sampel);
echo "<hr>";

echo "<br>";
// php array to json object (javascript array)

$php_array_to_json = json_encode($array_sampel);
echo $php_array_to_json;// vaghti 1 php array be json tabdil mishavad mitavan an ra ba dastoore echo chap kard

echo "<hr>";
echo "<br>";
// json object to php array
// json to associative php array
$json_object_to_associative_array_in_php = json_decode($php_array_to_json ,1 );
print_r($json_object_to_associative_array_in_php);
echo "<br><br>";
echo ($array_sampel["user1"]["name"]["firstName"]);
echo "<br>";
echo "<hr>";

// json to non associative php array  OR std class 
$json_object_to_php_non_associtive_array_std_class = json_decode($php_array_to_json);
print_r ($json_object_to_php_non_associtive_array_std_class);
echo "<br><br>";
echo ($json_object_to_php_non_associtive_array_std_class -> user1 -> name -> firstName);
echo "<br><br>";
//if index in std class is a number , so that be in curly bracket {2}
echo ($json_object_to_php_non_associtive_array_std_class -> {2} -> email);

echo "<br><hr>";
echo "<br>";
echo "<hr>";

// Convert php array to php object without change to json:
$php_array_to_php_object_without_json = (object)$array_sampel;

print_r($php_array_to_php_object_without_json);
echo "<br>";
echo "<hr>";
// convert php object to php array :
$php_object_to_php_array_without_json = (array) $php_array_to_php_object_without_json;
print_r($php_object_to_php_array_without_json);
echo "<hr>";





