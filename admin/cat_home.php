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
$query ="select * from category";
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
          <li class="active">Category</li>
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
                echo '<div class="alert alert-success alert-dismissible .fade" role="alert">
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
                  <a href="cat_add.php" class="btn btn-lg btn-info">Add Category</a></p>
                    <input class="form-control" name="search_text" id="search_text" type="text" placeholder="Search category...">
                <br>
                <div id="result"></div>
      					</table>
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
     <script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"fetch_cat.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>
  </body>
</html>
