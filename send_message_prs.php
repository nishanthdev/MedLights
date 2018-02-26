<?php 
include './database/DB.php';
session_start();
$reciever = $_SESSION['reciever'];
$sender = $_SESSION['sender'];

if (isset($_POST['send'])) {
$body = $_POST['message'];
echo "$body";
echo "$sender";
echo "$reciever";
$query="INSERT INTO `message`(`body`, `sender`, `reciever`) VALUES ('$body','$sender','$reciever')";
        if ($result=$link->query($query) === TRUE) {
    echo "Message Sent";
    header('location:messages.php');
}
}
 ?>