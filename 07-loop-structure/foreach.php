<?php
//foreach like for 
$array = array(1,2,3,4,5,6,7);
foreach($array as $member){
    echo "$member <br>";

}

echo "<hr>";

foreach($array as $member){
    if($member == 5 || $member == 3){
        continue;// this command breake the loop and ignor 5 , 3
    }
    echo "$member <br>";

}

$users = array(
    "ali" => [
        "role" => "admin",
        "email" => "ali@gmail.com",
        "age" => 47
    ],

    "amir" => [
        "role" => "author",
        "email" => "amir@gmail.com",
        "age" => 27
    ],
    
    "mohsen" => [
        "role" => "editor",
        "email" => "mohsen@gmail.com",
        "age" => 23
    ]
);

// key => value baraye chape arrayeha va maghadire daroone anha ast 
foreach($users as $key => $value){

    echo " $key :  {$value["role"]} email : {$value["email"]} age : {$value["age"]} <br> ";

}

echo "<hr>";

foreach($users as  $user){// user is a name for each index of $users array in one loop
   
    echo " {$user["role"]}  <br> ";
    
}
