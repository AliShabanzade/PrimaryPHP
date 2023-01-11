<?php
// The explode method takes a string and breaks it based on the second argument and stores it in an array
$str = "ali , shabanzade , is , a , progrramer";
print_r(explode("," , $str));
echo "<hr>";

//The include method returns an array as a string based on the specified condition
$array = array("hello" , "boutiful" , "programming" , "world");
echo implode(" " , $array);

echo "<hr>";

//Subtracts the specified number of characters from the left side
echo substr("Ali shabanzade" , 4);
echo '<hr>';


// Removes the string before the specified character
echo strstr("hello php world" , "p");
echo '<hr>';


// Replaces the second argument with the first argument during the given string
echo str_replace("world" , "ali" , "hello world !");
echo '<hr>';

// repeat the string base on second string
echo str_repeat("shabanzade" , 7);
echo '<hr>';

// shuffle character of the string
echo str_shuffle("hello world");
echo '<hr>';


// count the word of the string
echo str_word_count("hello world");
echo '<hr>';

// minify the string base on delimiter
$str = "ali/shabanzade/is/a/programer";
$strToken = strtok($str , "/");

while($strToken == true)
{
   echo $strToken . "<br>";
   $strToken = strtok("/");

}


echo '<hr>';

// printf format the string base on %u , %s ...
$age = 47;
$str = "mashhad";
printf("ali is %u years old and live in %s." ,$age , $str);

