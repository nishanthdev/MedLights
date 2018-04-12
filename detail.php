 <?php
include "./database/DB.php";
$mid = $_GET['id'];
$qty = 0;
$comp = "";
$type = "";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">
	<title>MedLights</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/blue.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.transitions.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/rateit.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link href="assets/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	</head>
    <body class="cnt-home">
	<?php include 'head.php'; ?>
	<div class="body-content outer-top-xs">
	<div class='container'>
	<div class='row single-product'>
	<div class='col-md-3 sidebar'>
	<div class="sidebar-module-container">
	<div class="home-banner outer-top-n">
	</div>		
	<div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
	<h3 class="section-title">hot deals</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
	<?php 
	$SELECT = "SELECT * from medicine ORDER BY rand() limit 1";
	$res = $link->query($SELECT);
	while($row=mysqli_fetch_assoc($res)) { ?>
	<div class="item">
	<div class="products">
	<div class="hot-deal-wrapper">
	<div class="image">
	<img src="./admin/meds/<?php echo $row['pic']; ?>" alt="">
	</div>
	</div>
	<div class="product-info text-left m-t-20">
	<h3 class="name"><a href="detail.php?id=<?php echo $row['med_id']; ?>"><?php echo $row['med_name']; ?></a></h3>
	<div class="product-price">	
	<span class="price">
	<?php echo "Rs. ".$row['price']; ?>
	</span>
	</div>
	</div>
	<div class="cart clearfix animate-effect">
	<div class="action">
	<div class="add-cart-button btn-group">
	<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
	<i class="fa fa-shopping-cart"></i>													
	</button>
	<button class="btn btn-primary cart-btn"  onclick="sendToCart('<?php echo $row['med_id'] ;?>')">Add to cart</button>						
	</div>
	</div>
	</div>
	</div>	
	</div>	
	<?php } ?>			
    </div>
	</div>
	</div>
	</div>
	<div class='col-md-9'>
    <div class="detail-block">
	<div class="row  wow fadeInUp">
    <?php 
	$y = "SELECT medicine.med_id as mid,medicine.pic as pic, medicine.med_name as mname, medicine.quantity as mqty, medicine.med_desc as mdesc, medicine.price as mprice, medicine.type as mtype, med_comp.comp_id as cid FROM medicine,med_comp where medicine.med_id = med_comp.med_id AND medicine.med_id = '$mid'";
	$r = $link->query($y);

	while($row = mysqli_fetch_assoc($r))
	{ 
	$type = $row['mtype'];
    $comp = $row['cid'];
	?> 
	<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">
    <div id="owl-single-product">
    <div class="text-center">
    <img class="img-responsive" alt="" src="./admin/meds/<?php echo $row['pic']; ?>" />
    </div>
    </div>
    </div>
	</div>     			
	<div class='col-sm-6 col-md-7 product-info-block'>
	<div class="product-info">
	<h1 class="name"><?php echo $row['mname']; ?></h1>
	<div class="stock-container m-t-20">
	<div class="row">
	<div class="col-sm-2">
	<div class="stock-box">
	<span class="label">Type :</span>
	</div>	
	</div>
	<div class="col-sm-9">
	<div class="stock-box">
	<span class="value"><?php echo ucwords($row['mtype']); ?></span>
	</div>	
	</div>
	</div>		
	</div>
	<div class="stock-container info-container m-t-10">
	<div class="row">
	<div class="col-sm-2">
	<div class="stock-box">
	<span class="label">Availability :</span>
	</div>	
	</div>
	<?php if($row['mqty'] > 0) { ?>
	<div class="col-sm-9">
	<div class="stock-box">
	<span class="value">In Stock</span>
	</div>	
	</div>
	<?php } else { ?>
	<div class="col-sm-9">
	<div class="stock-box">
	<span class="value">Out of Stock</span>
	</div>	
	</div>
	<?php }?>
	</div>	
	</div>
	<div class="description-container m-t-20">
	<?php echo $row['mdesc']; ?>
	</div>
	<div class="price-container info-container m-t-20">
	<div class="row">
	<div class="col-sm-6">
	<div class="price-box">
	<span class="price">Rs. <?php echo $row['mprice']; ?></span>
	</div>
	</div>
	</div>
	</div>
	<div class="quantity-container info-container">
	<div class="row">
	<?php if ($row['mqty'] > 0) {?>
	<div class="col-sm-7">
	<?php  echo '<a href="cart.php?action=add&id='.$row['mid'].'" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>'; ?>
	</div>
	<?php 	} else { ?>
	<div class="col-sm-6">
	<div class="price-box">
	<span class="price">This item will be availible soon!</span>
	</div>
	</div>
	<?php } 
		}?>		
	</div>
	</div>
	</div>
	</div>
	</div>
    </div>
	<?php 
    $sql="";
    $med  = "";
    if ($type == 'regular') {
    $sql = "SELECT medicine.med_id, medicine.med_name, medicine.price, medicine.pic, med_comp.comp_id FROM medicine,med_comp where medicine.med_id = med_comp.med_id AND med_comp.comp_id = '$comp' AND medicine.type='generic'";
    $med = 'generic';
    } else {
    $sql = "SELECT medicine.med_id, medicine.med_name, medicine.pic, medicine.price, med_comp.comp_id FROM medicine,med_comp where medicine.med_id = med_comp.med_id AND med_comp.comp_id = '$comp' AND medicine.type='regular'";
    $med = 'regular';
    }
    $result1 = $link->query($sql);
    ?>
	<section class="section featured-product wow fadeInUp">
	<h3 class="section-title"><?php echo ucwords($med); ?> Alternatives</h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
	<?php 
    while($row = mysqli_fetch_assoc($result1))
    { 
    ?> 	
	<div class="item item-carousel">
	<div class="products">
	<div class="product">		
	<div class="product-image">
	<div class="image">
	<a href="detail.php?id=<?php echo $row['med_id']; ?>"><img  src="./admin/meds/<?php echo $row['pic']; ?>" alt=""></a>
	</div>			
    </div>
	<div class="product-info text-left">
	<h3 class="name"><a href="detail.php?id=<?php echo $row['med_id']; ?>"><?php echo $row['med_name']; ?></a></h3>
	<div class="description"></div>
	<div class="product-price">	
	<span class="price">
	Rs. <?php echo $row['price'];?></span>					
	</div>
	<script>
	function sendToCart(id){
	window.location="cart.php?action=add&id="+id
	}
	</script>
	</div>
	<div class="cart clearfix animate-effect">
	<div class="action">
	<ul class="list-unstyled">
	<div class="add-cart-button btn-group">
	<button onclick="sendToCart('<?php echo $row['med_id'] ;?>')" class="btn btn-primary icon" data-toggle="dropdown" type="button"><i class="fa fa-shopping-cart"></i></button>
	<button class="btn btn-primary cart-btn" type="button"></button>						
	</div>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>
	<?php } ?>	
	</div>
	</section>			
	</div>
	<div class="clearfix"></div>
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
