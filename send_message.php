<?php 
session_start();
$reciever = $_GET['id'];
$sender = $_SESSION['id'];
$_SESSION['reciever'] = "$reciever";
$_SESSION['sender'] = "$sender";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		message
	</title>
</head>
<body>
<h1>Send Message</h1>
<form method="post" action="send_message_prs.php">
	<label>Message:</label>
	<textarea name="message"></textarea>
	<input type="submit" name="send" value="send">
</form>
</body>
</html>