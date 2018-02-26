<?php session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');

} else {
 echo "logged in";
} ?>
