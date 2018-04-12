<?php
include './database/DB.php';
session_start();
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$alert = "";

$sql = "SELECT email FROM user WHERE email='$email'";
$result = $link->query($sql);
$count = $result->num_rows;
if (!$count == 0) { 
$_SESSION["email"] = $email;
header('Location:forgot_password.php');
} else {
echo "<div class='alert alert-danger' role='alert'>
  Incorrect Email!
</div>";
}
} ?>
A
