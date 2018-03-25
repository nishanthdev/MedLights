<?php
session_start();
include './database/DB.php';

if(isset($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $sql = "SELECT type, name FROM user WHERE user_id = '$id'";
        $result = $link->query($sql);
$name = "";
while($row = mysqli_fetch_row($result)) {
$name = $row['1'];
}
} else {
  $name = "Guest";
}
?>
<header class="header-style-1">
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
                   <?php 

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
$cart = 0;
if ($count == 0) {
  $cart = 0;
} else {
  $cart = $count;
}
} else {
$cart = 0;
}?>
         <?php if(isset($_SESSION['id'])) { ?>
          <ul class="list-unstyled">
            <li><a href="view_profile.php"><i class="icon fa fa-user"></i>My Account</a></li>
            <li><a href="my_cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <?php if ($cart > 0) {
                ?>
            <li><a href="payment.php"><i class="icon fa fa-check"></i>Checkout</a></li>
          <?php } ?>
          </ul>
          <?php } ?>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <div class="logo"> <a href="index.php"> <h1 style="color: white; margin-top: 0;"><strong>MediLights</strong></h1> </a> </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <div class="search-area">
            <form>
              <div class="control-group search-box">
                <input class="search-field" type="text" style="width:100%; border-radius:0" placeholder="Search here..." />
              <div class="result"></div>
              </div>
            </form>
          </div>
          <style type="text/css">
    .search-box{
        position: relative;
        font-size: 14px;
    }
 
    .result{
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .result{
        width: 100%;
        box-sizing: border-box;
    }
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
          </style>
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){

        var inputVal = $(this).val();

        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){

                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });

    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
           </div>
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
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
                      $s = "SELECT med_name,med_desc,price,quantity,med_id,pic FROM medicine WHERE med_id = $med_id";
                      $result = $link->query($s);
                      while($row = mysqli_fetch_row($result)) {
                      $cost = $row['2'] * $quantity;
                      $total = $total + $cost; ?>
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.php?id=<?php echo $row[4];  ?>"><img src="./admin/meds/<?php echo $row['5']; ?>" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="detail.php?id=<?php echo $row[4];  ?>"><?php echo $row['0']; ?></a></h3>
                      <div class="price">Rs. <?php echo $cost; ?></div>
                    </div>
                    <div class="col-xs-1 action">
                      <hr>
                    </div>
                    <hr>
                  <?php  }
                    }
                    ?>
                  </div>
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>Rs. <?php echo $total; ?></span> </div>
                  <div class="clearfix"></div>
                  <a href="my_cart.php" class="btn btn-upper btn-primary btn-block m-t-20">View Cart</a> </div>
              <?php
              } else { ?>
                <div class="conatiner">
                  <h4 class="text-center"><a href="#">Your cart is empty!</a></h4>
                </div>

              <?php }
              ?>
              </li>

            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

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
                <li class="dropdown yamm-fw"> <a href="index.php" class="dropdown-toggle">Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="products.php" class="dropdown-toggle">Medicines</a>

                </li>

                <li class="dropdown">
                  <a href="products.php?type=generic" >Generic</a>
                </li>
                <li class="dropdown hidden-sm">
                  <a href="my_cart.php">My Cart</a>
                </li>
                <?php if ($cart > 0) {
                ?>
                <li class="dropdown hidden-sm">
                  <a href="payment.php">Checkout</a>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['id'])) { ?>
               <li class="dropdown  navbar-right special-menu">
                 <a href="logout.php">Logout</a>
               </li>
               <li class="dropdown navbar-right">
                 <a href="view_profile.php"><?php echo $name; ?>'s profile</a>
               </li>
               <li class="dropdown hidden-sm">
                  <a href="doctor_list.php">Messaging</a>
                </li>
               <?php } else {
                 ?>
                 <li class="dropdown  navbar-right special-menu">
                 <a href="login.php">Login</a>
               </li>
               <li class="dropdown navbar-right">
                 <a href="login.php"><?php echo $name; ?></a>
               </li>
               <?php } ?>
              </ul>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
