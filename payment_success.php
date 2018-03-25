<?php 

include './database/DB.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blue.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/rateit.css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<?php include 'head.php'; ?>
	<?php 
$bill_num = $_SESSION['bill_num'];
foreach($_SESSION['cart'] as $med_id => $quantity) {
$sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
$result = $link->query($sql);
$cost ="";
$qty = "";
while($row = mysqli_fetch_row($result)) {
 $cost = $row['2'] * $quantity;
 $qty = $row['3'];
 $qty = $qty-$quantity;
}
$sales_id="";
$sql1 = "SELECT sales_id FROM sales WHERE bill_num = $bill_num";
$result1 = $link->query($sql1);
while($row = mysqli_fetch_row($result1)) {
$sales_id = $row['0'];
}
$sql = "INSERT INTO `sales_desc`(`sales_id`, `med_id`, `quantity`, `price`) VALUES ('$sales_id','$med_id','$quantity','$cost')";
$result1 = $link->query($sql);
$add = "UPDATE `medicine` SET quantity=$qty where med_id=$med_id";
$result2 = $link->query($add);
}
 ?>
<div class="jumbotron" style="background-color: white;">
<h1 class="text-center display-3">Purchase Successful...!</h1>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2>MediLights Invoice</h2><h3 class="pull-right">Order bill no. # <?php echo $bill_num; ?></h3>
        </div>
        <hr>
        <div class="row">
          <div class="col-xs-6">
            <address>
              <?php   
              $a = "SELECT address,email,name from user where user_id='.$id.'";
              $res = $link->query($a);
              while ($row=mysqli_fetch_assoc($res)) {
               ?>
            <strong>Billed To:</strong><br>
            <strong><?php echo $row["name"]; ?></strong><br>
              <?php echo $row["address"]; ?>
              <?php } ?>
            </address>
          </div>
        </div>
        <div class="row">
          
          <div class="col-xs-6">
            <address>
              <strong>Order Date:</strong><br>
             <?php echo date("d-M-Y"); ?><br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Item</strong></td>
                      <td class="text-center"><strong>Price</strong></td>
                      <td class="text-center"><strong>Quantity</strong></td>
                      <td class="text-right"><strong>Totals</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <?php 
                  if(isset($_SESSION["cart"])) {

            $total = 0;
            foreach($_SESSION["cart"] as $med_id => $quantity) {
              $sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
            $result = $link->query($sql);

              while($row = mysqli_fetch_assoc($result)) {
                $cost = $row["price"] * $quantity;
                $total = $total + $cost; ?>
                  <tr>
                    <td><?php echo $row["med_name"]; ?></td>
                    <td class="text-center"><?php echo "Rs.".$row["price"]; ?></td>
                    <td class="text-center"><?php echo $quantity; ?></td>
                    <td class="text-right"><?php echo "Rs.". $cost; ?></td>
                  </tr>
                  <?php }
                  }
                }
                   ?>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Shipping</strong></td>
                    <td class="no-line text-right">Free Delivery</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Total</strong></td>
                    <td class="no-line text-right"><?php echo "Rs.".$total; ?></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a href="products.php?action=empty" class="btn btn-primary btn-block">Continue shopping</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
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
<script src="assets/js/jquery.rateit.min.js"></script> 
<script type="text/javascript" src="assets/js/lightbox.min.js"></script> 
<script src="assets/js/bootstrap-select.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/scripts.js"></script>
</html>