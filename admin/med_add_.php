<?php
include "../database/DB.php";
session_start();
if(!isset($_SESSION["state"]))
{
  header('Location:../login.php');

} else {
 echo "logged in";
}
$query = "select * from category";
$result = $link->query($query);

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medicine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron">
        <div class="container">
        <h1 class="text-center display-2">Medicine Add</h1>
        </div>
      </div>
        <div class="container">
          <div class="card">
            <div class="container">
              <form class="form-group" action="med_addprs.php" method="post">
                <label for="medname">Medicine Name:</label>

                <input type="text" name="m_name" class="form-control">
                <label for="man_date">Manufatured date:</label>
                <input type="date" name="m_date" class="form-control">
                <label for="man_date">Expire date:</label>
                <input type="date" name="e_date" class="form-control">
                <label for="brand">Brand</label>
                <input type="text" name="brand" class="form-control">
                <label for="price">Price:</label>
                <input type="number" name="price" class="form-control">
                <label for="med_Desc">Description:</label>
                <textarea name="med_desc" rows="8" cols="90" class="form-contol"></textarea>
                <label for="category">Category:</label>
                <select class="form-control" name="category">
                  <?php
                  while($row = mysqli_fetch_row($result))
                  {
                  ?>
                  <option value="<?php echo $row['0']; ?>"><?php echo $row[1]; ?></option>
                    <?php } ?>
                </select>
                <label for="type">Type:</label>
                <select class="form-control" name="type">
                  <option value="generic">Generic</option>
                  <option value="regular" selected>Regular</option>
                </select>
                <label for="price">Stock:</label>
                <input type="number" name="stock" class="form-control">
                <hr>
                <input type="submit" name="submit" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
  </body>
</html>
