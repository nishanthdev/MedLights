<?php
include("../database/DB.php");
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
	$name = $_POST['comp_name'];
  $desc = $_POST['comp_desc'];

	$query="update composition set comp_name='$name', composition='$desc' where comp_id='$id'";
	if ($result=$link->query($query) === TRUE) {
    echo "New record created successfully";
		header('Location:comp_home.php?action=edited');
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}

}
 ?>
