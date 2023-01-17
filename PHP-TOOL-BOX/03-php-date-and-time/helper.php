<?php

// change gregorian calender to jalali calender
function date_To_Jalali(string $date){
    $array= explode(" " , $date);
    list($year,$month,$day)=explode("-" , $array[0]);
    list($hour,$minute,$second)=explode(":" , $array[1]);
   
    $timestamp1 = mktime($hour,$minute,$second,$month,$day,$year);
    
    return jdate('Y-m-d  H:i:s ', $timestamp1 , '' , 'Asia/Tehran' ,'fa' );
}