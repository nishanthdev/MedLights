<?php
// include './database/DB.php';
// session_start();
// include './assets/navbar.php';
?>
<!-- <head>
	<title>Payment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head> -->
    <!-- <div class="container" style="margin-top:10px;">
      <div class=""> -->
        <?php
				//
        //   echo '<h3>Your Shopping Cart</h3>';
        //   echo "<hr>";
        //     echo '<div align="right"><a href="cart.php?action=empty" class="btn btn-danger">Empty Cart</a>&nbsp;<a href="index.php" class="btn btn-info">Continue Shopping</a></div> <br> ';
        //   if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
				//
        //     $total = 0;
				//
        //     foreach($_SESSION['cart'] as $med_id => $quantity) {
        //       $sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
        //     $result = $link->query($sql);
        //     echo '<div class="card" style="border-radius:1em;">';
        //     echo "<div class='container'>";
        //     echo "<div class='card-body'>";
        //       while($row = mysqli_fetch_row($result)) {
        //         $cost = $row['2'] * $quantity;
        //         $total = $total + $cost;
				//
        //         echo '<h4>Name: '.$row['0'].'</h4>';
        //         echo '<h4>Quantity: '.$quantity.'&nbsp;</h4>';
        //         echo "<div style='float:right;'>";
        //         // echo "<label>Modify the quantity:<label>";
        //         echo '<a class="btn btn-warning" href="cart.php?action=add&id='.$med_id.'">+</a>  ';
        //         echo '<a class="btn btn-danger" href="cart.php?action=remove&id='.$med_id.'">-</a>';
        //         echo "</div>";
        //         echo '<h4>Cost: '.$cost.'</h4>';
        //         echo '</div>';
        //         echo '</div>';
        //         echo '</div><br>';
        //       }
        //     }
				//
        //   // echo '<td colspan="3" align="right"></td>';
        //   echo '<h4>Total Amount: '.$total.'</h4>';
				//
        //   echo '<br>';
				//
        //   if(isset($_SESSION['username'])) {
        //     echo '<a href="upload_presc.php"><button class="btn btn-primary" style="float:right;">Check Out</button></a>';
        //   }
        //   else {
        //     echo '<a href="login.php"><button class="btn btn-primary" style="float:right;">Login</button></a>';
        //   }
        //   echo '</div>';
        //   echo '</div>';
        // }
        // else {
        //   echo '<div class="alert alert-warning" role="alert">
        //         Your Cart is currently empty...!
        //         </div>
        //         ';
        // }
        //   echo '</div>';
        //   echo '</div>';
          ?>
  <!-- </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Flipmart premium HTML5 & CSS3 Template</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/blue.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/owl.transitions.css">
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/rateit.css">
			<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">




		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.css">

        <!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	</head>
    <body class="cnt-home">
			<?php include 'head.php'; ?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">

			</ul>
		</div>
	</div>
</div>

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-edit item">Add</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Deduct</th>
					<th class="cart-total last-item">Grandtotal</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
                  <?php
                if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
                { ?>
					<td colspan="7">
						<div class="shopping-cart-btn">
							<span class="">
								<a href="cart.php?action=empty" class="btn btn-upper btn-warning outer-left-xs">Empty Cart</a>
								<a href="products.php" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue shopping</a>
							</span>
						</div><!-- /.shopping-cart-btn -->
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php
						$total = 0;
						foreach($_SESSION['cart'] as $med_id => $quantity)
						{
							$sql = "SELECT med_name,med_desc,price,quantity,med_id,type FROM medicine WHERE med_id = $med_id";
							$result = $link->query($sql);
							while($row = mysqli_fetch_row($result)) {
								$cost = $row['2'] * $quantity;
								$total = $total + $cost;
				 ?>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src="assets/images/products/p1.jpg" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href='detail.php?id=<?php echo $row[4]; ?>'><?php echo $row[0]; ?></a></h4>
						<!-- <div class="row"> -->
							<!-- <div class="col-md-6"> -->
								<h4>Rs. <?php echo $row['2']; ?></h4>
							<!-- </d/iv> -->
							<!-- </div> -->
						</div><!-- /.row -->
						<div class="cart-product-info">
											<span>Type: <?php echo ucwords($row['5']); ?></span>
						</div>
					</td>
					<td class=""><a class="btn btn-warning" href='cart.php?action=add&id=<?php echo $row[4];?>'>+</a></td>
					<td class="cart-product-quantity">
						<div class="quant-input">
				                <input type="text" value="<?php echo $quantity; ?>" disabled>
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price"><a class="btn btn-danger" href="cart.php?action=remove&id=<?php echo $row[4];?>">-</a></span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo $cost; ?></span></td>
				</tr>
<?php }
}



 ?>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->
<div class="col-md-4 col-sm-12 estimate-ship-tax">

</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">

</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					<div class="cart-grand-total">
						Grand Total<span class="inner-left-md"><?php echo $total; ?></span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
                        <?php   if(isset($_SESSION['username'])) {
            // echo '<a href="upload_presc.php"><button class="btn btn-primary" style="float:right;">Check Out</button></a>';
           ?>
						<div class="cart-checkout-btn pull-right">
							<a href="upload_presc.php" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
							<span class="">Checkout with multiples address!</span>
						</div>
                        <?php }
          else { ?>
            <div class="cart-checkout-btn pull-right">
                            <a href="login.php" class="btn btn-primary checkout-btn">Login</a>
                            <!-- <span class="">Checkout with multiples address!</span> -->
                        </div>
<?php }

} else { 
    $total = 0;
    ?>
<div class="container">
        <h2 class="display-3 text-center">Your cart is currently empty!</h2>
        
</div>
<div class="cart-checkout-btn pull-right">
                            <a href="products.php" class="btn btn-primary checkout-btn">Shop Somethings</a>
                            <!-- <span class="">Checkout with multiples address!</span> -->
                        </div>
    <?php
}
 ?>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->
</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">

		</div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">flipmart@themesground.com</a></span>
                </div>
            </li>

            </ul>
    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                          <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                  <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                  <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="assets/images/payments/1.png" alt=""></li>
                        <li><img src="assets/images/payments/2.png" alt=""></li>
                        <li><img src="assets/images/payments/3.png" alt=""></li>
                        <li><img src="assets/images/payments/4.png" alt=""></li>
                        <li><img src="assets/images/payments/5.png" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>

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
