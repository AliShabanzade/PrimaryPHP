<?php

// stripos() Find the position of the first occurrence of "php" inside the string:
echo stripos("ali shabanzade is a is a programer" , "is");
echo "<hr>";

// strpos() is case sensitive and Find the position of the first occurrence of "php" inside the string:
echo strpos("ali shabanzade is a Is a programer" ,"Is");    
echo "<hr>";

// STRING SECURITY :
// Calculate the MD5 hash of the string (encryption for security):
$str = "ali shabanzade";
echo md5($str);
echo "<hr>";


//htmlentities() Function Convert some characters to HTML entities:
$str2 = '<a href = "https"//www.7learn.com.com">سون لرن</a>';

echo $str2;
echo "<hr>";
echo htmlentities($str2);
echo "<hr>";

//html_etity_decode() decode htmlentities()
$str3 = "&lt;a href = &quot;https&quot;//www.7learn.com.com&quot;&gt;سون لرن&lt;/a&gt";
echo html_entity_decode($str3);
echo "<hr>";
echo "<br>";


//Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities
$str4 = '<a href = "https"//www.7learn.com.com">سون لرن</a>';
echo htmlspecialchars($str4);
echo "<hr>";


// This function is the opposite of htmlspecialchars(). It converts special HTML entities back to characters
echo htmlspecialchars_decode($str4);
echo "<hr>";


//Strip the string from HTML tags:
$str5 = "ali shabanzade is <b>A programer</b>  ";
echo $str5;
echo "<br>";
echo strip_tags($str5);