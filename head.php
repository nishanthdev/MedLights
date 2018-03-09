<?php
session_start();
include './database/DB.php';
$id = $_SESSION["id"];
// $_SESSION['cart'] = 0;
$count = count($_SESSION['cart']);
$cart = 0;
if ($count == 0) {
  $cart = 0;
} else {
  $cart = $count;
}
$sql = "SELECT type, name FROM user WHERE user_id = '$id'";
        $result = $link->query($sql);
$name = "";
while($row = mysqli_fetch_row($result)) {
$name = $row['1'];
}
?>
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="account.php"><i class="icon fa fa-user"></i>My Account</a></li>
            <li><a href="my_cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="payment.php"><i class="icon fa fa-check"></i>Checkout</a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="index.php"> <img src="assets/images/logo.png" alt="logo"> </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form>
              <div class="control-group">
                <input class="search-field" type="text" style="width:100%; border-radius:0" placeholder="Search here..." />
                <!-- <a class="btn btn-warning" style=" border-radius:0" href="#"> Search </a> -->
              </div>
              <div class="result"></div>
            </form>
          </div>


          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count"><?php echo "$cart"; ?></span></div>
              <div class="total-price-basket"> <span class="lbl">cart </span>View</div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="cart-item product-summary">
                  <div class="row">
                    <?php
                      if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                      $total = 0;
                      foreach($_SESSION['cart'] as $med_id => $quantity) {
                      $s = "SELECT med_name,med_desc,price,quantity,med_id FROM medicine WHERE med_id = $med_id";
                      $result = $link->query($s);
                      while($row = mysqli_fetch_row($result)) {
                      $cost = $row['2'] * $quantity;
                      $total = $total + $cost; ?>
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.php?id=<?php echo $row[4];  ?>"><img src="assets/images/cart.jpg" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="detail.php?id=<?php echo $row[4];  ?>"><?php echo $row['0']; ?></a></h3>
                      <div class="price">Rs. <?php echo $cost; ?></div>
                    </div>
                    <div class="col-xs-1 action">
                      <a href="#"><i class="fa fa-trash"></i></a>
                      <hr>
                    </div>
                    <hr>
                  <?php  }
                    }
                    ?>

                  </div>


                  <!-- </div> -->
                <!-- /.cart-item -->
                <div class="clearfix"></div>

                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>Rs. <?php echo $total; ?></span> </div>
                  <div class="clearfix"></div>
                  <a href="checkout.php" class="btn btn-upper btn-primary btn-block m-t-20">View Cart</a> </div>
                <!-- /.cart-total-->
              <?php
              } else { ?>
                <div class="conatiner">
                  <h4 class="text-center"><a href="#">Your cart is empty!</a></h4>
                </div>

              <?php }
              ?>
              </li>

            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="index.php" class="dropdown-toggle">Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="products.php" class="dropdown-toggle">Medicines</a>

                </li>

                <li class="dropdown">
                  <a href="products.php?type=generic" >Generic</a>
                </li>
                <li class="dropdown hidden-sm">
                  <a href="my_cart.php">My Cart</a>
                </li>
                <li class="dropdown hidden-sm">
                  <a href="payment.php">Checkout</a>
                </li>
               <li class="dropdown  navbar-right special-menu">
                 <a href="logout.php">Logout</a>
               </li>
               <li class="dropdown navbar-right">
                 <a href="view_profile.php"><?php echo $name; ?>'s profile</a>
               </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>
