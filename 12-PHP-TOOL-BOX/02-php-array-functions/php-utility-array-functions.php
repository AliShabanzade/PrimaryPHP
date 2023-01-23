<?php
function A($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>" . "<hr>";
}

$array1 = array("name" => "ali" , "family" => "shabanzade" , "bahman" , "ali", "milad" ,"bennaz" , "farzane"  );

$array2 = [34 , 46 , 75 , 120 , 14 , 22];
$array3 = array("ali" , "hasan" , "vahid" , "pouraj");
$array4 = array("ali" , "hasan" , "vahid"  );




A($array1);

A($array2);

//php Split an array into chunks of two
echo A(array_chunk($array1 ,2));


//php array_merg() Merge two arrays into one array
echo A(array_merge($array1,$array2));


//php array_uique Remove duplicate values from an array
echo A(array_unique($array1));


// php The array_reverse() function returns an array in the reverse order
echo A(array_reverse($array2));


//php Search an array for the value and return its key
echo array_search("ali" , $array1);
echo "<hr>";



//php This function compares the values of two (or more) arrays, and return an array
//  that contains the entries from array1 that are not present in array2 or array3, etc.
A(array_diff($array3,$array4));


$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");
A(array_diff($a1 ,$a2));



//The array_slice() function returns selected parts of an array . can recive 3 parameter
A(array_slice($a1 ,1));
echo "<br>";
A(array_slice($a1 ,1,2));
echo "<br>";
A(array_slice($a1 ,1,2,true));




// The array_splice() function removes selected elements from an array and replaces it with new elements
// array_splice(array, start, length, array)
  
$arr1 = array("10"=>"raghav", "20"=>"ram",  
    "30"=>"laxman","40"=>"aakash"); 
  
$arr2 = array("60"=>"ankita","70"=>"antara","50"=>"ravi"); 
  
echo "The returned array by array_splice: <br>"; 
print_r (array_splice($arr1, 1, 2, $arr2)); 
echo "<hr>"; 
echo "The original  array is modified to: <br>"; 
A($arr1); 


//The array_shift() function removes the first element from an array, and returns the value of the removed element
$arr3 = ["ali" , "mohamad" , "vahid" ];
echo "use array_shift return: " . array_shift($arr3) . "<br><br>";
echo "arr3 after use array_shift :";
A($arr3);


// The array_push() function inserts one or more elements to the end of an array
$arr4 = ["ali" , "vahid" , "amir"];
array_push($arr4 , "mohamad" , "hasan" );
A($arr4);
  
// if echo array_push() return array value number
echo (array_push($arr4));


// The array_pop() function deletes the last element of an array
$arr5 = ["ali", "vahid" , "mohamad", "hasan" , "amir"];
array_pop($arr5);
A($arr5);
// usr echo with array_pop return deleted value
echo (array_pop($arr5));



// The array_fill() function fills an array with values 
// array_fill(index, number, value)
$arr6 = array_fill(5,3,"shabanzade");
A($arr6);



















?>