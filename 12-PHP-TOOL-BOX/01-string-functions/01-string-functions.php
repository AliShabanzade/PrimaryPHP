<?php
$str = "Ali shabanzade";
$str2 = 1353;


//check that the variable is string? 1 is true
echo is_string($str);
echo "<hr>";

//strlen return length number of string
echo strlen($str) ;
echo "<hr>";

//lcfirst change first character of the word to lower case
echo lcfirst($str); 
echo "<hr>";;

//ucfirst change first character of the word to upper case
echo ucfirst($str);
echo "<hr>";

//ucwords change first character of each word to upper case
echo ucwords($str);
echo "<hr>";

//strtoupper change the word to upper case
echo strtoupper($str);
echo "<hr>";

//strtolower change the word to lower case
echo strtolower($str);
echo "<hr>";

//ltrim recive 2 argoman (the string or string variable , target character) and clear character. space make error
echo ltrim("to ali shabanzade" , "to");
echo "<hr>";

//ltrim use to clear space from string left use for datebase security
echo ltrim("    ali shabanzade");
echo "<hr>";

//rtrim recive 2 argoman (the string or string variable , target character) and clear character . space make error
echo rtrim("Ali shabanzade is" , "is");
echo "<hr>";

//ltrim use to clear space from string right use for datebase security
echo rtrim("ali shabanzade       ");
echo "<hr>";

// trim clear space from left or right of word  use for datebase security
echo trim("   ali shabanzade    ");
echo "<hr>";

//trim clear left or right character of the word base on second argoman.  use for database
echo trim("foAli shabanzadehhis" , "fohis");
echo "<hr>";


//nl2br if put \n after any character , breake the word to new line
echo nl2br("ali\nshabanzade \n programmer");
echo "<hr>";

//number_format format the numbers and have some options
echo number_format(1000000 , 2);





