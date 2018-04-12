<?php
  include '../database/DB.php';
if(isset($_POST['submit'])){
  $id = $_POST['id'];
  $med_name = $_POST['m_name'];
  $man_date = $_POST['m_date'];
  $exp_date = $_POST['e_date'];
  $price = $_POST['price'];
  $brand = $_POST['brand'];
  $type = $_POST['type'];
  $med_desc = $_POST['med_desc'];

 $query="update medicine set med_name='$med_name', man_date='$man_date', exp_date='$exp_date', brand='$brand',price='$price',med_desc='$med_desc',type='$type' where med_id='$id'";
 if ($result=$link->query($query) === TRUE) {
   echo "New record Updated successfully";
   header('Location:med_home.php?action=edited');
 } else {
   echo "Error: " . $query . "<br>" . $link->error;
 }
}
 ?>
