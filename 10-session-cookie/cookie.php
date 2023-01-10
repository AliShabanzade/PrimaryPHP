<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
</head>
<body>

<?php
// setcookie(name , value , expire , path , domain , secure , httponly)
$cookieName = "user";
$cookieValue = "Ali";
setcookie($cookieName , $cookieValue , time() + 86400 , "/" );
?>

<?php

//check if cookie set or not
if(!isset($_COOKIE[$cookieName])){
    echo "cookie name '" . $cookieName . "' is not set";
}else{
    echo "cookie '" . $cookieName . "' is set<br>";

}

echo "<hr>";

//check if there is any cookie 
if(count($_COOKIE) > 0){
    echo "cookie already exist";
}else {
    echo "there is no cookie";
}

?>
    
</body>
</html>
