<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  echo "logged in";
}
$query ="select user.username as uname, user.user_id as uid, user.address as uadd, sales.bill_num as sbill, sales.sales_date as sdate, sales.total_amount as ta from sales, user where user.user_id = sales.user_id";
$result = $link->query($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area</title>
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
            <h1 class="text-center display-4">Purchase</h1>
          <!-- </div> -->

        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li >Dashboard</li>
          <li class="active">Reports</li>
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
              <a href="cat_home.php" class="list-group-item"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Category </a>
              <a href="comp_home.php" class="list-group-item"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Composition </a>
              <a href="user_home.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User </a>
              <a href="purchase.php" class="list-group-item "><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Purchase </a>
              <a href="report.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> Reports </a>
            </div>

          </div>
          <div class="col-md-10">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Sales History</h3>
              </div>
              <div class="panel-body">
               <table class="table table-bordered table-fluid">
            <tr>
            <th>Username</th>
            <th>Bill NO.</th>
            <th>Sales Date</th>
            <th>Address</th>
            <th>Total Amount</th>
          </tr>
          <?php while($row = mysqli_fetch_assoc($result))
          { ?>
          <tr>
            <td><?php echo $row['uname']; ?></td>
            <td><?php echo $row['sbill']; ?></td>
            <td><?php echo $row['sdate']; ?></td>
            <td><?php echo $row['uadd']; ?></td>
            <td><?php echo $row['ta']; ?></td>
          </tr>
        <?php   }
          $link->close();
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
