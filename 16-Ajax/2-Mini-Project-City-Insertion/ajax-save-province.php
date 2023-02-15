<?php
sleep(1);

function getMessageAndDie($text , $class= 'success'){
    echo "<span class='$class'>$text</span>";
    die();
}
$province = $_POST['province'];


if(strlen($province) < 3){
    getMessageAndDie("اسم استان جدید باید حداقل ۳ حرف داشته باشد" , "error");
}

$mysqli = new mysqli("localhost" , "root" , "" , "iran");

if($mysqli->connect_errno){
    getMessageAndDie("Failed to connect to MySQL" . $mysqli->connect_errno , "error");
}

$mysqli->set_charset("utf8");

$sql="INSERT INTO province(name) VALUE(?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s',$province);
$stmt->execute();
$stmt->close();

getMessageAndDie("نام استان $province  با موفقیت ثبت گردید",'success');

