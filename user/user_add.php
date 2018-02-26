<!DOCTYPE html>
<html lang="en">
<head>
<?php
include '../assets/header.php';
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  echo "logged in";
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
        <h1 class="text-center display-2">Add User</h1>
        </div>
    </div>
    <div class="container">
    <div class="card">
        <form class="form-group" action="user_addprs.php" method="post">
        <div class="container">
          <label for="name">Name:</label>
          <input class="form-control" type="text" name="name" id="name">
          <label for="gender">Gender:</label> <br>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="gender"  value="male" required> Male
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="gender" value="female"> Female
            </label>
          </div> <br>
          <label for="address">Address:</label>
          <textarea class="form-control" name="address" id="address" rows="3"></textarea>
          <label for="number">Number:</label>
          <input class="form-control" type="number" name="pnumber" id="pnumber">
          <label for="role">Role:</label>
          <select class="form-control" name="roles">
            <option value="pharmacist">Pharmacist</option>
            <option value="doctor">Doctor</option>
          </select>
          <label for="username">Username:</label>
          <input class="form-control" type="text" name="username" id="email">
          <label for="email">Email:</label>
          <input class="form-control" type="text" name="email" id="email">
          <label for="password">Password:</label>
          <input class="form-control" type="password" name="password" id="password">
          <label for="confirm password">Confirm Password:</label>
          <input class="form-control" type="cpassword" name="cpassword" id="cpassword"> <br>
        <input class="btn btn-primary" type="submit" name="submit" value="Create">
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
