<?php  session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');

} else {
  echo "logged in";
} ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Disscussion</title>
  </head>
  <body>
    <div class="jumbotron">
        <div class="container">
        <h1 class="text-center display-2">Disscussion</h1>
        </div>
  </body>
</html>
