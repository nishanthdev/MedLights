<?php
session_start();
$email = $_SESSION["email"];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forgot password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <div class="jumbotron">
        <h1 class="dispaly-3 text-center">Forgot Password</h1>
  </div>
  <div class="container">
    <div class="card">
      <div class="container">
        <div class="form-group">
          <form action="forgot_passwordprs.php"  method="post">
            <p>EMail: <?php echo $email; ?></p>
            <label for="New_password">New Password:</label>
            <input type="password" name="newp" class="form-control">
            <label for="confirm_password">confirm Password:</label>
            <input type="password" name="conp" class="form-control">
            <hr>
            <input type="submit" name="submit"  value="Save" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
<style media="screen">
body {
  margin: 0;
  background: linear-gradient(to right, #33ccff 0%, #99ff99 100%);
}
.jumbotron {
  background: white;
}
.card {
  padding: 1em;
  border-radius: 1em;
}
</style>
  </body>
</html>
