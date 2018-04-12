<?php
include './database/DB.php';
session_start();
if (isset($_POST['submit'])) {
		 $total = $_SESSION['total'];
		 $id = $_SESSION['id']; 
		 $bill_num = '10000';
		$sql = "SELECT MAX(bill_num) as bill FROM sales";
		$select = $link->query($sql);
		while ($row=mysqli_fetch_assoc($select)) {

			if ($row['bill'] >= $bill_num) {
				$bill_num = $bill_num+1;
			}
		}
if(isset($_FILES["fileToUpload"])) {
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) 
{
  $file_name = basename( $_FILES["fileToUpload"]["name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
        $med_prisc  = $file_name;
        } 
        else 
        {
            echo "Sorry, there was an error uploading your file.";
        }
	}
		$sql = "INSERT INTO sales (user_id,total_amount,bill_num,med_prisc) values('$id','$total','$bill_num','$med_prisc')";	
	} else {
		echo $sql = "INSERT INTO sales (user_id,total_amount,bill_num) values('$id','$total','$bill_num')";

	}
		$_SESSION['bill_num'] = $bill_num;
		$result = $link->query($sql);
		echo "Payment Sucessful";
		header('location:payment_success.php');
	}
 ?>
