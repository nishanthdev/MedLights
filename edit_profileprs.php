<?php 
include './database/DB.php';
   if(isset($_POST['submit'])) {
   	  $id = $_POST['id'];
  $name = $_POST['name'];
  $email= $_POST['email'];
  $username = $_POST['username'];
  $address = $_POST['address'];
  $phone = $_POST['pnumber'];
$target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $file_name ="";

          if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
          {
            $file_name = basename( $_FILES["file"]["name"]);
          }
          else
          {
              echo "Sorry, there was an error uploading your file.";
          }

          if(!$file_name==null){
$query="update user set name='$name', username='$username', address='$address', phone='$phone', pic='$file_name' where user_id='$id'";
} else {
$query="update user set name='$name', username='$username', address='$address', phone='$phone' where user_id='$id'";
}
$result=$link->query($query);

echo "Data updated successfully";
header('location:view_profile.php?action=edited');
} 
         
?>