<?php 
include './database/DB.php';
if (isset($_POST['submit'])) {
$reciever =  $_POST['reciever'];
$sender = $_POST['sender'];
$body = $_POST['message'];
$query="INSERT INTO `message`(`body`, `sender`, `reciever`) VALUES ('$body','$sender','$reciever')";
if ($result=$link->query($query) === TRUE) {
echo "Message Sent";
header('location:doctor_list.php?id='.$reciever.'');
}
}
 ?>