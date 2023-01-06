<?php
$num = 32;
if($num < 100){
    echo "$num samller than 100 ";
}else{
    echo " $num is bigger than 100";
}

echo "<br>";


if($num == 100){
    echo " $num is  equal 100 ";
}else{
    echo "$num is not equal 100";
}
echo "<br>";


if($num > 100){
    echo "$num is bigger than 100";
}else{
    echo "$num is not bigger than 100";
}
echo "<br>";


if($num != 100){
    echo " $num is against 100";
}else{
    echo "$num is not against 100";
}
echo "<br>";

$num_2 = 125;

if($num>20 && $num_2>100){
    echo "tow condition are true";
}else{
    echo " condition && is not  true";
}
echo "<br>";


if($num<20 && $num_2>150){
    echo "$num<20 && $num_2>150 ";
}else {
    echo "false";
}

echo "<br>";


if($num>100 || $num_2>100){
    echo "one condition is true in (or condition)";
}else{
    echo " non of condition is not true in (or condition)";
}

echo "<br>";

if($num < 100){
    if($num_2==125){
        echo "nested if is true";
    }
}

echo "<br>";

if($num> 20 ){
    if($num_2 >200){
        echo " nested if is true";
    }else{
        echo " nested if is false";
    }
}

echo "<hr><br>";

$array = array(
    "ali" =>[
        "role" => "author",
        "age" => 47,
        "email" => "ali@gmail.com"
    ],
    "behnaz" => [
        "role" => "admin",
        "age" => 35,
        "email" => "behnaz@gmail.com"
    ],
    "amair" => [
        "role" => "customer",
        "age" => 30,
        "email" => "amir@gmail.com"
        
    ]
);


$array_to_object_with_json = json_decode(json_encode($array));

var_dump($array_to_object_with_json);
echo "<hr>";

if($array_to_object_with_json -> ali -> role == "author"){
    echo "Ali you are author and can write something";
}else{
    echo "you are not author";
}

echo "<br>";

if($array_to_object_with_json -> behnaz -> role == "admin"){
    if($array_to_object_with_json -> behnaz -> email == "behnaz@gmail.com"){
        echo " welcome behnaz . you are site admin ";
    }

}

echo "<br>";
   
if($array_to_object_with_json -> behnaz -> role == "author"){
    echo " you are author in else-if";
}else if($array_to_object_with_json -> behnaz -> email == "behnaz@gmail.com"){
    echo "behnaz your email is true";
}else if ($array_to_object_with_json -> behnaz -> age ==35){
    echo "behnaz your age is 35 ";
}else {
    echo " you aren t site admin ou author ";
}
