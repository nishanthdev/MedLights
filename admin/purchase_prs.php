<?php

include "../database/DB.php";

if (isset($_POST['submit'])) {
    $med_name = $_POST['med_name'];
    $price = $_POST['price'];
    $date = $_POST['purch_date'];
    $quantity = $_POST['quantity'];
    $med_id = "";
    $query = "SELECT `med_id`,`quantity` FROM `medicine` WHERE `med_name`='$med_name'" ;
    $result = $link->query($query);

    while($row = mysqli_fetch_row($result))
    {
        $med_id = $row['0'];
        $qty = $row['1'];
    }
    echo $med_id;
    echo $qty;
    $sql = "INSERT INTO purchase (med_id, purch_date, pur_price, quantity) VALUES ('$med_id','$date','$price','$quantity')";
    $result = $link->query($sql);
      if ($qty == 0) {
        $add = "UPDATE `medicine` SET quantity=$qty where med_id=$med_id";
        $result = $link->query($add);
      } else {
        $sum = $qty + $quantity;
        $add = "UPDATE `medicine` SET quantity=$sum where med_id=$med_id";$result =   $result = $link->query($add);
      }
    header('location:purchase.php?action=added');
}
