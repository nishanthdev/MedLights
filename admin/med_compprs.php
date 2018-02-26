<?php

include("../database/DB.php");
session_start();
if(isset($_POST['submit'])) {
	$comp = implode(',', $_POST['comp']);
  $med_name = $_POST['med_name'];
  $select = "select med_id from medicine where med_name='$med_name'";
	echo "$med_name";
  $sql=$link->query($select);
  $med_id="";
  while($row = mysqli_fetch_row($sql))
  {
    $med_id = $row['0'];
  }
	$query="Insert into med_comp(med_id,comp_id) values('$med_id','$comp')";
	$result=$link->query($query);
    echo "$med_id";
		echo "$comp";
		header('Location:med_home.php?action=added');
}

 ?>
