<?php  defined('BASE_PATH') OR die("Permision Denied");


/*
?alternative for above code
if(!defined('BASE_PATH')){
    echo "Permision Denied";
    die();
}

*/

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
    $sql = "INSERT INTO folders(name,user_id) VALUES(:folder_name ,:user_id);";
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
function deleteTask($task_id){
    global $pdo;
    $sql = "DELETE  FROM tasks WHERE id = $task_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount();
}
// task function
function addTasks(){
    return 1;
}
// task function
function getTasks(){
   global $pdo;
   $folderCondition = '';
   
   $folder = $_GET['folder_id'] ?? null;
   if(isset($folder) && is_numeric($folder)){
    $folderCondition = "and folder_id = $folder";
   }
   $current_user_id = getCurrentUserId();
   $sql = "SELECT * FROM tasks WHERE  user_id = $current_user_id $folderCondition";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $records = $stmt->fetchAll(PDO::FETCH_OBJ);
   return $records;
   
}






