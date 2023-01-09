<?php

// this function recive string and sen upper or lower case
function name(string $input_string = null)
{
    //array for have lower or upper case
    $arrayForReturn = array(
        "lowerCase" => strtolower($input_string),
        "upperCase" => strtoupper($input_string)
    );
    // output array
    return $arrayForReturn;
}

print_r(name("ALI SHabanzade"));
$assignTo_name = name("ALI Shabanzade");
echo "<br>";
echo $assignTo_name["lowerCase"];
echo "<br>";
echo $assignTo_name['upperCase'];


echo "<hr>";


// anonymuos function --- The above structure is again implemented with anonymous functions

function string(string $input_word = null, $anonymous)
{

    $words  = array(
        "lower" => strtolower($input_word),
        "upper" => strtoupper($input_word)
    );

    if (is_callable($anonymous)) {
        call_user_func($anonymous, $words);
    } else {
        echo "it s not callable function";
    }
}


string(
    "ali shabanzade",
    function ($name) {
        echo $name["lower"] . "<br>";
        echo $name["upper"] . "<br>";
    }
);

// anonymous function don t have name 
$anonymous_function = function ($text) {
    return $text . "<br>";
}; //should end by ;

echo $anonymous_function("call anonymous function");




// anonymous functions can read global variable with use(variable)
$number = 1000;
$multiply = function (int $reciveNum = null) use ($number) {
    return $reciveNum * $number;
};

echo $multiply(5) . "<hr>";



//anonymous function can use as callable function 

$arrayNumber = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//The array_map() function sends each value of an array to a user-made function, 
// and returns an array with new values, given by the user-made function.
array_map(function ($num) {
    echo $num * $num * $num . "<br>";
}, $arrayNumber);
