<?php
echo "ijade array raveshe 1 ke khode php an ra index gozari mikonad indexed array ";
echo "<hr>";
$array_2bodi_raveshe1 = array (
    array(
        "name" => "ali",
         "email" => "ali@yahoo.com",
         "age" => 25
    ),

    array(
        "name" => "akbar",
        "email" => "akbar@gmail.com",
        "age" => 21
    ),
    array(
        "name" => "mohsen",
        "email" => "mohsen@outlook.com",
        "age" => 31
    )
);

print_r($array_2bodi_raveshe1);
echo "<br>";
var_dump($array_2bodi_raveshe1);
echo "<hr>";
echo "ijade array raveshe 2 ke dar an ma baraye indexha esm entekhab mikonim associated array";
echo "<br>";

$array_2bodi_associated_namgozari_khodeman = array (
    "user1" => [
        "name" => "hamid",
        "email" => "hamid@yahoo.com",
        "age" => 22
    ],

    "user2" => [
        "name" => "saied",
        "email" => "saied@gmail.com",
        "age" => 27

    ],

    "user3" => [
    
        "name" => "hashem",
        "email" => "hashem@outlook.com",
        "age" => 21
    ]
);

print_r($array_2bodi_associated_namgozari_khodeman);
echo "<br>";
var_dump($array_2bodi_associated_namgozari_khodeman);
echo "<br>";
print_r($array_2bodi_associated_namgozari_khodeman["user1"]);
echo "<br>";
echo $array_2bodi_associated_namgozari_khodeman["user2"]["email"];

echo "<hr>";
echo "raveshe 3 ke dar 1 array 3 bodi ijad mikonim : " ;
$array_3bodi_ba_estefade_az_associated_array = array(
  "user1" => 
    [
       "name" => 
               [
                "firstName" => "ALI",
                 "lastName" => "Shabanzade"
               ],
        "email" => "shabanzade.ali@gmail.com",
        "age" => 47
    ],
   "user2" =>
    [
        "name" => 
                [ "firstName" => "Behnaz",
                  "lastName" => "Banifatemi"
                ],
        "email" => "behnaz@gmail.com",
        "age" => 34
    ], 

    "user3" => 
    [
        "name" => 
                [
                   "firstName" => "Vahid",
                   "lastName" => "Abdi"
                ],
        "email" => "vahid@gmail.com",
        "age" => 40
    ]

        
);

echo $array_3bodi_ba_estefade_az_associated_array["user2"]["name"]["firstName"];
echo "<br>";
print_r($array_3bodi_ba_estefade_az_associated_array);
echo "<br>";
var_dump($array_3bodi_ba_estefade_az_associated_array["user3"]);

