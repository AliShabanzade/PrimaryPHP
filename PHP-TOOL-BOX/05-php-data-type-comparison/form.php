<?php

$msg = null;
$errorMsg = false;
$successMsg= false;

if(isset($_POST['submit'] )){
    if(empty($_POST['name']) && empty($POST['email'])){
       $errorMsg = true;
       $msg = "form is empty";
    }else{
        $successMsg = true;
        $msg = "your form sumitedd";
    }
}


?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><form action=""></form></title>
</head>
<body>
    <form action = "" method="POST" >
        <input type = "text" name = 'name' placeholder="name">
        <input type = "text" name = 'email' placeholder="email">
        <input type = "submit" name = 'submit'>

</form>

<?php
if($successMsg){
    echo $msg;
}else{
    echo $errorMsg;
}

?>
    
</body>
</html>


