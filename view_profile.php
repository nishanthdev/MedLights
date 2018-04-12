<?php

include "./database/DB.php";

?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>User</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/blue.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/rateit.css">
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
  </head>
  <body>
  <?php include 'head.php'; ?>
  <div class="container">
  <hr>
  <?php 
  if (isset($_GET['action'])) {
  $action = $_GET['action'];
  if ($action == 'edited'){
  echo '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Your Profile has been edited successfully!
  </div>';
  }
  }
  $query = "select * from user where user_id=$id";
  $result = $link->query($query);

  while($row = mysqli_fetch_assoc($result))
  { ?>
  <div class="well">
  <div class="row">
  <div class="col-md-4">
  <img src="./images/<?php echo $row['pic']; ?>" width="200" height="200" class="thumbnail">
  </div>
  <div class="col-md-8">
  <label>Name:</label>
  <?php echo $row['name']; ?>
  <hr class="mb-4">
  <label>Gender:</label>
  <?php echo $row['gender']; ?>
  <hr class="mb-4">
  <label>Username:</label>
  <?php echo $row['username']; ?>
  <hr class="mb-4">
  <label>Address:</label>
  <?php echo $row['address']; ?>
  <hr class="mb-4">
  <label>Email:</label>
  <?php echo $row['email']; ?>
  <hr class="mb-4">
  <label>Phome:</label>
  <?php echo $row['phone']; ?>
  <hr class="mb-4">
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
   Edit
   </button>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
  </div>
  <div class="modal-body">
  <form class="form-group" method="post" action="edit_profileprs.php"  enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <label>Name:</label>
  <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
  <label>Email:</label>
  <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
  <label>Username:</label>
  <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
  <label>Address:</label>
  <textarea cols="50" rows="5" name="address" class="form-control"><?php echo $row['address']; ?></textarea>
  <label>Phone</label>
  <input type="number" name="pnumber" class="form-control" value="<?php echo $row['phone']; ?>">
  <label for="image">Change Profile picture:</label>
  <input type="file" name="file">
  <hr class="mb-4">
  <input type="submit" name="submit" class="btn btn-primary">
  </form>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
    </div>
  <?php }  ?>
  </div>
  <?php include 'footer.php'; ?>
  </body>
  <script src="assets/js/jquery-1.11.1.min.js"></script> 
  <script src="assets/js/bootstrap.min.js"></script> 
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script> 
  <script src="assets/js/owl.carousel.min.js"></script> 
  <script src="assets/js/echo.min.js"></script> 
  <script src="assets/js/jquery.easing-1.3.min.js"></script> 
  <script src="assets/js/bootstrap-slider.min.js"></script> 
  <script type="text/javascript" src="assets/js/lightbox.min.js"></script> 
  <script src="assets/js/bootstrap-select.min.js"></script> 
  <script src="assets/js/wow.min.js"></script> 
  <script src="assets/js/scripts.js"></script>
</html>
