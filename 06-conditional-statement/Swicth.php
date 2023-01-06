<?php 
//this script get the day of the week from system and compare with witch case and print the day 
$dayOfTheWeek =strtolower(date('l'));
// echo $dayOfTheWeek;
echo "<br>";

// exit();
switch($dayOfTheWeek){
    case "saturday" :
        echo "شنبه" ;
        break;
    case "sunday" :
        echo "یکشنبه";
        break;
    case "monday" : 
        echo "دوشنبه";
        break;
    case "tuesday" :
        echo "سه شنبه";
        break;
    case "wedensday" :
        echo "چهارشنبه";
        break;
    case "thursday" :
        echo "پنجشنبه";
        break; 
    case "friday" :
        echo "جمعه";
        break;
    default :
        echo "هیچ موردی یافت نشد";

    
}