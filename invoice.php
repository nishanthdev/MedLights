<?php 
if (isset($_POST['submit'])) {
	 $_SESSION["cart"] = null;
	header('location:products.php');
}
 ?>