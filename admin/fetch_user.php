<?php
$connect = mysqli_connect("localhost", "root", "", "ogp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM user 
	WHERE name LIKE '%".$search."%'
	OR username LIKE '%".$search."%' 
	OR type LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM user ORDER BY user_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Username</th>
							<th>Type</th>
							<th colspan="2">Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["gender"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["phone"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["type"].'</td>
				<td><a href="user_edit.php?id='.$row["user_id"].'" class="btn btn-success">Edit</a></td>
				<td><a href="user_delete.php?id='.$row["user_id"].'" class="btn btn-danger">Delete</a></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>