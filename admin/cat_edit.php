<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');
} else {
  if ($_SESSION['type']=='admin') {
  } else {
    echo "<script>alert('You are not admin'); window.location='../login.php';</script>";
  }
}
$id = $_GET['id'];
$query = "select * from category where cat_id=$id";
$result = $link->query($query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Category</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

<?php include 'nav.php'; ?>
    <header id="header">
      <div class="container-fluid">
        <div class="row">
            <h1 class="text-center display-4">Category</h1>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li >Dashboard</li>
          <li >Category</li>
          <li class="active"> Edit</li>
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
              <a href="med_home.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Medicine </a>
              <a href="cat_home.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Category </a>
              <a href="comp_home.php" class="list-group-item "><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Composition </a>
              <a href="user_home.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User </a>
              <a href="purchase.php" class="list-group-item"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Purchase </a>
              <a href="report.php" class="list-group-item"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Reports </a>
            </div>
          </div>
          <div class="col-md-10">
            <?php
              if (isset($_GET['action'])) {
                if ($_GET['action']=='deleted') {
                  echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Record Deleted</div>';
                }
                if ($_GET['action']=='edited') {
                  echo '<div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Record Updated</div>';
              }
              if ($_GET['action']=='added') {
                echo '<div class="alert alert-danger alert-dismissible .fade" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Record Added</div>';
              }
            }
             ?>
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Category</h3>
              </div>
              <div class="panel-body">
                <form class="form-group" id="form" action="cat_editprs.php" method="post">
                  <?php while($row = mysqli_fetch_row($result))
                  { ?>
                    <label for="cat_name">Name:</label>
                    <input type="text" value="<?php echo $row['1']; ?>" name="cat_name" class="form-control" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" data-validation-allowing=" " data-validation-error-msg="Please enter a valid name"> <br>
                    <label for="cat_desc">Description:</label>
                    <textarea name="cat_desc" rows="5" cols="90" class="form-control" data-validation="custom" data-validation-regexp="^([a-zA-Z0-9 ]+)$" data-validation-allowing=" " data-validation-error-msg="Please enter a valid description"><?php echo $row['2']; ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $row['0']; ?>">
                    <hr>
                    <input type="submit" name="submit" value="Add" class="btn btn-primary">
                  </form>
              <?php } ?>
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
    <script src="js/bootstrap.min.js"></script>
 <script src="./js/jquery-1.11.1.min.js"></script>
  <script src="./js/jquery.form-validator.min.js"></script>
  </body>
   <script type="text/javascript">
   $.validate({
    form : '#form'
  });
  </script>
  </body>
</html>
