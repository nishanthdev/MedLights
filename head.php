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
<!--             <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
 -->            <li><a href="my_cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="payment.php"><i class="icon fa fa-check"></i>Checkout</a></li>
            <!-- <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li> -->
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
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Computer</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                    </ul>
                  </li>
                </ul>
                <input class="search-field" placeholder="Search here..." />
                <a class="search-button" href="#" ></a> </div>
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
                    <?php  if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            $total = 0;
                      foreach($_SESSION['cart'] as $med_id => $quantity) {
                      $sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
                      $result = $link->query($sql);
                      while($row = mysqli_fetch_row($result)) {
                     $cost = $row['2'] * $quantity;
                     $total = $total + $cost; ?>
                    <div class="col-xs-4">
                    <div class="image"> <a href="my_cart.php"><img src="assets/images/cart.jpg" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="#"><?php echo $row['0']; ?></a></h3>
                      <div class="price"><?php echo $cost; ?></div>
                    </div>
                    <!-- <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div> -->
                  </div>
                </div>
                <?php }
                }
                }else { ?>
                      <!-- <div class="col-xs-7"> -->
                      <h3 class="name"><a href="#">Your cart is empty!</a></h3>
                    <!-- </div> -->
                <?php }
                ?>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <!-- <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div> -->
                  <div class="clearfix"></div>
                  <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
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
                <li class="active dropdown yamm-fw"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Medicines</a>
                 
                </li>

                <li class="dropdown mega-menu"> 
                <a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Generic</a>
                </li>
                <li class="dropdown hidden-sm"> <a href="category.html">Contact Us</a> </li>
                <li class="dropdown hidden-sm"> <a href="category.html">My Cart</a> </li>
                <li class="dropdown"> <a href="contact.html"><?php echo $name; ?>'s profile</a> </li>
                <li class="dropdown"> <a href="contact.html">Messages</a> </li>
                <li class="dropdown"> <a href="contact.html">Logout</a> </li>
               <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
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