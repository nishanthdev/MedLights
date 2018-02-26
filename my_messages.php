<?php 
include './database/DB.php';
session_start();
include './assets/navbar.php';


if (isset($_GET['smid'])) {
	$mid = $_GET['smid'];
}
else
{
	$mid = $_GET['mid'];
}


$query ="SELECT * FROM message WHERE id=$mid";
$result = $link->query($query);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
</head>
<body>
<a href="messages.php" class="btn btn-primary">Back</a>
<h1 class="text-center">View Message</h1>
<hr>
<div class="container">
		<?php
		 while($row = mysqli_fetch_row($result))
		{ ?>
			<h2><?php echo $row['1']; ?></h2>
		<?php 
		if (isset($_GET['smid'])){ 
		$reciever = $row['3'];
		$query ="SELECT user_id,username FROM user WHERE user_id=$reciever";
					$result = $link->query($query);

					 while($row = mysqli_fetch_row($result))
					{ ?>
			<p>Sent to <b><a href="view_profile.php?id=<?php echo $row['0'];?>"><?php echo $row['1']; } ?></a></b></p><hr>
			<?php } else { 
					$sender = $row['2'];
				$query ="SELECT user_id,username FROM user WHERE user_id=$sender";
					$result = $link->query($query);

					 while($row = mysqli_fetch_row($result))
					{ ?>
			<p>Sent by <b><a href="view_profile.php?id=<?php echo $row['0'];?>"><?php echo $row['1']; } ?></a></b></p><hr>

		<h2 class="display-5">Reply</h2>
		<hr>
			<form method="post"	action="reply_messages_prs.php">
				<label>Message:</label>
				<textarea name="message" class="form-control"></textarea> <br>
				<input type="submit" name="reply" class="btn btn-primary" value="Reply">
			</form>
			<hr>
		<?php
			} 
		}

?>
</div>
	<?php include './assets/footer.php'; ?>
</body>
</html>