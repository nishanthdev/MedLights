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
      <title>Login</title>
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
        <li><a href="home.html">Home</a></li>
        <li class='active'>Login</li>
      </ul>
    </div>
  </div>
</div>
<div class="body-content">
  <div class="container">
    <div class="sign-in-page">
      <div class="row">
      
<div class="col-md-6 col-sm-6 sign-in">
  <?php      
  if (isset($_GET['action'])) {
                if ($_GET['action']=='error') {
                  echo '<div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Invalid username or password.</div>';
                }
              if ($_GET['action']=='success') {
                echo '<div class="alert alert-danger alert-dismissible .fade" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Account was created successfully. Please login.</div>';
              }
            } ?>
  <h4 class="">Sign in</h4>
  <p class="">Hello, Welcome to MediLights!.</p>
  <form class="register-form outer-top-xs" id="login" action="loginprs.php" method="post" >
    <div class="form-group">
        <label class="info-title">Username <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" name="username" data-validation="alphanumeric required" data-validation-allowing="-_" required data-validation-error-msg="Please enter valid username.">
    </div>
      <div class="form-group">
        <label class="info-title">Password <span>*</span></label>
        <input type="password" class="form-control unicase-form-control text-input" name="password" data-validation="required" required data-validation-error-msg="Please enter the password." required>
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

<div class="col-md-6 col-sm-6 create-new-account">
  <h4 class="checkout-subtitle">Create a new account</h4>
  <p class="text title-tag-line">Create your new account.</p>
  <form class="register-form outer-top-xs" id="signup" action="reg_userprs.php" method="post">
  
        <div class="form-group">
        <label class="info-title">Full Name <span>*</span></label>
        <input type="text" required class="form-control unicase-form-control text-input" name="name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$" data-validation-allowing=" " required>
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
        <label class="info-title">Address <span>*</span></label> <span id="max-length-element">250</span> chars left
         <textarea class="form-control unicase-form-control text-input" name="address" data-validation="custom length" data-validation-length="min10 250" data-validation-regexp="^([a-zA-Z0-9 ,]+)$" data-validation-allowing=" " id="the-textarea" rows="1" required data-validation-error-msg="Please enter a valid address"></textarea>
      </div>
      <div class="form-group">
        <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
        <input type="email" required class="form-control unicase-form-control text-input" required name="email" data-validation="email" required data-validation-error-msg="Please enter a valid email.">
      </div>
       <div class="form-group">
        <label class="info-title" for="exampleInputEmail2">Username <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" name="username" data-validation="alphanumeric" data-validation-allowing="-_" required data-validation-error-msg="Please choose a valid username.">
      </div>
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
        <input type="text" class="form-control unicase-form-control text-input" name="pnumber" data-validation="number" data-validation-error-msg="Please enter a valid phone number." required>
    </div>
        <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
        <input type="password" class="form-control unicase-form-control text-input" name="password" required data-validation-strength="2" data-validation="length alphanumeric" data-validation-length="min6" data-validation-error-msg="Password should be between 6-12 charcters, only alphanumaric charecters...!">
    </div>
         <div class="form-group">
        <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
        <input type="password" class="form-control unicase-form-control text-input"  name="cpassword">
    </div>
      <input class="btn btn-primary" type="submit" name="submit" value="Sign up">
  </form>
  
</div>  
</div>
    </div>
     </div>
</div>
<?php include 'footer.php'; ?>
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/jquery.form-validator.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/echo.min.js"></script>
  <script src="assets/js/jquery.easing-1.3.min.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script type="text/javascript">
   $.validate({
    form : '#signup'
  });
   $('#the-textarea').restrictLength( $('#max-length-element') );
  </script>
 <script type="text/javascript">
   $.validate({
    form : '#login'
  });
  </script>
</body>
</html>
