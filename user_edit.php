<?php
include "./database/DB.php";
$id = $_GET['id'];
echo "$id";
$query = "select address,phone from user where user_id=$id";
$result = $link->query($query);

while($row = mysqli_fetch_row($result))
{
  $address = $row[0];
  $phone = $row[1]; }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container">
        <h1 class="text-center display-2">Edit Info</h1>
        </div>
      </div>
      <div class="">
        <form class="" action="user_editprs.php" method="post">
          <label for="address">Address:</label>
          <textarea class="form-control" name="address" id="address" rows="3"><?php echo "$address"; ?></textarea><br>
          <label for="number">Number:</label>
          <input class="form-control" type="number" name="pnumber" id="pnumber" value='<?php echo "$phone"; ?>'>
          <hr>
          <input type="hidden" name="id" value='<?php echo "$id"; ?>'>
          <input type="submit" name="submit" value="Update">
        </form>
      </div>
  </body>
</html>
