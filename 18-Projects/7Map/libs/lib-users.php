<?php

function isLoggedIn()
{
    //return true if session is set
    return isset($_SESSION['login']);
}

//check username and pass , then set session 
function login($username , $password)
{
    //admins array in config file
    global $admins;
    
    
    // The array_key_exists() function checks an array for a specified key, and returns true if the key exists
    if (
        array_key_exists($username, $admins) and
        // admins[username] is the username and also the password key in the admins array
        // $admins[$username] == $password
        //password_verify — Verifies that a password matches a hash
        password_verify($password , $admins[$username])
    ) {
        $_SESSION['login'] = 1;
        return true;
    }else{
        return false;
    }

   
}





function logout()
{
    //unset clear session and logout user
    unset($_SESSION['login']);
}
