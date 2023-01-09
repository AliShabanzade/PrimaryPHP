<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET Method</title>
</head>

<body>
  
  <?php
  if(!empty($_GET["firstName"]) || !empty($_GET["age"])){
    echo "خوش آمدید" . $_GET["firstName"] ."<br>";
    echo "شما با ایمیل " . $_GET["age"] . "وارد شده اید";
  }else{
    echo "فیلد های مورد نظر را کامل کنید";
  }

  
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="GET">
    <label for="">نام
      <input type="text" name="firstName" placeholder="نام شما..">

    </Label>
    <lable for="">سن شما
      <input type="text" name="age" placeholder="سن شما...">
      </Lablel>
      <input type="submit" value="ارسال">

  </form>

</body>

</html>