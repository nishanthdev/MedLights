<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  echo "logged in";
}
$id = $_GET['id'];
$query = "select * from user where user_id=$id";
$result = $link->query($query);

while($row = mysqli_fetch_row($result))
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../assets/header.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit user</title>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
        <h1 class="text-center display-2">Edit User</h1>
        </div>
    </div>
    <div class="container">
    <div class="card">
        <form class="form-group" action="user_editprs.php" method="post">
        <div class="container">
          <label for="name">Name:</label>
          <input class="form-control" value="<?php echo $row['1']; ?>" type="text" name="name" id="name">
          <label for="address">Address:</label>
          <textarea class="form-control" name="address" id="address" rows="3"><?php echo $row['3']; ?></textarea>
          <label for="number">Number:</label>
          <input class="form-control" type="number" name="pnumber" value="<?php echo $row['4']; ?>" id="pnumber">
          <label for="role">Role:</label>
          <select class="form-control" name="roles">
            <option value="pharmacist" <?php if($row['8']=="pharmacist"){echo "selected";} ?> >Pharmacist</option>
            <option value="doctor" <?php if($row['8']=="doctor"){echo "selected";} ?>>Doctor</option>
          </select>
          <label for="username">Username:</label>
          <input class="form-control" type="text" name="username" value="<?php echo $row['5']; ?>"  id="username">
          <label for="email">Email:</label>
          <input class="form-control" type="text" name="email" value="<?php echo $row['6']; ?>" id="email">
           <br>
           <input type="hidden" name="id" value="<?php echo $row['0']; } ?>">
        <input class="btn btn-primary" type="submit" name="submit" value="Update">
        <input class="btn btn-danger" type="reset" name="reset" value="Reset">
        </div>
        </form>
    </div>
    </div>
</body>
<style>
.jumbotron {
    background: white;
}
body {
  background: #1abc9c;
}
.card {
  border-radius: 10px;
  padding: 2em;
}
</style>
</html>
