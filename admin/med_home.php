<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');

} else {

}
$query ="select * from medicine";
$result = $link->query($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Medicine</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-default">
      <!-- <div class="container"> -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">OGP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
     <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Operations <span class="caret"></span>
        </a>
    <ul class="dropdown-menu">
                <li><a href="#">Medicines</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Compositions</a></li>
                <li><a href="#">Purchase</a></li>
                <li><a href="#">Reports</a></li>
              </ul>
          <li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Brad</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      <!-- </div> -->
    </nav>

    <header id="header">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-md-10"> -->
            <h1 class="text-center display-4">Medicine</h1>
          <!-- </div> -->

        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li >Dashboard</li>
          <li class="active"> Medicine</li>
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
  <!-- Alerts -->
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
             <!--/ aletrs -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Medicines</h3>
              </div>
              <div class="panel-body">
                  <a href="med_add.php" class="btn btn-lg btn-info">Add Medicine</a></p>
                    <input class="form-control" type="text" placeholder="Search medicine...">
                <br>
                <table border="1" class="table table-bordered table-fluid">
      						<tr>
      							<th>Name</th>
      							<th>Man date</th>
      							<th>Exp date</th>
      							<th>Brand</th>
      							<th>Price</th>
      							<th>Description</th>
      							<th>Type</th>
                   	<th>Stock</th>
      							<th colspan="2">Action</th>
      						</tr>
      					<?php while($row = mysqli_fetch_row($result))
      					{ ?>
      					<tr>
      						<td><?php echo $row['1']; ?></td>
      						<td><?php echo $row['2']; ?></td>
                  <td><?php echo $row['3']; ?></td>
      			            <td><?php echo $row['5']; ?></td>
      			            <td><?php echo $row['6']; ?></td>
      			            <td><?php echo $row['7']; ?></td>
      			            <td><?php echo ucwords($row['8']); ?></td>
      			            <td><?php echo $row['9']; ?></td>
            						<td><a href="med_edit.php?id=<?php echo $row[0]; ?>" class="btn btn-success btn-block">Edit</a></td>
            						<td><a href="med_delete.php?id=<?php echo $row[0]; ?>" class="btn btn-danger btn-block">Delete</a></td>
      					</tr>
      				<?php 	}
      				 ?>
      					</table>
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
