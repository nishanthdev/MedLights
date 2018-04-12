<?php
include "../database/DB.php";
	$id = $_GET['id'];
	$query = "delete from category where cat_id=$id";
	$result = $link->query($query);
	header("location: cat_home.php?action=deleted");
?>
