<?php
  include '../database/DB.php';
  session_start();
if(isset($_POST['submit'])){
  $med_name = $_POST['m_name'];
  $man_date = $_POST['m_date'];
  $exp_date = $_POST['e_date'];
  $price = $_POST['price'];
  $brand = $_POST['brand'];
  $type = $_POST['type'];
  $med_desc = $_POST['med_desc'];
  $cat = $_POST['category'];
  $target_dir = "meds/";
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
 $query="Insert into medicine(med_name, man_date, exp_date,cat_id, brand,  price, med_desc, type, quantity,pic) values ('$med_name','$man_date','$exp_date', '$cat','$brand','$price','$med_desc','$type','100','$file_name')";
 if ($result=$link->query($query) === TRUE) {
$_SESSION["med_name"] = $med_name;
   echo "New record created successfully";
 header('Location:med_comp.php');
 } else {
   echo "Error: " . $query . "<br>" . $link->error;
 }


}
 ?>
