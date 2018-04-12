<?php
include("../database/DB.php");
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
	$name = $_POST['cat_name'];
  $desc = $_POST['cat_desc'];

	$query="update category set cat_name='$name',cat_desc='$desc' where cat_id='$id'";
	if ($result=$link->query($query) === TRUE) {
    echo "New record created successfully";
		header('Location:cat_home.php?action=edited');
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}

}
 ?>
