<?php
include './database/DB.php';
#---------------------> Selecting data from database<----------
$s = "Select man_date,exp_date from medicine where med_id = 4";
$r = $link->query($s);
#--------------------------> Fetching the results <---------------
while ($a = mysqli_fetch_assoc($r)) {
  $expdate = $a['exp_date'];
  $mandate = $a['man_date'];
}
#---------------> Converting dates from string to time <------
$bdate = strtotime($mandate);
$edate = strtotime($expdate);
$datediff = $edate - $bdate;
#----------------> Displaying the result <---------------------
echo "Start date: " . $mandate . "<br>";
echo "End date: ". $expdate . "<br>";
echo "Difference in days: " . round($datediff / (60 * 60 * 24));
#--------------------------------------------------------------
 ?>
