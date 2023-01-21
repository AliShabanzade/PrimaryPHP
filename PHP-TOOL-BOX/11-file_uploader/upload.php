<?php
session_start();
$msg = null;
//check that if $_SERVER as type of REQUEST_METHOD was set
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //check that , if $_post['uploadeBtn] was set (ckick on it) 
    if(isset($_POST['uploadBtn']) && $_POST['uploadBtn']  == 'Upload'){
        // isset $_FILES check that input type is file and not empty 
        if(isset($_FILES['uploadedFile']) && !empty($_FILES['uploadedFile'])){
            //$_FILES return 5 information:tmp_name,name,size,type,size,error 
            $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
            $fileName=$_FILES['uploadedFile'] ['name'];
            $fileSize=$_FILES['uploadedFile'] ['size'];
            $fileType=$_FILES['uploadedFile'] ['type'];
            
            //return file name as a array
            $fileNameSeprate = explode('.' , $fileName);
            //change extention  to lower case with the end of fileNameSperate 
            $fileExtention = strtolower(end($fileNameSeprate));
            // randomize file name with md5() function
            $newFileName= md5(time() . $fileName) . '.' . $fileExtention;
            //Definition of file extension type
            $allowedFileExtentions = ['jpg', 'jpeg' ,'txt', 'doc' , 'gif' , 'zip'];
            // compare and Control of acceptable file extensions with if 
            if(in_array($fileExtention, $allowedFileExtentions)){
                //The address of the directory to transfer from temp
               $uploadFileDir = 'upload/';
               $destPath = $uploadFileDir . $newFileName;
               //moving file from $fileTmpPath to $destPath address
             if(move_uploaded_file($fileTmpPath , $destPath)){
                // var_dump($fileTmpPath,$destPath);
                // echo "<br>";
                echo "file uploaded";
               }else{
                echo "please try again";
               }
            

            }else {
                echo "not";
            }
            
            
        }else{
            echo $msg = "لطفا فایل مورد نظر خود را انتخاب نمایید ";
        }
        
    }


//set the session
$_SESSION['msg'] = $msg;

// Use the header to return to the index page >>!! dont put sapace on (:) <<
// header("location:index.php");

}


