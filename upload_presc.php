
<?php session_start();
include './database/DB.php';
include './api/navbar.php';
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  // echo "logged in";
} ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload priscription</title>
  </head>
  <body>
    <div class="jumbotron">
        <h1 class="text-center display-2">Upload Prescription</h1>
       
      </div>
        <div class="container">
          <div class="card">
            <div class="container">
              <div class="card-body">
             <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
              </div>
            </div>
          </div>
        </div>
  </body>
  <style type="text/css">
    .card{
      border-radius: 10px;

    }
    .btn {
      /*align-content: right;*/
    }
  </style>
</html>
