<?php
include './database/DB.php';
session_start();
include './api/navbar.php';
if (isset($_POST['submit'])) {
	
	$type = $_POST['type'];
	$total = $_POST['total'];
	$id = $_POST['id'];

		$med_prisc = $_SESSION['med_prisc'];
		$total = $_SESSION['total_amount']; 
		$sql = "SELECT MAX(bill_num) FROM sales";
		$select = $link->query($sql);
		$bill_num = '10000';
		while ($row=mysqli_fetch_row($select)) {

			if ($row['0'] < $bill_num) {
				$bill_num = $bill_num+1;
			}
			
		}
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
		// $bill_num = 00001;
		// echo "$id";
		$_SESSION['bill_num'] = $bill_num;
		$sql = "INSERT INTO sales (user_id,total_amount,bill_num,med_prisc) values('$id','$total','$bill_num','$med_prisc')";
		$result = $link->query($sql);
		echo "Payment Sucessful";
		header('location:payment_success.php');
}
 ?>
