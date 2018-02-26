<?php 

include './database/DB.php';
session_start();
include './assets/navbar.php';

#--------------------------------------------------------------------------------------------------------------------------
// $bill_num = $_SESSION['bill_num'];
$bill_num = 10001;
// echo "$bill_num";
foreach($_SESSION['cart'] as $med_id => $quantity) {
// echo " med_id: $med_id <br>";
// echo "quantity: $quantity<br>";
$sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
$result = $link->query($sql);
$cost ="";
$qty = "";
while($row = mysqli_fetch_row($result)) {
 $cost = $row['2'] * $quantity;
 // echo "cost: $cost";
 $qty = $row['3'];
 $qty = $qty-$quantity;
}
$sales_id="";
$sql1 = "SELECT sales_id FROM sales WHERE bill_num = $bill_num";
$result1 = $link->query($sql1);
while($row = mysqli_fetch_row($result1)) {
$sales_id = $row['0'];
}
$sql = "INSERT INTO `sales_desc`(`sales_id`, `med_id`, `quantity`, `price`) VALUES ('$sales_id','$med_id','$quantity','$cost')";
$result1 = $link->query($sql);


$add = "UPDATE `medicine` SET quantity=$qty where med_id=$med_id";
$result2 = $link->query($add);

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="jumbotron">
<h1 class="text-center display-4">Purchase Successful...!</h1>
</div>
</body>
</html>