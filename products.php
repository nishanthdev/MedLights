<?php
include './database/DB.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>Product</title>
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
<body>
<?php include "./head.php"; ?>


<?php 
if (isset($_GET['action'])) {
   $action = $_GET['action'];
  $_SESSION["cart"] = null;
  echo "<script>window.location='products.php';</script>";
}
 ?>
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">

      </ul>
    </div>
  </div>
</div>
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'>
      <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <?php
              $sql = "SELECT * from category";
              $result = $link->query($sql);
              while ($row = mysqli_fetch_assoc($result)) {
               ?>
              <li class="dropdown menu-item"> <a href="products.php?c=<?php echo $row['cat_name']; ?>"> <?php echo $row['cat_name']; ?></a></li>
              <?php } ?>
            </ul>
          </nav>
        </div>
        <div class="side-menu animate-dropdown outer-bottom-xs">
            <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Brands</div>
            <nav class="yamm megamenu-horizontal">
              <ul class="nav">
                <?php
                $b = "SELECT DISTINCT brand from medicine";
                $br = $link->query($b);
                 while ($row = mysqli_fetch_row($br)) {
                  ?>
                <li class="dropdown menu-item"> <a href="products.php?brand=<?php echo $row['0']; ?>"> <?php echo $row['0']; ?></a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>
          <div class="side-menu animate-dropdown outer-bottom-xs">
              <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Type</div>
              <nav class="yamm megamenu-horizontal">
                <ul class="nav">
                  <?php
                  $t = "SELECT DISTINCT type from medicine";
                  $r = $link->query($t);
                  while ($row = mysqli_fetch_assoc($r)) {
                   ?>
                  <li class="dropdown menu-item"> <a href="products.php?type=<?php echo $row['type']; ?>"> <?php echo ucwords($row['type']); ?></a></li>
                  <?php } ?>

                </ul>
              </nav>
            </div>
        <div class="sidebar-module-container">
          <div class="sidebar-filter">
          </div>
        </div>
      </div>
      <div class='col-md-9'>
        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="images/slide3.jpg" width="850" height="700" style="opacity: 0.5;" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"> Big Sale </div>
                <div class="excerpt hidden-sm hidden-md"> Buy the best medicine here </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix filters-container m-t-10">
          <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
              <?php
               if (isset($_GET['brand'])) {
                $con = $_GET['brand'];
                $a = "SELECT * from medicine Where brand = '$con'";
                
              } elseif (isset($_GET['type'])) {
                $con = $_GET['type'];
                $a = "SELECT * from medicine Where type = '$con'";
              } elseif (isset($_GET['c'])) {
                $con = $_GET['c'];

                $a = "SELECT medicine.med_id as med_id, medicine.med_name as med_name, medicine.price as price, medicine.pic as pic, category.cat_name from medicine, category Where medicine.cat_id = category.cat_id and cat_name = '$con'";
              } else {
              $a = "SELECT * from medicine ORDER BY rand()";
            }
              $res = $link->query($a);
              while ($row = mysqli_fetch_assoc($res)) {

               ?>
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.php?id=<?php echo $row['med_id']; ?>"><img  src="./admin/meds/<?php echo $row['pic']; ?>" alt=""></a> </div>
                        </div>
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php?id=<?php echo $row['med_id']; ?>"><?php echo $row['med_name']; ?></a></h3>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price">Rs. <?php echo $row['price']; ?> </span></div>
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

                                <button class="btn btn-primary icon" onclick="sendToCart('<?php echo $row['med_id'] ;?>')" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
 <hr class="mb-4">
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
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
