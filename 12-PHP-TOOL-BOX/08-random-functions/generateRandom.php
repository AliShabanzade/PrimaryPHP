<?php 
function generateRandomString(string $length) :string {
    // Selected characters
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_-<>\/";
    // Get the length of the selected character string
    $charsLength = strlen($chars);
    // A variable in which the random string is stored
    $randomString = '';
    for($i = 0; $i<$length; $i++){
        // It selects one character each time and connects it to the previous characters
        $randomString .= $chars[rand(0 , $charsLength - 1)];
        
    }
    return $randomString;

}

echo generateRandomString(10);
