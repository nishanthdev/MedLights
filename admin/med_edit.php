<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');

}
$id = $_GET['id'];
$query = "select * from medicine where med_id=$id";
$result = $link->query($query);

while($row = mysqli_fetch_row($result))
{ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Medicine</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
  <?php include 'nav.php'; ?>
    <header id="header">
      <div class="container-fluid">
        <div class="row">
            <h1 class="text-center display-4">Medicine</h1>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li >Dashboard</li>
          <li > Medicine</li>
          <li class="active">Edit</li>
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
              <a href="med_home.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Medicine </a>
              <a href="cat_home.php" class="list-group-item"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Category </a>
              <a href="comp_home.php" class="list-group-item"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Composition </a>
              <a href="user_home.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User </a>
              <a href="purchase.php" class="list-group-item"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Purchase </a>
              <a href="report.php" class="list-group-item"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Reports </a>
            </div>
          </div>
          <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Medicines</h3>
              </div>
              <div class="panel-body">
                <form class="form-group" action="med_editprs.php" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="medname">Medicine Name:</label>
                      <input type="text" name="m_name" class="form-control" value="<?php echo $row['1']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="med_Desc">Description:</label>
                    <textarea name="med_desc" rows="1" cols="5" class="form-control"><?php echo $row['7']; ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="man_date">Manufatured date:</label>
                      <input type="date" name="m_date" class="form-control" value="<?php echo $row['2']; ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="man_date">Expire date:</label>
                      <input type="date" name="e_date" class="form-control" value="<?php echo $row['3']; ?>">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="brand">Brand</label>
                      <input type="text" value="<?php echo $row['5']; ?>" name="brand" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="price">Price:</label>
                      <input type="number" value="<?php echo $row['6']; ?>" name="price" class="form-control">
                    </div>
                  </div>
                  <input type="hidden" name="id" value="<?php  echo $row['0']; ?>">
                  <label for="type">Type:</label>
                  <select class="form-control" name="type">
                    <option value="generic" <?php if($row['8'] == 'generic'){ echo "selected";} ?> >Generic</option>
                    <option value="regular" <?php if($row['8'] == 'regular'){ echo "selected";} ?>>Regular</option>
                  </select>
                <?php } ?>
                  <hr>
                  <input type="submit" name="submit" class="btn btn-primary">
                </form>
              </div>
              </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
