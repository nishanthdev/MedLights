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

      <title>Login</title>

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
        <li><a href="home.html">Home</a></li>
        <li class='active'>Login</li>
      </ul>
    </div><!-- /.breadcrumb-inner -->
  </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
  <div class="container">
    <div class="sign-in-page">
      <div class="row">
        <!-- Sign-in -->      
<div class="col-md-6 col-sm-6 sign-in">
  <h4 class="">Sign in</h4>
  <p class="">Hello, Welcome to MediLights!.</p>
  <form class="register-form outer-top-xs" id="login" action="loginprs.php" method="post" >
    <div class="form-group">
        <label class="info-title">Username <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" name="username">
    </div>
      <div class="form-group">
        <label class="info-title">Password <span>*</span></label>
        <input type="password" class="form-control unicase-form-control text-input" name="password">
    </div>
    <div class="radio outer-xs">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
        </label>
        <a href="auth.php" class="forgot-password pull-right">Forgot your Password?</a>
    </div>
    <input class="btn-upper btn btn-primary checkout-page-button" type="submit" name="submit" value="Login">
  </form>         
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
  <h4 class="checkout-subtitle">Create a new account</h4>
  <p class="text title-tag-line">Create your new account.</p>
  <form class="register-form outer-top-xs" id="signup" action="reg_userprs.php" method="post">
  
        <div class="form-group">
        <label class="info-title">Full Name <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" name="name" pattern="^([a-zA-Z)$" data-validation-allowing=" " required>
    </div>
      <div class="form-group">
        <label class="info-title">Gender <span>*</span></label>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="gender"  value="male" required> Male
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="gender" value="female"> Female
            </label>
          </div>
      </div>
       <div class="form-group">
        <label class="info-title">Address <span>*</span></label>
         <textarea class="form-control unicase-form-control text-input" name="address" id="address" rows="1" required></textarea>
      </div>
      <div class="form-group">
        <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
        <input type="email" class="form-control unicase-form-control text-input" name="email" data-validation="email" required>
      </div>
       <div class="form-group">
        <label class="info-title" for="exampleInputEmail2">Username <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" name="username" data-validation="alphanumeric" data-validation-allowing="-_" required>
      </div>
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
        <input type="number" class="form-control unicase-form-control text-input" name="pnumber" data-validation="number" required>
    </div>
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
        <input type="password" class="form-control unicase-form-control text-input" name="password" required  data-validation="strength" 
     data-validation-strength="2">
    </div>
         <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
        <input type="password" class="form-control unicase-form-control text-input"  name="cpassword"  data-validation="confirmation" data-validation-confirm="password">
    </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Sign up">
  </form>
  
</div>  
<!-- create a new account -->     </div><!-- /.row -->
    </div><!-- /.sigin-in-->
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
<!-- ============================================================= FOOTER : END============================================================= -->


  <!-- For demo purposes – can be removed on production -->
  
  
  <!-- For demo purposes – can be removed on production : End -->

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
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

  <!-- For demo purposes – can be removed on production -->
  
  
 

  <script type="text/javascript">
    $.validate({
  form : '#login , #signup',
    modules : 'security',
    onModulesLoaded : function() {
 
      // Show strength of password
      $('input[name="password"]').displayPasswordStrength();
    }
});
  </script>

</body>
</html>
