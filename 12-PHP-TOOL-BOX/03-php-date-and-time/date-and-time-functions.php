<?php

// php The date() function formats a local date and time, and returns the formatted date string
date_default_timezone_set("Asia/Tehran");
echo date('y/m/d');
echo "<br>";
echo date("Y-M-D");
echo "<br>";
echo date('l') . " ";
echo date('L');

echo "<hr>";

// hours : minute : seconds am/pm
echo date("h:i:sa");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("y-m-d / H:i:s");
echo "<hr>";


// Return the current time as a Unix timestamp, then format it to a date . query from database
$time = time();
echo date("y-m-d / H:i:s" , $time);

//get timestamp for specific time
$mkTime = mktime(12,42,33,6,12,2016);
echo "<hr>";

//The strtotime() function parses an English textual datetime into a Unix timestamp
$strtotime = strtotime("12:50:33 july 20 2018");
echo $strtotime;
echo "<br>";

//show timestamp to the normal time
echo date("y-m-d / H:i:s" , $strtotime);
echo "<br>";


//strtotime can recive string
$strtotime2 = strtotime("tomorrow");
echo $strtotime2;


// Return the current Unix timestamp with microseconds
echo microtime();