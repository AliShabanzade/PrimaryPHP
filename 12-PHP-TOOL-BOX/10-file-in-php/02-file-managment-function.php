<?php
$dirPath1 = "test-directory/logs.txt";
$dirPath2 = "test-directory";


// The filesize() function returns the size of a file
echo filesize($dirPath1) . "<hr>";

// The filetype() function returns the file type of a file
echo filetype($dirPath1). "<hr>";
echo filetype($dirPath2). "<hr>";

// >> ONLY WORK ON LINUX <<  The chown() function changes the owner of the specified file 
chown($dirPath1 , 'root');

// >> ONLY WORK ON LINUX <<  The chgrp() function changes the usergroup of the specified file
chgrp($dirPath1 , 'root');

//>> ONLY WORK ON LINUX <<   The chmod() function changes permissions of the specified file
chmod($dirPath1 , 7072);


// The glob() function returns an array of filenames or directories matching a specified pattern
$list = glob('*.*');
var_dump($list);
echo "<hr>";

//search any php file in same directory
var_dump(glob('*.php'));
echo "<hr>";

// go to directory and search any .txt format file
var_dump(glob('*/*.txt'));
echo "<hr>";

// search directory / directory  any .txt file
var_dump(glob('*/*/*.txt'));
echo "<hr>";


// return any file that began with 0
var_dump(glob('0*'));
echo "<hr>";

//search google for :  pattern for glob function in php 
// ? it means should have 2 character
var_dump(glob('x?.*'));
