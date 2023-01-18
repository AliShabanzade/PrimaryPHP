<?php

// The file_exists() function checks whether a file or directory exists in same directory
echo file_exists('test.txt') . "<hr>";
//in other directory
echo file_exists("test-directory/test-file.php"). "<hr>";


// The is_file() function checks whether the specified filename is a regular file
echo is_file('test-directory') . "<hr>";



// The is_dir() function checks whether the specified filename is a directory 
echo is_dir("test-directory"). "<hr>";



//Checks if the desired directory does not exist , creates it
$dirPath = "test-directory/new-dir";
if(!file_exists($dirPath)){
    // The mkdir() function creates a directory specified by a pathname
    mkdir($dirPath);
    echo "$dirPath created by mkdir() " . "<br>";
}else{
    echo "$dirPath exists befor" . "<hr>";
}



// Checks if the desired directory  exist , deletes it
if(file_exists("test-directory/new-dir/temp.txt")){
    // The unlink() function deletes a file 
    unlink("test-directory/new-dir/temp.txt");
    echo "test-directory/new-dir/temp.txt  deleted". "<br>";
}else{
    echo "test-directory/new-dir/temp.txt dose not exist" . "<hr>";
}



// file address to open or create
$dirPath1 = "test-directory/test2.txt";
// The fopen() function opens a file or URL
$fileOpen = fopen($dirPath1 , 'a+');
// The fwrite() writes to an open file
fwrite($fileOpen, "ali shabanzade");
// The fclose() function closes an open file pointer
fclose($fileOpen);



$dirPath2 = "test-directory/logs.txt";
$writeFile = fopen($dirPath2 , 'a+');
for($i = 1 ; $i<10 ; $i++){
    //PHP_EOL go to new line
    fwrite($writeFile , "ali shabanzade" . PHP_EOL);
}