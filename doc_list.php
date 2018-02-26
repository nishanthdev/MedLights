<?php
include "./database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:login.php');
} else {
  echo "logged in";
}
$query ="SELECT * from user where type='doctor'";
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
				<h1 class="display-3 text-center">Doctor List</h1>
			</div>
			<a href="../admin/admin_home.php">Dashboard</a>

			<div class="">
				<div >
					<div class="container">
					<table border="1" class="table table-bordered table-fluid">
						<tr>
							<th>Name</th>
	            			<th>Qualification</th>
							<th colspan=2>Action</th>
						</tr>
					<?php while($row = mysqli_fetch_row($result))
					{ ?>
						<tr>
							<td><?php echo $row['1']; ?></td>
							<td><?php echo $row['2']; ?></td>
							<td><a href="view_profile.php?id=<?php echo $row['0']; ?>" class="btn btn-success">View Profile</a></td>
							<td><a href="Send_message.php?id=<?php echo $row['0']; ?>" class="btn btn-success">Message</a></td>
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
