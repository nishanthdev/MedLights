<?php
// $name = 0, $gender=0, $address=0, $email=0, $phone=0, $place=0;
include("./database/DB.php");
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$number = $_POST['pnumber'];
	$username = $_POST['username'];

	 //Email is retrieved from the textbox
$sql = "SELECT email FROM user WHERE email ='$email' "; //checks if the email exists in db
$select = $link->query($sql);
$count = $select->num_rows; //counts the selected rows

		if ($count != 0) {  //if the counts is not zero the email exists
		// echo "Email already exists";
		header('Location:index.php');
	} else {
		// echo "email availible";
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if($password==$cpassword) {

	$query="Insert into user(name,gender,address,phone,username,email, password,type) values('$name', '$gender', '$address', '$number', '$username', '$email', '$password', 'regular')";
	if ($result=$link->query($query) === TRUE) {
    echo "New record created successfully";
		// header('Location:login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
} else {
	echo "Passwords dont match";
}
	}
} else{
	header('Location:reg_user.php');
}


 ?>
