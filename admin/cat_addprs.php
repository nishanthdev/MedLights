<?php

include("../database/DB.php");
if(isset($_POST['submit'])) {
	$name = $_POST['cat_name'];
  $desc = $_POST['cat_desc'];

	$query="Insert into category(cat_name,cat_desc) values('$name','$desc')";
	if ($result=$link->query($query) === TRUE) {
    echo "New record created successfully";
		header('Location:cat_home.php?action=added');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

 ?>
