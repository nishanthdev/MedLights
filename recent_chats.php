
<?php include './database/DB.php'; 
session_start();
include './api/navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<a href="new_chat.php">New Chat</a>
	</div>
	<div>
		<ul class="list-group">
			<?php 

			$a = "select DISTINCT message.reciever, user.username as uname, user.user_id as uid, user.pic as pic from user, message where message.reciever = user.user_id and sender = '$id'";
			$result = $link->query($a);
			while ($row = mysqli_fetch_assoc($result)) {
			 ?>
			<li class="list-group-item"> 
				<a class="" href="message.php?id=<?php echo $row['uid']; ?>"><?php echo $row['uname']; ?></a>
			</li>
			<?php } ?>
		</ul>
	</div>
</body>
</html>