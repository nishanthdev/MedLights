<?php 	include './database/DB.php'; 
$count = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Medilights</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blue.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/rateit.css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

  </head>

  <body class="bg-light">
    <?php include 'head.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill"><?php echo $count; ?></span>
          </h4>
          <ul class="list-group mb-3">
              <?php
              if(isset($_SESSION['cart'])) {
            $total = 0;
            foreach($_SESSION['cart'] as $med_id => $quantity) {
              $sql = "SELECT med_name,med_desc,price,quantity,cat_id FROM medicine WHERE med_id = $med_id";
            $result = $link->query($sql);
              while($row = mysqli_fetch_assoc($result)) {
                $cost = $row['price'] * $quantity;
                $total = $total + $cost;
                 ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?php echo $row['med_name']; ?></h6>
              </div>
              <span class="text-muted"><strong><?php echo "Rs. ". $row['price']; ?></strong></span>
            </li>
            <?php } 
             }
            ?>
              <li class="list-group-item d-flex justify-content-between">
              <span>Total (INR)</span>
              <strong>Rs. <?php echo $total; ?></strong>
            </li>
            <?php
            $_SESSION['total'] = $total;
            } else { ?>
             <li class="list-group-item d-flex justify-content-between">
              <strong>Your Cart is Empty</strong>
            </li>
            <?php } ?>
          </ul>
        </div>
        <?php 
        $c = "SELECT name,email,username,address from user where user_id='$id'";
        $res= $link->query($c);
         ?>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="form-group" method="post" action="payment_prs.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
           <input type="hidden" name="id" value="<?php echo $total; ?>">
            <div class="row">
              <?php while ($row=mysqli_fetch_assoc($res)) {
              ?>
              <div class="col-md-12 mb-3">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $row['name']; ?>" disabled>
              </div>
            </div>
            <div class="mb-3">
              <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $row['username']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="address">Address</label>
              <textarea cols="50" rows="1" class="form-control" disabled><?php echo $row['address']; ?></textarea>
            </div>
            <?php } ?>
            <h4 class="mb-3">Payment</h4>
            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              </div>
            </div>

            <?php 
            $con = 0;
            foreach($_SESSION['cart'] as $med_id => $quantity) {
              $sql = "SELECT med_name,med_desc,price,quantity,cat_id FROM medicine WHERE med_id = $med_id";
            $result = $link->query($sql);

              while($row = mysqli_fetch_assoc($result)) {
                $cat_id = $row['cat_id'];
            $a = "SELECT cat_name from category where cat_id='$cat_id'";
            $res = $link->query($a);
            while ($row=mysqli_fetch_assoc($res)) {
              $cat_name = $row['cat_name'];
            }
          }
          if ($cat_name=='Prescribed' || $cat_name=='Generic') {
          $con = 1;
        }
        }
            if ($con=='1') {
             ?>
            <hr class="mb-2">
             <label for="cc-expiration">Upload the priscription:</label>
              <input type="file" name="fileToUpload" id="fileToUpload" required>
              <?php } else {?>
              <h3 class="text-center">No Prescription needed!</h3>
              <?php } ?>
            <hr class="mb-4">
            <input class="btn btn-primary btn-lg btn-block" type="submit" name='submit' value="Continue to checkout">
          </form>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
    <script src="assets/js/jquery-1.11.1.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/echo.min.js"></script> 
<script src="assets/js/jquery.easing-1.3.min.js"></script> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/jquery.rateit.min.js"></script> 
<script type="text/javascript" src="assets/js/lightbox.min.js"></script> 
<script src="assets/js/bootstrap-select.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/scripts.js"></script>
  </body>
</html>
