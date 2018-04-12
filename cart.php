<?php 
include "./database/DB.php";
session_start();

$med_id = $_GET['id'];
$action = $_GET['action'];

if($action === 'empty') {
  $_SESSION["cart"] = null;
}
$sql = "SELECT quantity FROM medicine WHERE med_id =$med_id";
$result = $link->query($sql);

while($row = mysqli_fetch_row($result)) {
    switch($action) {
      case "add":
      if($_SESSION['cart'][$med_id]+1 <= $row['0'])
        $_SESSION['cart'][$med_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$med_id]--;
      if($_SESSION['cart'][$med_id] == 0)
        unset($_SESSION['cart'][$med_id]);
        break;
    }
  }



header("location:my_cart.php");

 ?>