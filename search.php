<?php
$mysqli = new mysqli("localhost", "root", "", "ogp");
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if(isset($_REQUEST['term'])){
    $sql = "SELECT med_id,med_name FROM medicine WHERE med_name LIKE ?";

    if($stmt = $mysqli->prepare($sql)){

        $stmt->bind_param("s", $param_term);

        $param_term = $_REQUEST['term'] . '%';

        if($stmt->execute()){
            $result = $stmt->get_result();

            if($result->num_rows > 0){

                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    echo "<ul class='list-group'>
                          <li class='list-group-item'>
                          <a href='detail.php?id=".$row["med_id"]."'>" . $row["med_name"] . "</li>";
                }
            } else{
                echo "<ul class='list-group'>
                      <li class='list-group-item'>No results found</li>";
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
