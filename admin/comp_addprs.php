<?php

include("../database/DB.php");
if(isset($_POST['submit'])) {
	$name = $_POST['comp_name'];
  $desc = $_POST['comp_desc'];

	$query="Insert into composition(comp_name,composition) values('$name','$desc')";
	if ($result=$link->query($query) === TRUE) {
    echo "New record created successfully";
		header('Location:comp_home.php');
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}

}

 ?>
