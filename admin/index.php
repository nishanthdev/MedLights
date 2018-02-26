
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
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
            <h1 class="text-center"> Dashboard</h1>
          <!-- </div> -->

        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <li class="list-group-item active ">
                 <h3 class="text-center">OPERATIONS</h3>
              </li>
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="med_home.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Medicine </a>
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
                <h3 class="panel-title">Store Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                    <h4>Medicines</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 33</h2>
                    <h4>Categories</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> 12,334</h2>
                    <h4>Compositions</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title ">Reports</h3>
                </div>
                <div class="panel-body">
                      <div class="row">
                        <div class="col-md-6">
                          <table class="table table-striped table-hover">
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                              </tr>
                              <tr>
                                <td>Jill Smith</td>
                                <td>jillsmith@gmail.com</td>
                                <td>Dec 12, 2016</td>
                              </tr>
                              <tr>
                                <td>Eve Jackson</td>
                                <td>ejackson@yahoo.com</td>
                                <td>Dec 13, 2016</td>
                              </tr>
                              <tr>
                                <td>John Doe</td>
                                <td>jdoe@gmail.com</td>
                                <td>Dec 13, 2016</td>
                              </tr>
                              <tr>
                                <td>Stephanie Landon</td>
                                <td>landon@yahoo.com</td>
                                <td>Dec 14, 2016</td>
                              </tr>
                              <tr>
                                <td>Mike Johnson</td>
                                <td>mjohnson@gmail.com</td>
                                <td>Dec 15, 2016</td>
                              </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                          <table class="table table-striped table-hover">
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined</th>
                              </tr>
                              <tr>
                                <td>Jill Smith</td>
                                <td>jillsmith@gmail.com</td>
                                <td>Dec 12, 2016</td>
                              </tr>
                              <tr>
                                <td>Eve Jackson</td>
                                <td>ejackson@yahoo.com</td>
                                <td>Dec 13, 2016</td>
                              </tr>
                              <tr>
                                <td>John Doe</td>
                                <td>jdoe@gmail.com</td>
                                <td>Dec 13, 2016</td>
                              </tr>
                              <tr>
                                <td>Stephanie Landon</td>
                                <td>landon@yahoo.com</td>
                                <td>Dec 14, 2016</td>
                              </tr>
                              <tr>
                                <td>Mike Johnson</td>
                                <td>mjohnson@gmail.com</td>
                                <td>Dec 15, 2016</td>
                              </tr>
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


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>
