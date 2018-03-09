<?php

include './database/DB.php';
session_start();
include './api/navbar.php';

$mysqli = new mysqli("localhost", "root", "", "ogp");
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?> 
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<?php

if(isset($_REQUEST['term'])){
  $term = $_REQUEST['term'];

  ?> <hr>
<h1 class="text-center">Searching for term: <b><?php echo $term; ?></b></h1> <br>
<div class="container">

  <?php
    $sql = "SELECT * FROM medicine WHERE med_name LIKE ?";

    if($stmt = $mysqli->prepare($sql)){

        $stmt->bind_param("s", $param_term);

        $param_term = $_REQUEST['term'] . '%';

        if($stmt->execute()){
            $result = $stmt->get_result();

            if($result->num_rows > 0){

                while($row = $result->fetch_array(MYSQLI_ASSOC)){

                  ?>
                  <div class="card">
                    <div class="card-body">
                  <p>Medicine Name: <?php echo $row['med_name']; ?></p>
                  <p>Medicine Description: <?php echo $row['med_desc']; ?></p>
                  <p>Price: <?php echo $row['price']; ?></p>
                  <a class="btn btn-primary" href="med_view.php?id=<?php echo $row['med_id'];?>">View</a>
                    </div>
                  </div>
                  <?php
                }
            } else{
                echo "No records found...!";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

    // Close statement
    $stmt->close();
}

// Close connection
$mysqli->close();
?>
</div>
</body>
</html>