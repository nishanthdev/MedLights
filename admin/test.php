<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'ogp');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT * FROM user");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>ChartJS - BarGraph</title>
		<style type="text/css">
			#chart-container {
				width: 640px;
				height: auto;
			}
		</style>
	</head>
	<body>
		<div id="chart-container">
			<canvas id="mycanvas"></canvas>
		</div>

		<!-- javascript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
		<script type="text/javascript" >
			$(document).ready(function(){
	$.ajax({
		url: "http://localhost/ogp/admin/test1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var name = [];
			var user_id = [];

			for(var i in data) {
				name.push("Name " + data[i].name);
				user_id.push(data[i].user_id);
			}

			var chartdata = {
				labels: users,
				datasets : [
					{
						label: 'Name User_id',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: user_id
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	</body>
</html>