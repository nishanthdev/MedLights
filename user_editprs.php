<?php

include("./database/DB.php");
if(isset($_POST['submit'])) {

  $id = $_POST['id'];
	$address = $_POST['address'];
	$phone = $_POST['pnumber'];


$query="update user set address='$address', phone='$phone' where user_id='$id'";

$result=$link->query($query);

echo "Data updated successfully";
} else{
	echo "You have not submitted";
}
	header("location: test.php");


 ?>
