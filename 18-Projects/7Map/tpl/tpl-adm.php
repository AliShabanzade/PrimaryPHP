<?php
use Hekmatinasser\Verta\Verta;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Map Panel</title>
    <link href="favicon.png" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" href="assets/css/styles.css<?="?v=" . rand(99, 9999999)?>" />
    <style>
    body{
        background:#f2f2f2;
    }
    a{
        text-decoration: none;
    }
    h1{
        text-align: center;
    }

    .main-panel{
        width:1000px;
        margin:30px auto;
    }
    .box {
        background: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        box-shadow: 0px 3px 3px #EEE;
        margin-bottom: 20px;
    }
    table.tabe-locations {
        width: 100%;
        border-collapse: collapse;
    }
    .statusToggle {
        background: #9e9e9e4a;
        color: #686868;
        border: 0;
        text-align: center;
        min-width: 70px;
        padding: 3px 12px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 13px;
        font-weight: 400;
        font-family: iransans;
        display:inline-block;
        margin:0 3px;
    }
    .statusToggle.active {
        background: #0c8f10;
        color: #ffffff;
    }

    .statusToggle.all {
        background: #007bec;
        color: #ffffff;
    }
    .statusToggle:hover,button.preview:hover {
        opacity: 0.7;
    }
    button.preview {
        padding: 0 10px;
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }
    tr {
        line-height: 36px;
    }
    tr:nth-child(2n) {
        background:#f7f7f7;
    }
    td{
        padding:0 5px;
    }
    iframe#mapWivdow {
        width: 100%;
        height: 500px;
    }
    .text-center{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="main-panel">
        <h1>پنل مدیریت <span style="color:#007bec">سون مپ</span></h1>
        <div class="box">
            <a class="statusToggle" href="<?=BASE_URL?>" target="_blank">🏠</a>
            <a class="statusToggle all" href="<?= BASE_URL ?>adm.php">همه</a>
            <a class="statusToggle active" href="?verified=1">تائيد</a>
            <a class="statusToggle" href="?verified=0">تائید نشده</a>
            <a class="statusToggle" href="?logout=1" style="float:left">خروج</a>
        </div>
        <div class="box">
        <table class="tabe-locations">
        <thead>
        <tr>
        <th style="width:40%">عنوان مکان</th>
        <th style="width:15%" class="text-center">تاریخ ثبت</th>
        <th style="width:10%" class="text-center">lat</th>
        <th style="width:10%" class="text-center">lng</th>
        <th style="width:25%">وضعیت</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($locations as $loc) : ?>
        <tr>
            <td><?= $loc->title ?></td>
            <td class="text-center"><?= Verta::instance($loc->created_at)->format('%d %B %Y');  ?></td>
            <td class="text-center"><?= $loc->lat ?></td>
            <td class="text-center"><?= $loc->lng ?></td>
            <td>
            <!-- The data-* attribute is used to store custom data private to the page or application -->
                <button class="statusToggle <?= $loc->verified ? 'active' : '' ?>" data-loc='<?= $loc->id ?>'>تائید</button> 
                
                <button class="preview" data-loc='<?= $loc->id ?>'>👁️‍🗨️</button> 
            </td>
        </tr>
<?php endforeach; ?>        
        </tbody>
        </table>
        </div>

    </div>

    <div class="modal-overlay" style="display: none;">
        <div class="modal">
            <span class="close">x</span>
            <div class="modal-content">
            <!-- <iframe> tag is an HTML element used to embed a separate HTML document into the current pag
                 -->
                <iframe id='mapWivdow' src="#" frameborder="0"></iframe>
            </div>
        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.preview').click(function() {
            //If click on preview tag, it will ignore display none and open the modal
            $('.modal-overlay').fadeIn();
            // The attr() method sets or returns attributes and values of the selected elements
            // in this case set location id to data-loc attribute to print in URL
            // $(this) is a keyword in jQuery that refers to the current element that's being acted
            $('#mapWivdow').attr('src','<?=BASE_URL?>?loc=' + $(this).attr('data-loc'));
        });
        $('.modal-overlay .close').click(function() {
            $('.modal-overlay').fadeOut();
        });
    });


    $('.statusToggle').click(function(){
        const btn = $(this);

        $.ajax({
           url : '<?= BASE_URL . 'process/statusToggle.php' ?> ',
           method : 'POST',
           data : {loc: btn.attr('data-loc')},
           success: function (response){
            // Toggle between adding and removing the 'active' class name
              btn.toggleClass('active');
           }
        });
    });
    </script>
</body>
</html>
