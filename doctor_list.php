<?php 
include "./database/DB.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>MedLights</title>

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
<?php include "./head.php"; 

// session_start();
if(!isset($_SESSION['state']))
{
  header('Location:login.php');
} else {
  // echo "logged in";
}

?>
<!-- ============================================== HEADER ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Doctors</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <?php 
      // $sql = "select DISTINCT reciever from message where sender = '$userid'";
      // $results = $link->query($sql);
      //  while ($row = mysqli_fetch_assoc($results)) {
      //   $reciever = $row['reciever'];
        ?>
      <!-- <ul class="list-group"> -->
        <?php 
        $select = "select user_id,username from user where `type` = 'doctor'";
        $res = $link->query($select);
        while ($row = mysqli_fetch_row($res)) {
                
        ?>
        <li class="dropdown menu-item"><a href="doctor_list.php?id=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></li>
              <?php } 
            ?>  
              </ul>
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ============================================== SPECIAL OFFER ============================================== -->
       
        <!-- <div class="home-banner"> <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> </div> -->
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
   <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div class="panel" style="padding: 10px;">
        	
          <?php if (!isset($_GET['id'])) { 


            ?>
          <div>
			     <h1 class="display-3 text-center">No Messages</h1>        		
        	</div>
        </div>  
        <?php } else { ?>
        <div>
          <?php 
          $mid = $_GET['id'];
          $uname = $_SESSION['username'];
          $m = "SELECT * FROM `user` where username = '" . $uname . "'";
          $res = $link->query($m);
          while ($row = mysqli_fetch_row($res)) {
          $uid = $row[0];
          } ?>
          <?php 
          $m1 = "select body,sender,reciever,sent_at from message where sender = '$uid' or reciever = '$uid' ORDER BY sent_at ASC";
           $res = $link->query($m1);
           while($row = mysqli_fetch_assoc($res)) {
           
           if ($uid ==$row['sender']) {
           ?>
           <div class="well" style="background-color: lightblue; border-radius: 1em; color: white;margin-left: 50%;text-align: right;">
            <h4><?php echo $row['body']; ?></h4>
            <p style="float: left;"><?php echo $row['sent_at']; ?></p>
          </div>
        <?php 
          } 

          else {
            ?>
          <div class="well"  style="background-color: lightgreen; border-radius: 1em; color: white; margin-right: 50%;text-align: left;">
            <h4><?php echo $row['body']; ?></h4>
            <p style="float: right;"><?php echo $row['sent_at']; ?></p>
          </div>    
            <?php
          }
      }
      ?>
      <hr>
              <form class="form-group" method="post">
            <div class="form-inline">
            <input type="text" style="width: 90%;" name="message" class="form-control">
            <input type="hidden" name="sender" value="<?php echo $uid; ?>">
            <input type="hidden" name="reciever" value="<?php echo $mid; ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="send">
            </div>
            </form>
      <?php
      } ?>
      </div>
      </div>
      <!-- /.homebanner-holder --> 
      <!-- ============================================== CONTENT : END ============================================== --> 
    </div>
    
  </div>
  <!-- /.container --> 

<?php 
if (isset($_POST['submit'])) {
$reciever = $_POST['reciever'];
$sender = $_POST['sender'];
$body = $_POST['message'];
$query="INSERT INTO `message`(`body`, `sender`, `reciever`) VALUES ('$body','$sender','$reciever')";
        if ($result=$link->query($query) == TRUE) {
    echo '<script>window.location="doctor_list.php";</script>';
}
}
 ?>


<!--  -->
</div>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Contact Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>Example address</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>+(888) 123-4567<br>
                    +(888) 456-7890</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#">medlights@themesground.com</a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Customer Service</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="Contact us">My Account</a></li>
              <li><a href="#" title="About us">Order History</a></li>
              <li><a href="#" title="faq">FAQ</a></li>
              <li><a href="#" title="Popular Searches">Specials</a></li>
              <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Corporation</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="#">About us</a></li>
              <li><a title="Information" href="#">Customer Service</a></li>
              <li><a title="Addresses" href="#">Company</a></li>
              <li><a title="Addresses" href="#">Investor Relations</a></li>
              <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Why Choose Us</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
              <li><a href="#" title="Blog">Blog</a></li>
              <li><a href="#" title="Company">Company</a></li>
              <li><a href="#" title="Investor Relations">Investor Relations</a></li>
              <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-bar">
    <div class="container">

      <div class="col-xs-12 col-sm-6 no-padding">
        <div class="clearfix payment-methods">
          <ul>
            <li><img src="assets/images/payments/1.png" alt=""></li>
            <li><img src="assets/images/payments/2.png" alt=""></li>
            <li><img src="assets/images/payments/3.png" alt=""></li>
            <li><img src="assets/images/payments/4.png" alt=""></li>
            <li><img src="assets/images/payments/5.png" alt=""></li>
          </ul>
        </div>
        <!-- /.payment-methods --> 
      </div>
    </div>
  </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
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