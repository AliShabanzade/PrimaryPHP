<?php
include "vendor/autoload.php";

$faker = Faker\Factory::create();


$sql = $faker->name ."<br>" . $faker->email ."<br>" . $faker->address . "<br>" . $faker->postcode;
echo $sql;
