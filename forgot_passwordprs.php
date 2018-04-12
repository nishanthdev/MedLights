<?php
include './database/DB.php';
session_start();
$email = $_SESSION["email"];
$alert = "";
 if (isset($_POST['submit'])) {
  $newp = $_POST['newp'];
  $conp = $_POST['conp'];

    if ($newp==$conp) {
      $sql = "UPDATE user SET password='$newp' WHERE email='$email'";
      $result = $link->query($sql);
      header('Location:login.php');
    } else {
      echo "<div class='alert alert-danger' role='alert'>
        Passwords don't match!
      </div>";
}}
 ?>
