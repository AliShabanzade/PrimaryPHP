<?php
// It prints arrays in various pridefine functions 
function A($value){
    echo '<pre>';
    print_r($value);
    echo '</pre><hr>';
}


$arr1 = array("name" => "ali" , "shabanzade" , "programer");



// The count() function returns the number of elements in an array
echo count($arr1);
echo "<hr>";


// The sizeof() function returns the number of elements in an array. 
echo sizeof($arr1);
echo "<hr>";

//The array_keys() function returns an array containing the keys
A(array_keys($arr1 , "shabanzade"));


// The array_values() function returns an array containing all the values of an array
A(array_values($arr1));


//checks an array for a specified key, and returns true if the key exists and false if the key does not exis
if(array_key_exists("name" , $arr1)){

    echo "the key exist";

}else{
   echo "the key dose not exist";
}
echo "<br>";
// array key exist in echo return 1 if there is not returns noting
echo array_key_exists("yek" , $arr1);



// in_array — Checks if a value exists in an array
if(in_array("shabanzade" , $arr1)){
    echo "the value exist";
}else{
    echo "the value dose not exist";
}
echo "<hr>";


// is_array Check whether a variable is an array or not
if(is_array($arr1)){
    echo  "it is a array";
}else{
    echo "it s not array";
}
echo "<hr>";


// The shuffle() function randomizes the order of the elements in the array
shuffle($arr1);
A($arr1);


//The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
$studentArray = ["kourosh","esmaiel" , "bahman" ,"mohamad", "ali"];
sort($studentArray);
for( $i=0; $i<sizeof($studentArray); $i++){
      
     echo $studentArray[$i] . "<br>";
} 


// php . Find highest value with the max() function
echo max(1,10,40,5,6,50,55);
$numbers = [1,3,70,35,64];
echo "<br>";
echo max($numbers);
echo "<hr>";



// php Find lowest value with the min() function
echo min($numbers);
echo "<hr>";


// php Output the value of the current and the last element in an array
echo end($numbers);
echo "<hr>";

// php Return the sum of all the values in the array
echo array_sum($numbers);
echo "<hr>";


// php array_rand Return an array of random keys
echo array_rand($studentArray);
echo "<hr>";
echo array_rand($arr1);

echo "<hr>";

//pick random value from a array
$pickValue = array_rand($studentArray);
//echo $studentArray with $pickValue key
echo ($studentArray[$pickValue]);


