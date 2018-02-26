<?php
include "../database/DB.php";
	$id = $_GET['id'];
	$query = "delete from composition where comp_id=$id";
	$result = $link->query($query);
	header("location: comp_home.php?action=deleted");
?>
