<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  echo "logged in";
}
$query ="select * from user";
$result = $link->query($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | User</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

    <?php include 'nav.php'; ?>

    <header id="header">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-md-10"> -->
            <h1 class="text-center display-4">User</h1>
          <!-- </div> -->

        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li >Dashboard</li>
          <li > User</li>
          <li class="active">Add</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <li class="list-group-item active">
                 <h3 class="text-center">OPERATIONS</h3>
              </li>
              <a href="index.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="med_home.php" class="list-group-item "><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Medicine </a>
              <a href="cat_home.php" class="list-group-item"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Category </a>
              <a href="comp_home.php" class="list-group-item"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Composition </a>
              <a href="user_home.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User </a>
              <a href="purchase.php" class="list-group-item"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Purchase </a>
              <a href="report.php" class="list-group-item"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Reports </a>
            </div>

          </div>
          <div class="col-md-10">

            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
                  <form class="form-group" action="user_addprs.php" method="post">
                  <!-- <div class="container"> -->
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" id="name">
                      </div>
                      <div class="col-md-6 mb-3">
                     <label for="address">Address:</label>
                    <textarea class="form-control" name="address" id="address" rows="1"></textarea>
                      </div>
                    </div>
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
                    </div>
                      <div class="row">
                    <div class="col-md-6 mb-3">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" name="email" id="email">
                      </div>
                      <div class="col-md-6 mb-3">
                         <label for="number">Number:</label>
                    <input class="form-control" type="number" name="pnumber" id="pnumber">
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="role">Role:</label>
                    <select class="form-control" name="roles">
                      <option value="pharmacist">Pharmacist</option>
                      <option value="doctor">Doctor</option>
                    </select>
                      </div>
                      <div class="col-md-6 mb-3">
                         <label for="username">Username:</label>
                    <input class="form-control" type="text" name="username" id="email">
                      </div>
                    </div>
                   

                    <label for="password">Password:</label>
                    <input class="form-control" type="password" name="password" id="password">
                    <label for="confirm password">Confirm Password:</label>
                    <input class="form-control" type="cpassword" name="cpassword" id="cpassword"> <br>
                  <input class="btn btn-primary" type="submit" name="submit" value="Create">
                  <input class="btn btn-danger" type="reset" name="reset" value="Reset">
                  <!-- </div> -->
                  </form>
              </div>
              </div>

              <!--  -->
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright OGP &copy; 2018</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
