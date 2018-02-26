<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<body>
    <div class="jumbotron">
        <h1 class="text-center display-4">Login Form</h1>
        </div>
    <div class="ui container">
      <div class="card">
        <div class="container">
          <div class="card-body">
             <form class="form-group" action="loginprs.php" method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
           <label for="label">Username:</label>
            <input class="form-control" type="text" name="username" id="username">
              </div>
              <div class="col-md-6 mb-3">
                 <label for="label">Password:</label>
            <input class="form-control" type="password" name="password" id="password">
              </div>
            </div>
            <div id="btns">
            <input class="btn btn-primary" type="submit" name="submit" value="Login">
            <a href="auth.php" class="btn btn-warning">Forgot Password</a>
              <a href="reg_user.php" class="btn btn-info">Create Account</a>
              </div>
        </form>
          </div>
        </div>
      </div>
       
    </div>
    </div>
</body>
<style>
.jumbotron {
    background: white;
}
body {
   background: skyblue; 
}
.card {
  border-radius: 10px;
  padding: 2em;
}
#btns {
  
}
</style>
</html>