<?php
include './database/DB.php';
// #---------------------> Selecting data from database<----------
// $s = "Select man_date,exp_date from medicine where med_id = 4";
// $r = $link->query($s);
// #--------------------------> Fetching the results <---------------
// while ($a = mysqli_fetch_assoc($r)) {
//   $expdate = $a['exp_date'];
//   $mandate = $a['man_date'];
// }
// #---------------> Converting dates from string to time <------
// $bdate = strtotime($mandate);
// $edate = strtotime($expdate);
// $datediff = $edate - $bdate;
// #----------------> Displaying the result <---------------------
// echo "Start date: " . $mandate . "<br>";
// echo "End date: ". $expdate . "<br>";
// echo "Difference in days: " . round($datediff / (60 * 60 * 24));
#--------------------------------------------------------------
 ?>
<?php
// include './database/DB.php';
// session_start();
// include './assets/navbar.php';
?>
<!-- <head>
	<title>Payment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head> -->
    <!-- <div class="container" style="margin-top:10px;">
      <div class=""> -->
        <?php
				//
        //   echo '<h3>Your Shopping Cart</h3>';
        //   echo "<hr>";
        //     echo '<div align="right"><a href="cart.php?action=empty" class="btn btn-danger">Empty Cart</a>&nbsp;<a href="index.php" class="btn btn-info">Continue Shopping</a></div> <br> ';
        //   if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
				//
        //     $total = 0;
				//
        //     foreach($_SESSION['cart'] as $med_id => $quantity) {
        //       $sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
        //     $result = $link->query($sql);
        //     echo '<div class="card" style="border-radius:1em;">';
        //     echo "<div class='container'>";
        //     echo "<div class='card-body'>";
        //       while($row = mysqli_fetch_row($result)) {
        //         $cost = $row['2'] * $quantity;
        //         $total = $total + $cost;
				//
        //         echo '<h4>Name: '.$row['0'].'</h4>';
        //         echo '<h4>Quantity: '.$quantity.'&nbsp;</h4>';
        //         echo "<div style='float:right;'>";
        //         // echo "<label>Modify the quantity:<label>";
        //         echo '<a class="btn btn-warning" href="cart.php?action=add&id='.$med_id.'">+</a>  ';
        //         echo '<a class="btn btn-danger" href="cart.php?action=remove&id='.$med_id.'">-</a>';
        //         echo "</div>";
        //         echo '<h4>Cost: '.$cost.'</h4>';
        //         echo '</div>';
        //         echo '</div>';
        //         echo '</div><br>';
        //       }
        //     }
				//
        //   // echo '<td colspan="3" align="right"></td>';
        //   echo '<h4>Total Amount: '.$total.'</h4>';
				//
        //   echo '<br>';
				//
        //   if(isset($_SESSION['username'])) {
        //     echo '<a href="upload_presc.php"><button class="btn btn-primary" style="float:right;">Check Out</button></a>';
        //   }
        //   else {
        //     echo '<a href="login.php"><button class="btn btn-primary" style="float:right;">Login</button></a>';
        //   }
        //   echo '</div>';
        //   echo '</div>';
        // }
        // else {
        //   echo '<div class="alert alert-warning" role="alert">
        //         Your Cart is currently empty...!
        //         </div>
        //         ';
        // }
        //   echo '</div>';
        //   echo '</div>';
          ?>
  <!-- </body>
</html> -->



<?php 
$bill_num = '10000';
$sql = "SELECT MAX(bill_num) as bill FROM sales";
        $select = $link->query($sql);
        
        while ($row=mysqli_fetch_assoc($select)) {
            echo $row['bill'];
            if ($row['bill'] >= $bill_num) {
                $bill_num = $bill_num+1;
            }
        }
echo $bill_num;
 ?>