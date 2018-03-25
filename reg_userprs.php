<?php
include("./database/DB.php");
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$number = $_POST['pnumber'];
	$username = $_POST['username'];
$sql = "SELECT email FROM user WHERE email ='$email' "; 
$select = $link->query($sql);
$count = $select->num_rows; 
		if ($count != 0) {
		header('Location:index.php');
	} else {
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if($password==$cpassword) {

	$query="Insert into user(name,gender,address,phone,username,email, password,type) values('$name', '$gender', '$address', '$number', '$username', '$email', '$password', 'regular')";
	if ($result=$link->query($query) === TRUE) {
    echo "New record created successfully";
		header('Location:login.php?action=success');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
} else {
	echo "Passwords dont match";
}
	}
} else{
	header('Location:login.php?action=error1');
}


 ?>
