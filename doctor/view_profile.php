<?php  session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');
} else {
  if ($_SESSION['type']=='doctor') {
    echo "logged in";
  } else {
    echo "<script>alert('You are not admin'); window.location='../login.php';</script>";
  }
}?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doctor profile</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container">
        <h1 class="text-center display-2">Doctor profile</h1>
        </div>
  </body>
</html>