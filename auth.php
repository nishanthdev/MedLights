<!DOCTYPE html>
<html>
  <head>
    <title>Authenticate</title>
  </head>
  <body>
    <div class="jumbotron">
      <h1 class="display-3 text-center">Authenticate</h1>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </div>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <form class="form-control" action="auth_prs.php" method="post">
              <label for="Email">Email:</label>
              <input type="email" name="email" class="form-control">
              <hr>
              <input type="submit" class="btn btn-primary" name="submit" value="Confirm">
          </form>
        </div>
      </div>
    </div>
  </body>
  <style media="screen">
  body {
    margin: 0;
    background: linear-gradient(to right, #33ccff 0%, #99ff99 100%);
  }
  .jumbotron {
    background: white;
  }
  .card {
    padding: 1em;
    border-radius: 1em;
  }
  </style>
</html>
