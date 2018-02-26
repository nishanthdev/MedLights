<?php 	include './database/DB.php';
	session_start();
	include './assets/navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <div class="jumbotron">
<h1 class="text-center display-3">Payments</h1>
</div>
<div class="container">
  <div class="card">
    <div class="container">
      <div class="card-body">
<h2 class="display-5 text-center">Items in cart</h2>
<hr>
	<?php

	if(isset($_SESSION['cart'])) {

            $total = 0;
            foreach($_SESSION['cart'] as $med_id => $quantity) {
              $sql = "SELECT med_name,med_desc,price,quantity FROM medicine WHERE med_id = $med_id";
            $result = $link->query($sql);

              while($row = mysqli_fetch_row($result)) {
                $cost = $row['2'] * $quantity;
                $total = $total + $cost;
                $med_name = $row['0']; ?>
       <p>Name: <?php echo $med_name; ?></p>
      <p>Quantity: <?php echo $quantity; ?></p>
      <p>Cost: <?php echo $cost; ?></p>
      <hr>
      <?php
          }
        }
      ?>
      <p>Total amount: <?php echo $total; ?></p>
      <?php
      $_SESSION['total_amount'] = $total;
      }
      ?>
            </div>
    </div>
 </div>
 </div>
<hr>
<div class="container">
<div class="card">
  <p>Select a payment portal:</p>
  <hr>
  <form action="payment_prs.php" method="post">
    <label>Cash On Delivery: </label>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#codModal"> Select
  </button>  <hr>
     <label>Online Banking:</label> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#onlineModal">
  Select
</button> </label>   <hr>
    <label>Debit/Credit Cards: </label> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#debitModal">
  Select
</button> <hr>
    <!-- <input type="submit" name="submit" value="check out"> -->
  </form>


<!-- Modal -->
<div class="modal fade" id="codModal" tabindex="-1" role="dialog" aria-labelledby="codModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="codModalLabel">Cash on delivery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <?php

        $sql = "select name,address,phone from user where user_id=$id";
        $result = $link->query($sql);

        while($row = mysqli_fetch_row($result)) {
        ?>
       The items will be delivered to
      <p>Name: <?php echo $row['0']; ?></p>
      <p>Address: <?php echo $row['1']; ?></p>
      <p>Phone: <?php echo $row['2']; ?></p>
			<label for="amount">Total Amount: Rs. <?php echo $total; ?>/- </label>
      <?php } ?>
      <form class="form-group" action="payment_prs.php" method="post">
        <input type="hidden" name="type" value="cod">
        <input type="submit" name="submit" class="btn btn-primary" value="Proceed">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="onlineModal" tabindex="-1" role="dialog" aria-labelledby="onlineModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="onlineModalLabel">Online Banking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
         <form action="payment_prs.php" class="form-group" method="post">
					 <input type="hidden" name="total" value="<?php echo $total; ?>">
					 <label for="amount">Total Amount: Rs. <?php echo $total; ?>/- </label> <br>
        <label>Select a Bank</label>
        <select name="Bank" class="form-control">
          <option value="debit">Bank 1</option>
          <option value="credit">Bank 2</option>
        </select>
        <label>Username</label>
         <input class="form-control" type="text" name="uname">
         <label>Password:</label>
         <input type="password" class="form-control" name="password">
        <hr>
        <input type="hidden" name="type" value="ob">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <input type="hidden" name="id" value="<?php echo $total; ?>">
        <input type="submit" name="submit" class="btn btn-primary" value="Proceed">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="debitModal" tabindex="-1" role="dialog" aria-labelledby="debitModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">   <form action="payment_prs.php" class="form-group" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="debitModalLabel">Debit Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
       <form action="payment_prs.php" class="form-group" method="post">
				 <label for="amount">Total Amount: Rs. <?php echo $total; ?>/- </label> <br>
        <label>Select a Card</label>
        <select name="cards" class="form-control">
          <option value="debit">Debit Card</option>
          <option value="credit">Credit card</option>
        </select>
        <label>Card Number</label>
         <input class="form-control" type="number" name="card_no">
         <label>Card Pin:</label>
         <input type="password" class="form-control" name="pin">
            <hr>
        <input type="hidden" name="type" value="card">
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <input type="hidden" name="total" value="<?php echo $total; ?>">
        <input type="submit" name="submit" class="btn btn-primary" value="Proceed">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php // include './assets/footer.php'; ?>
</body>
<style media="screen">
.card {
	padding: 1em;
	border-radius: 20px;
}
button {
	float: right;
}
</style>
</html>
