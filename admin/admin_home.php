<?php 
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');
} else {
  if ($_SESSION['type']=='admin') {
    echo "logged in";
  } else {
    echo "<script>alert('You are not admin'); window.location='../login.php';</script>";
  }
}
include "../database/DB.php";
include '../assets/navbar.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container">
        <h1 class="text-center display-2">Admin Home</h1>
        </div>
     
      <div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Category</h5>
        <p class="card-text text-center">Manage Category</p>
        <a href="../category/cat_home.php" class="btn btn-primary btn-block">Let's Go</a>
      </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Composition</h5>
        <p class="card-text text-center">Manage Compostions</p>
        <a href="../composition/comp_home.php" class="btn btn-primary btn-block">Let's Go</a>
      </div>
      </div>
    </div>
  </div>
  <!-- <br> -->
  <div class="row">
    <div class="col-md">
      <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">Medicine</h5>
      <p class="card-text text-center">Manage Medicine</p>
      <a href="../medicine/med_home.php" class="btn btn-primary btn-block">Let's Go</a>
    </div>
</div>
    </div>
    <div class="col-md">
      <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center">Users</h5>
      <p class="card-text text-center">Manage Users</p>
      <a href="../user/user_home.php" class="btn btn-primary btn-block">Let's Go</a>
    </div>
</div>
    </div>
  </div>
  <!-- <br> -->
  <div class="row">
    <div class="col-md">
        <div class="card">
<div class="card-body">
  <h5 class="card-title text-center">Purchase</h5>
  <p class="card-text text-center">Manage Purchases</p>
  <a href="../purchase/" class="btn btn-primary btn-block">Lets's Go</a>
</div>
</div>
    </div>
  </div> <br>

</div>
  </body>
  <style media="screen">
  .jumbotron {
      background: white;
  }
  body {
    /*background: linear-gradient(to right, #56ccf2, #2f80ed);*/
  }
  .card {
    border-radius: 20px;
    padding: 25px;
    margin: 10px;
  }
  </style>
</html>
