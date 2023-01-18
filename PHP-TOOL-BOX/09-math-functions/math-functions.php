<?php
// Downward trend - The round() function rounds a floating-point number
echo round(7.4) . "<hr>";
// upward trend
echo round(7.5) . "<hr>";
// upward trend
echo round(7.6) . "<hr>";


// The ceil() function rounds a number UP to the nearest integer
// upward trend
echo ceil(2.1). "<hr>";
echo ceil(2.9). "<hr>";


// The floor() function rounds a number DOWN to the nearest integer
// Downward trend
echo floor(7.9). "<hr>";
echo floor(7.1). "<hr>";


// The sqrt() function returns the square root of a number
echo sqrt(98). "<hr>";


// The abs() function returns the absolute (positive) value of a number
echo abs(-28). "<hr>";
echo abs(28). "<hr>";


// The min() function returns the lowest value in an array, or the lowest value of several specified values
echo min(5, 1.1 , 1.2 , 53 , 13). "<hr>";


// The max() function returns the highest value in an array, or the highest value of several specified values
echo max(5, 1.0 , 1.2 , 53 , 13). "<hr>";



// The pi() function returns the value of PI
echo pi(). "<hr>";
// Calculate the circumference of a circle with a radius of 10
$c = 2 * pi() * 10;
echo $c . "<hr>";



// The is_finite() function checks whether a value is finite or not
echo is_finite(20). "<hr>";


// The is_infinite() function checks whether a value is infinite or not
echo is_infinite(log(0));