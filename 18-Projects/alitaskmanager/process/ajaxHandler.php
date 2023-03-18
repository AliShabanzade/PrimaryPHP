<?php
// include BASE_PATH . "bootstrap/init.php";
include_once '../bootstrap/init.php';





if(!isAjaxRequest()){
diePage("Invalid Request!");
}




if(!isset($_POST['action'])  || empty($_POST['action'])){
    diePage("Invalid Action!");
   
}




switch($_POST['action']){
    case "doneSwitch":
        $task_id = $_POST['taskId'];
        if(!isset($task_id)  ||  !is_numeric($task_id)){
            echo "آیدی تسک معتبر نیست!";
            die();
        }
        taskDoneSwitch($task_id);
    
    break;
    case "addFolder":
        
        if(!isset($_POST['folderName'])  || strlen($_POST['folderName']) < 3){
          echo "نام فولدر باید بیشتر از دو حرف باشد";
          die();
        }else{
          $result=addFolder($_POST['folderName']);
          echo json_encode($result);
          
        }
        
    break;

    case "addTask":
        $folderId= $_POST['folderId'];
        $taskTitle= $_POST['taskTitle'];
       
        if(!isset($folderId) || empty($folderId)){
            echo "یک فولدر برای اضافه کردن تسک انتخاب کنید...";
            die();
        }

        if(empty($taskTitle)  || strlen($taskTitle) < 3){
            echo "نام تسک باید بیشتر از دو حرف باشد...";
            die();
        }

        echo addTask($taskTitle , $folderId );
    break;

    default:
         diePage("Invalid Action");
}


