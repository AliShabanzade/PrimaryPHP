<?php
include  '../bootstrap/init.php';

usleep(500000);

if(!isAjaxRequest()){
    diePage("Invalid Request");
}

$keyword = $_POST['keyword'];
if(!isset($keyword) ||  empty($keyword)){
    die("نتیجه ای یافت نشد...");
}

//The getLocations() function expects an associative array as its argument key-value
$locations = getLocations(['keyword' => $keyword]);

if(sizeof($locations) == 0){
    die("نتیجه ای یافت نشد...");
}

// Getting information from the database and looping over them with PHP
// but better sulotion is send header content type json and echo json_encode($location)
foreach($locations as $loc){
    echo "<a href='" . BASE_URL ."?loc=$loc->id'><div class='result-item' data-lat='$loc->lat' data-lng='$loc->lng' data-loc='$loc->id'>
    <span class='loc-type'>". locationTypes[$loc->type] ."</span>
    <span class='loc-title'>$loc->title</span>
    </div></a>";
}

   