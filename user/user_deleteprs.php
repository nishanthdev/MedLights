<?php
include "../database/DB.php";
	$id = $_GET['id'];
	$query = "delete from user where user_id=$id";
	$result = $link->query($query);
	header("location: user_home.php");
?>
