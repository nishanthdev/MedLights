<?php
session_start();
include "../database/DB.php";
if(!isset($_SESSION["state"]))
{
 header('Location:login.php');
} else {
 echo "logged in";
}
$query = "select * from composition";
$result = $link->query($query);
$med_name = $_SESSION["med_name"];
?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Composition</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

   </head>
   <body>
     <div class="jumbotron">
         <div class="container">
         <h1 class="text-center display-2">Composition</h1>
         </div>
       </div>
         <div class="container">
           <div class="card">
             <div class="container">
               <div class="">
                 <form class="" action="med_compprs.php" method="post">
                    <input type="hidden" name="med_name" value='<?php echo "$med_name"; ?>'>
                   <label for="Composition">Select compositions:</label> <br>
                   <?php
                   while($row = mysqli_fetch_row($result))
                   {
                   ?>
                   <input type="checkbox" name="comp[]" value="<?php echo $row['0']; ?>"> <?php echo $row['1']; ?> <br>
                 <?php } ?>
                 <hr>
                 <input type="submit" class="btn btn-primary" name="submit" value="save">
                 </form>
               </div>
             </div>
           </div>
         </body>
         <style media="screen">
           .card {
             padding: 1em;
             border-radius: 10px;
           }
           .jumbotron {
            background: white;
           }
         </style>
         </html>
