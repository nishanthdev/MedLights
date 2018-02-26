<?php  
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');
} else {
  if ($_SESSION['type']=='doctor') {
    echo "logged in";
  } else {
    echo "<script>alert('You are not doctor'); window.location='../login.php';</script>";
  }
}
include '../database/DB.php';

include '../assets/navbar.php';} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>
<div class="header">
  <!-- <div class="container"> -->
  <h1 class="display-4 text-center">Home Page</h1>
  <!-- </div> -->
</div>
<?php include './search_med.php'; ?>

</body>
<style media="screen">
  .header {
    background: #89C4F4;
    color: white;
    padding: 10px;
  }
</style>
</html>
