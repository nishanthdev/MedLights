<?php 
session_start();
include "./database/DB.php";
$userid = $_SESSION['id'];
include './api/navbar.php';
$reciever = "";
 ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 mb-3">
      <h4>User List</h4>
      <?php 
      $sql = "select DISTINCT reciever from message where sender = '$userid'";
      $results = $link->query($sql);
       while ($row = mysqli_fetch_assoc($results)) {
        $reciever = $row['reciever'];
        ?>
      <ul class="list-group">
        <?php 
        $select = "select username from user where user_id = ".$row['reciever'];
        $res = $link->query($select);
        while ($row = mysqli_fetch_row($res)) {
                
        ?>
        <li class="list-group-item"><?php echo $row['0']; ?></li> <?php
         }
       }
       ?>
      </ul>
    </div>
    <!-- <div class="col-md-6 mb-3"> -->
      <h3>Chat Messages</h3>
      <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="container">

      <?php 
$sid = "";
$rid ="";
      $sm = "select body, sender, reciever from message ORDER BY `message`.`sent_at` ASC";
       $result = $link->query($sm);
       while ($row=mysqli_fetch_row($result)) {
        if ($row['1']==$userid) {
           $sid = $reciever;
        $rid = $userid;
          ?> 
       
              <div class="card text-white bg-danger mb-3" style="margin-right: 50%;">
              <div class="card-body">
                <p class="card-text"><?php echo $row[0]; ?></p>
              </div>
            </div>
      <?php  } elseif ($row['1']==$reciever) {
        
        $sid = $userid;
            $rid = $reciever;
       ?>
        <div class="card text-white bg-success mb-3" style="margin-left: 50%; align-items: right;">
  <div class="card-body">
    <p class="card-text"><?php echo $row['0']; ?></p>
  </div>
</div>
     
 
<?php } 
 } ?>
<form class="form-group" method="post"  action="">
  <div class="form-inline">
  <input type="text" name="message" class="form-control">
  <input type="hidden" name="sender" value="<?php echo $sid; ?>">
  <input type="hidden" name="reciever" value="<?php echo $rid; ?>">
  <input type="submit" name="submit" class="btn btn-primary" value="send">
</div>
</form>
    <!-- </div> -->
  </div>
</div>
</div>
<?php 
include './database/DB.php';
// session_start();
if (isset($_POST['submit'])) {
$reciever = $_POST['reciever'];
$sender = $_POST['sender'];
$body = $_POST['message'];
$query="INSERT INTO `message`(`body`, `sender`, `reciever`) VALUES ('$body','$sender','$reciever')";
        if ($result=$link->query($query) == TRUE) {
    echo '<script>alert("Message sent!"); window.location="messages.php";</script>';
}
}
 ?>
 </div>
</div>
</div>



<?php// include './assets/footer.php'; ?>