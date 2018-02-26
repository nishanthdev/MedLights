<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  echo "logged in";
}
$query ="select * from user";
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
				<h1 class="display-3 text-center">Users</h1>
			</div>
			<a href="../admin/admin_home.php">Dashboard</a>

			<div class="">
				<div >
					<div class="container">
					<table border="1" class="table table-bordered table-fluid">
						<tr>
						<th>Name</th>
            <th>Gender</th>
						<th>Address</th>
						<th>Phone</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Type</th>
						<th colspan=2>Action</th>
					</tr>
					<?php while($row = mysqli_fetch_row($result))
					{ ?>
					<tr>
						<td><?php echo $row['1']; ?></td>
						<td><?php echo $row['2']; ?></td>
						<td><?php echo $row['3']; ?></td>
            <td><?php echo $row['4']; ?></td>
            <td><?php echo $row['5']; ?></td>
            <td><?php echo $row['6']; ?></td>
            <td><?php echo $row['7']; ?></td>
            <td><?php echo $row['8']; ?></td>
						<td><a href="user_edit.php?id=<?php echo $row['0']; ?>" class="btn btn-success">Edit</a></td>
						<td><a href="user_deleteprs.php?id=<?php echo $row['0']; ?>" class="btn btn-success">Delete</a></td>
					</tr>
				<?php 	}
					$link->close();
				 ?>
					</table>
					</div>
					<br>
					<a href="user_add.php">User Add</a>
				</div>
			</div>
		</body>
	</html>
