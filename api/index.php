     <h1 class="text-center">Sent Messages</h1>
 <hr>
 <?php 
  $query ="SELECT * FROM message WHERE sender=$userid";
  $result = $link->query($query);

     while($row = mysqli_fetch_row($result))
    {
      $mid=$row['0'];
      // $seen = $row['4'];
      $reciever = $row['3'];
      if (strlen($row['1']) > 10) {
                    $m = substr($row['1'], 0, 10)." ...";
            } else {
                    $m = $row['1'];
            }

                  echo "<a href='my_messages.php?smid=".$mid."'><strong>".$m."</strong></a><hr />";
            // } else {
            //         echo "<a href='my-messages.php?mid=".$mid."'>".$m."</a> sent by ".$row['0'].'<hr />';
            //  }
          }
   
         ?>

<h1 class="text-center">Recieved Messages</h1>
 <?php 
 $query ="SELECT * FROM message WHERE reciever=$userid";
$result = $link->query($query);

 while($row = mysqli_fetch_row($result))
{
  $mid=$row['0'];
  $seen = $row['4'];
  $sender = $row['3'];
  if (strlen($row['1']) > 10) {
                $m = substr($row['1'], 0, 10)." ...";
        } else {
                $m = $row['1'];
        }

              echo "<a href='my_messages.php?mid=".$mid."'><strong>".$m."</strong></a><hr />";
      
    }
         ?>
    </div>
  </div>
 
</div>