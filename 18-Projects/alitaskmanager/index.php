<?php
include 'bootstrap/init.php';
// use Hekmatinasser\Verta\Verta;
// $v = new Verta();
// var_dump($v);




if(isset($_GET['delete_folder']) && is_numeric($_GET['delete_folder'])){
    $folderDeletedCount = deleteFolder($_GET['delete_folder']);
    // echo "$folderDeletedCount folders successfully deleted!";
    
}  


if(isset($_GET['delete_task']) && is_numeric($_GET['delete_task'])){
    $taskDeletedCount = deleteTask($_GET['delete_task']);
    // echo "$taskDeletedCount Task Successfully Deleted!";
}



$folders = getFolders();









$tasks = getTasks();

// var_dump the db object returned
// dd($tasks);



include "tpl/tpl-index.php";

//some test