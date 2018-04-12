<?php
$connect = mysqli_connect("localhost", "root", "", "ogp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM composition 
	WHERE comp_name LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM composition ORDER BY comp_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Composition Name</th>
							<th>Composition</th>
							<th colspan="2">Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["comp_name"].'</td>
				<td>'.$row["composition"].'</td>
				<td><a href="comp_edit.php?id='.$row["comp_id"].'" class="btn btn-success">Edit</a></td>
				<td><a href="comp_delete.php?id='.$row["comp_id"].'" class="btn btn-danger">Delete</a></td>
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