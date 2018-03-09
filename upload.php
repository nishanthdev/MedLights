<?php 
include './database/DB.php';
session_start();
include './api/navbar.php';

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// 

if(isset($_POST["submit"])) 
{
  $file_name = basename( $_FILES["fileToUpload"]["name"]);



        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
        $_SESSION['med_prisc'] = $file_name;
        header('Location:payment.php');
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
}
?>