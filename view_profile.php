<?php

include "./database/DB.php";
 session_start();
 include './api/navbar.php';
if(!isset($_SESSION['state']))
{
  header('Location:login.php');
} else {
  // echo "logged in";
}
$query = "select * from user where user_id=$id";
$result = $link->query($query);

while($row = mysqli_fetch_row($result))
{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
  </head>
  <body>
    <h1>User Info</h1>
    <hr>
    <div class="box">
      <h2>Name: <?php echo $row[1]; ?></h2>
      <h2>Gender: <?php echo $row[2]; ?> </h2>
      <h2>Address: <?php echo $row[3]; ?> </h2>
      <h2>Phone: <?php echo $row[4]; ?> </h2>
      <h2>Email: <?php echo lcfirst($row[6]); ?> </h2>
    </div>
  <?php }  ?>
  </body>
  <style media="screen">
    .box {
      padding: 20px;

    }
  </style>
</html>
