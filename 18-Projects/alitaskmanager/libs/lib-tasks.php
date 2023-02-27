<?php

// folder function


function deleteFolder($folder_id){
    global $pdo;
    $sql="delete from folders where id = $folder_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();

}


function addFolders($folder_name){
    // var_dump($folder_name);
    global $pdo;
    $current_user_id=getCurrentUserId();
    $sql = "INSERT INTO folders(name,user_id) VALUE(:folder_name ,:user_id);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([":folder_name"=>$folder_name , ":user_id"=>$current_user_id]);
    return $stmt->rowCount();


}



function getFolders(){
   $current_user_id=getCurrentUserId(); 
    //make $pdo glogbal
    global $pdo;
    $sql="select * from folders where user_id=$current_user_id";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $records=$stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;

}


// task function
function removeTasks(){
    return 1;
}
// task function
function addTasks(){
    return 1;
}
// task function
function getTasks(){
    return 1;
}






