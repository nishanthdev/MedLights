<?php
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

while($row = mysqli_fetch_row($result)) {

?>
<head>
	<title>Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">OGP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
        <?php
        if ($row[0]=='regular') {
          ?>
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="my_cart.php">My Cart <?php echo "($cart)"; ?></a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo "$row[1]"; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href='./view_profile.php?id=<?php echo "$id"; ?>'>Profile</a>
            <a class="dropdown-item" href="./messages.php">Messages</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./logout.php">Logout</a>
          </div>
          </li>
            <!-- <li><a class="item" href="#">Wish list</a></li> -->
    <?php 
  } 
  elseif($row[0]=='doctor') 
  {
     ?>
       <li class="nav-item"><a class="nav-link"  href="../doctor/doc_home.php">Home</a></li>
       <li class="nav-item"><a class="nav-link"  href='../view_profile.php?id=<?php echo "$id"; ?>'><?php echo "$row[1]"; ?>'s Profile</a></li>
       <li class="nav-item"><a class="nav-link" href="../messages.php">Messages</a></li>
       <li class="nav-item"><a class="nav-link" href="#">Notification</a></li>
       <li class="nav-item"><a class="dropdown-item" href="../logout.php">Logout</a></li>
   <?php }
    else 
    {
   ?>
       <li class="nav-item"><a class="nav-link" href="../admin/admin_home.php">Home</a></li>
       <li class="nav-item"><a class="nav-link"  href='../view_profile.php?id=<?php echo "$id"; ?>'><?php echo "$row[1]"; ?>'s Profile</a></li>
       <li class="nav-item"><a class="nav-link" href="#">Notification</a></li>
       <li class="nav-item"><a class="dropdown-item" href="../logout.php">Logout</a></li>
 <?php }
      } ?>
</ul>
</div>
</nav>
