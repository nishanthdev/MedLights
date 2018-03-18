<?php

include("../database/DB.php");
if(isset($_POST['submit'])) {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $email= $_POST['email'];
  $type = $_POST['roles'];
  $username = $_POST['username'];
	$address = $_POST['address'];
	$phone = $_POST['pnumber'];


$query="update user set name='$name', type='$type', username='$username', address='$address', phone='$phone' where user_id='$id'";

$result=$link->query($query);

echo "Data updated successfully";
} else{
	echo "You have not submitted";
}
	header("location:user_home.php");
 ?>
