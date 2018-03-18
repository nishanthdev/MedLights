<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');
} else {
  if ($_SESSION['type']=='admin') {
    echo "logged in";
  } else {
    echo "<script>alert('You are not admin'); window.location='../login.php';</script>";
  }
}
$query ="select * from composition";
$result = $link->query($query);
?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Display</title>
		</head>
		<body>
			<div class="jumbotron">
				<h1 class="display-3 text-center">Composition</h1>
			</div>
			<a href="../admin/admin_home.php">Dashboard</a>
			<br>

			<div class="">
				<div >
					<div class="container">

					<table border="1" class="table table-bordered table-fluid">
						<tr>
							<th>Name</th>
							<th>composition</th>
							<th colspan="2">Action</th>
						</tr>
					<?php while($row = mysqli_fetch_row($result))
					{ ?>
					<tr>
						<td><?php echo $row['1']; ?></td>
						<td><?php echo $row['2']; ?></td>
						<td><a href="comp_edit.php?id=<?php echo $row['0']; ?>" class="btn btn-success">Edit</a></td>
						<td><a href="comp_delete.php?id=<?php echo $row['0']; ?>" class="btn btn-success">Delete</a></td>
					</tr>
				<?php 	}
					$link->close();
				 ?>
					</table>
        </div> <br>
					<a href="comp_add.php">Add</a>
				</div>
			</div>
		</body>
	</html>
