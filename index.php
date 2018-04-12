<?php 
include "./database/DB.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>MedLights</title>
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
<?php include "./head.php"; 
?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
      <div class="side-menu animate-dropdown outer-bottom-xs">
      <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
      <nav class="yamm megamenu-horizontal">
      <ul class="nav">
      <?php 
      $sql = "SELECT * from category";
      $result = $link->query($sql);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <li class="dropdown menu-item"> <a href="products.php?c=<?php echo $row['cat_name']; ?>" > <?php echo $row['cat_name']; ?></a></li>
      <?php } ?>          
      </ul> 
      </nav> 
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(images/slide1.jpg); opacity: 0.5;">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1" style="color: white;">Top Brands</div>
                  <div class="big-text fadeInDown-1" style="color: white;"> New Medicine </div>
                  <div class="excerpt fadeInDown-2 hidden-xs" style="color: white;"> <span>Buy the best medicines directly form the seller.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="products.php" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
              </div>
            </div>            
            <div class="item" style="background-image: url(images/slide2.jpg); opacity: 0.5;">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1" style="color: white;">Generic Meds</div>
                  <div class="big-text fadeInDown-1" style="color: white;"> Find an alternative to every medicine here </div>
                  <div class="button-holder fadeInDown-3"> <a href="products.php" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
              </div>
            </div>            
          </div>
        </div>        
        <section class="section wow fadeInUp new-arriavls">
          <h3 class="section-title">New Arrivals</h3>
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <?php 
            $a = "SELECT * from medicine";
            $res = $link->query($a);
            while($row=mysqli_fetch_assoc($res)){
             ?>            
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail.php?id=<?php echo $row['med_id']; ?>"><img  src="./admin/meds/<?php echo $row['pic']; ?>" alt=""></a> </div>
                  </div>
                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail.php?id=<?php echo $row['med_id']; ?>"><?php echo $row['med_name']; ?></a></h3>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price"> Rs. <?php echo $row['price'] ?> </span>  </div>
                  </div>
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                             <script>
                                  function sendToCart(id){
                                    window.location="cart.php?action=add&id="+id
                                  }
                                </script>
                          <button class="btn btn-primary icon" data-toggle="dropdown" onclick="sendToCart('<?php echo $row['med_id'] ;?>')" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
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