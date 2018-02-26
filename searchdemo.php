<?php 
include './database/DB.php';
session_start();
include './assets/navbar.php';
// echo "$id";
$sql = "SELECT DISTINCT reciever FROM `message` where sender = '$id'";
$results = $link->query($sql);
while ($row=mysqli_fetch_row($results)) {
echo $uid = $row['0'];
$query ="SELECT user_id,name FROM user WHERE user_id='$uid'";
          $result = $link->query($query);

           while($row = mysqli_fetch_row($result))
          {
?>
<ul>
  <li><a href="my-message.php"></a><?php echo $row['1']; ?></li>
</ul>
<iframe height="300px" width="100%" style="border:none;" src="demo_iframe.htm" name="iframe_a"></iframe>

<p><a href="https://www.w3schools.com" target="iframe_a">W3Schools.com</a></p>
 <?php 
}
}

 ?>