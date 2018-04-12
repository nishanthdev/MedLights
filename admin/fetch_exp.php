<?php
$connect = mysqli_connect("localhost", "root", "", "ogp");
$output = '';

	$query = "SELECT * FROM medicine where exp_date <= now() ORDER BY med_id asc";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Medicine Name</th>
							<th>Manucturing date</th>
							<th>Expiry date</th>
							<th>Brand</th>
							<th>Price</th>
							<th>Description</th>
							<th>Type</th>
							<th>Stock</th>
							<th colspan="2">Action</th>
						</tr>';
	while($r= mysqli_fetch_array($result))
	{
		$rmid = $r["med_id"];
		$output .= '
			<tr>
				<td>'.$r["med_name"].'</td>
				<td>'.$r["man_date"].'</td>
				<td>'.$r["exp_date"].'</td>
				<td>'.$r["brand"].'</td>
				<td>'.$r["price"].'</td>
				<td>'.$r["med_desc"].'</td>
				<td>'.$r["type"].'</td>
				<td>'.$r["quantity"].'</td>
				<td><a href="med_edit.php?id='.$rmid.'" class="btn btn-success">Edit</a></td>
				<td><a href="med_delete.php?id='.$rmid.'" class="btn btn-danger">Delete</a></td>
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