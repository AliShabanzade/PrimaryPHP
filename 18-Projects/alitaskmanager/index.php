<?php
include 'bootstrap/init.php';
// use Hekmatinasser\Verta\Verta;
// $v = new Verta();
// var_dump($v);




if(isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){
    $deletedCount = deleteFolder($_GET['delete_folder']);
    // echo "$deletedCount folders successfully deleted!";
    
}  



$folders = getFolders();









$tasks = getTasks();



include "tpl/tpl-index.php";

//some test