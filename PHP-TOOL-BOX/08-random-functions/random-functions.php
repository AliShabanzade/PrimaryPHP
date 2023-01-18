<?php

include 'generateRandom.php';

// The rand() function generates a random integer
echo rand(10 , 100)  . "<br>";
echo rand(10000000 , 100000000). "<br>";
echo rand(). "<br>";

// The mt_rand() function generates a random integer using the Mersenne Twister algorithm
echo mt_rand(100,100000000). "<br>";
echo mt_rand(). "<br>";

// Seed the random number generator seed the random with mktime() function
// echo srand(mktime(22 , 37, 43, 07, 15,2022)). "<br>";


// random_int — Get a cryptographically secure, uniformly selected integer
$a =  random_int(1000,10000);
echo $a . "<be>";
echo gettype($a). "<br>";

echo $rand1 = random_bytes(3) . "<br>";
echo gettype($rand1). "<br>";
// The bin2hex() function converts a string of ASCII characters to hexadecimal values
echo bin2hex($rand1). "<br>";


$rand2 = bin2hex(random_bytes(5));
echo $rand2 . "<br>";



// openssl_random_pseudo_bytes — Generate a pseudo-random string of bytes
/*
This function is not recommended. Because it needs to install a dependency on the host.
 In common projects, the random byte function is sufficient
*/
$rand3 = openssl_random_pseudo_bytes(40);
echo $rand3 . "<br>";
echo bin2hex($rand3) . "<hr>";


//call the function from generate-key-helper.php to generate random string

echo generateRandomString(40);






