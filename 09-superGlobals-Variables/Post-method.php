<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>

<body>
    <!-- CSS styles for login form -->
    <style>
        body {
            direction: rtl;
        }

        form {
            width: 300px;
            margin: 0 auto;
            background: #efefef;
            padding: 10px;
            border-radius: 5px;
        }

        input {
            width: 100px;
            height: 30px;
            border-radius: 3px;
            border: none;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background: #2ed573;
            padding: 7px;
            color: #fff;
            font-weight: 700;
        }
    </style>

     <!-- php codes  -->
    <?php
    //check if field is not empty and set any data . 
    if (isset($_POST['submit'])) {
        if (!empty($_POST["firstName"]) && !empty($_POST["email"])) {
            echo "خوش آمدید" . $_POST["firstName"] . "<br>";
            echo "شما با ایمیل " . $_POST["email"] . "وارد شده اید";
        } else {
            echo "فیلد های مورد نظر را کامل کنید";
        }
    }


    ?>
    <!-- make a form with POST method -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="">نام
            <input type="text" name="firstName" placeholder="نام شما..">

        </Label>
        <lable for="">ایمیل شما
            <input type="text" name="email" placeholder="ایمیل شما...">
            </Lablel>
            <input type="submit" name='submit' value="ارسال">

    </form>

</body>

</html>