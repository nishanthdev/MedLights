 <?php
include "./database/DB.php";
 session_start();
 include './assets/navbar.php';
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  // echo "logged in";
}
$mid = $_GET['id'];
$qty = 0;
$comp = "";
$type = "";
$query = "SELECT medicine.*, med_comp.comp_id FROM medicine,med_comp where medicine.med_id = med_comp.med_id AND medicine.med_id = '$mid'";
$result = $link->query($query);

while($row = mysqli_fetch_assoc($result))
{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medicine</title>
  </head>
  <body>
    <div class="jumbotron">
    <h1 class="text-center display-4">Medicine Info</h1> 
    </div>
    <!-- <hr> -->

    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-3">
           <!-- <div class="card"> -->
        <div class="container">
          <!-- <div class="card-body"> -->
             <h4>Medicine Name:<?php echo $row['med_name']; ?></h4> 
              <h4>Brand: <?php echo $row['brand']; ?> </h4>
              <h4>Price: <?php echo $row['price']; ?> </h4>
              <h4>Description: <?php echo $row['med_desc']; ?> </h4>
              <h4>Type: <?php echo ucwords($row['type']); ?> </h4> <hr>
              <?php   
                  $type = $row['type'];
                  $comp = $row['comp_id'];
                  // echo $comp;
                  if($row['quantity'] > 0){
                                  echo '<a href="cart.php?action=add&id='.$row['med_id'].'" class="btn btn-primary">Add to cart</a> ';
                                  echo '<a href="" class="btn btn-info">Ask Doctor</a>';
                                }
                                else {
                                  echo '<h4 class="text-center" style="color:red;"> Out Of Stock!</h4>';
                                } ?>
                                
          <!-- </div> -->
        <!-- </div> -->
      </div>
        </div>
        <div class="col-md-6 mb-3">
           <?php }  ?>
        <?php 
          $sql="";
          $med  = "";
       if ($type == 'regular') {
        $sql = "SELECT medicine.med_id, medicine.med_name, medicine.price, med_comp.comp_id FROM medicine,med_comp where medicine.med_id = med_comp.med_id AND med_comp.comp_id = '$comp' AND medicine.type='generic'";
        $med = 'generic';
       } else {
        $sql = "SELECT medicine.med_id, medicine.med_name, medicine.price, med_comp.comp_id FROM medicine,med_comp where medicine.med_id = med_comp.med_id AND med_comp.comp_id = '$comp' AND medicine.type='regular'";
        $med = 'regular';
       }
      $result1 = $link->query($sql);
     ?>
     <div class="container">
     <h2><?php echo ucwords($med); ?> Alternatives</h2>
    <ul class="list-group">
      
      <?php 
    while($row = mysqli_fetch_assoc($result1))
    { ?>
      <li class="list-group-item"><a href="med_view.php?id=<?php echo $row['med_id'] ?>"><?php echo $row['med_name']; ?></a></li>
      <?php } ?>
      
    </ul>
</div>
        </div>
      </div>
     <hr style="border-width:5px; background-color: #00b894; ">
    </div>

       
<?php include './assets/footer.php'; ?>
  </body>
  <style media="screen">
    .card {
      border-radius: 25px;
    
    }
  </style>
</html>
