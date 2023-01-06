<?php
//  dar sakhtare do while ebteda amaliyat anjam mishavad va sepas shar check mishavad 
// dar in sakhtar hade aghal 1 bar amliyate morede nazar anjam mishavad

$index = 0;

do {
    
    echo "<span style = 'color: #fff; background-color : red; padding: 2pxl;'> $index </span><br>";
    $index++;
    
}while($index <=10);

echo "<hr>";
// raveshe 2 ke dar an block break darooni barname ra stop mikonad

$shomarande = 0;
do{
    
    echo "<span style = 'color: #fff; background-color : red; padding: 2pxl;'> $shomarande </span><br>";
    if($shomarande>=10){
        break;// this command break the loop out of do-wile loop
    }
    $shomarande++;
}while(true);