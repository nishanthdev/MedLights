<?php
include "../database/DB.php";
	$id = $_GET['id'];
	$query = "delete from purchase where purch_id=$id";
	$result = $link->query($query);
	header("location: purchase.php?action=deleted");
?>
