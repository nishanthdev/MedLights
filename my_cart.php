<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <title>My cart</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/blue.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/owl.transitions.css">
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="assets/css/rateit.css">
			<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.css">
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
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-edit item">Decrease</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Increase</th>
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
						</div>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php
						$total = 0;
						foreach($_SESSION['cart'] as $med_id => $quantity)
						{
							$sql = "SELECT med_name,med_desc,price,quantity,med_id,type,pic FROM medicine WHERE med_id = $med_id";
							$result = $link->query($sql);
							while($row = mysqli_fetch_row($result)) {
								$cost = $row['2'] * $quantity;
								$total = $total + $cost;
				 ?>
				<tr>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src="./admin/meds/<?php echo $row['6']; ?>" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href='detail.php?id=<?php echo $row[4]; ?>'><?php echo $row[0]; ?></a></h4>
								<h4>Rs. <?php echo $row['2']; ?></h4>
						</div>
						<div class="cart-product-info">
											<span>Type: <?php echo ucwords($row['5']); ?></span>
						</div>
					</td>
                    <td class="cart-product-sub-total"><span class="cart-sub-total-price"><a class="btn btn-danger" href="cart.php?action=remove&id=<?php echo $row[4];?>">-</a></span></td>

					<td class="cart-product-quantity">
						<div class="quant-input">
				                <input type="text" value="<?php echo $quantity; ?>" disabled>
			              </div>
		            </td>
                    <td class=""><a class="btn btn-warning" href='cart.php?action=add&id=<?php echo $row[4];?>'>+</a></td>

					<td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo $cost; ?></span></td>
				</tr>
<?php }
}
 ?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-4 col-sm-12 estimate-ship-tax">
</div>
<div class="col-md-4 col-sm-12 estimate-ship-tax">
</div>
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
		</thead>
		<tbody>
				<tr>
					<td>
                        <?php   if(isset($_SESSION['username'])) {
           				?>
						<div class="cart-checkout-btn pull-right">
							<a href="payment.php" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
							<span class="">Checkout with multiples address!</span>
						</div>
                        <?php }
          else { ?>
            <div class="cart-checkout-btn pull-right">
                            <a href="login.php" class="btn btn-primary checkout-btn">Login</a>
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
                        </div>
    <?php
}
 ?>
					</td>
				</tr>
		</tbody>
	</table>
</div>
</div>
		</div> 
<div id="brands-carousel" class="logo-slider wow fadeInUp">
		<div class="logo-slider-inner">
		</div>
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
