<?php
session_start();
include "../database/DB.php";
if(!isset($_SESSION["state"]))
{
 header('Location:login.php');
} else {
}
$query = "select * from composition order by comp_id";
$result = $link->query($query);
$med_name = $_SESSION["med_name"];
?>
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
                <h3 class="panel-title">Medicines</h3>
              </div>
              <div class="panel-body">
                <form class="form-group" action="med_compprs.php" method="post">
                   <input type="hidden" name="med_name" value='<?php echo "$med_name"; ?>'>
                  <label for="Composition">Select compositions:</label> <br>
                  <?php
                  while($row = mysqli_fetch_row($result))
                  {
                  ?>
                  <input type="checkbox" name="comp[]" value="<?php echo $row['0']; ?>"> <?php echo $row['1']; ?> <br>
                <?php } ?>
                <hr>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
                </form>
              </div>
              </div>
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
