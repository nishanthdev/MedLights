<?php
include "../database/DB.php";
	$id = $_GET['id'];
	$query = "delete from medicine where med_id=$id";
	$result = $link->query($query);
	header("location: med_home.php?action=deleted");
?>
