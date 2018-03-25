<?php
      include './database/DB.php';
      session_start();
      if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
$sql = "SELECT user_id,password,type FROM user WHERE username='$username'";
        $result = $link->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_row($result)) {
    if ($row[1]==$password) {
      $_SESSION["state"] = "Set";
       $_SESSION["username"] = $username;
       $_SESSION["type"] = $row[2];
      $_SESSION["id"] = "$row[0]";
      if ($row[2]=='admin') {
        header('Location:./admin/index.php');
      } elseif ($row[2]=='doctor') {
        header('Location:index.php');
      } elseif ($row[2]=='pharmacist') {
        header('Location:./admin/index.php');
      } else {
        header('Location:index.php');
      }
  } else {
    header('Location:login.php?action=error');
  }
  }
} else {
   header('Location:login.php?action=error');
}
}
  ?>
