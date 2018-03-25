<?php
$connect = mysqli_connect("localhost", "root", "", "ogp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM category 
	WHERE cat_name LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM category ORDER BY cat_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Category Name</th>
							<th>Category Description</th>
							<th colspan="2">Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["cat_name"].'</td>
				<td>'.$row["cat_desc"].'</td>
				<td><a href="cat_edit.php?id='.$row["cat_id"].'" class="btn btn-success">Edit</a></td>
				<td><a href="cat_deleteprs.php?id='.$row["cat_id"].'" class="btn btn-danger">Delete</a></td>
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