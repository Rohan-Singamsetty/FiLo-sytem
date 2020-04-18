<?php
session_start();
$con = mysqli_connect('localhost','root');
if ($con) {
  //echo "connection success";
}else {
  echo "connection not success";
}
?>
<!DOCTYPE html>
  <html>
  <head>
    <title></title>
  <link rel="stylesheet" type="text/css" href="../.css/stylead.css">
    <?php include 'links.php'?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../login.php">FiLo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../login.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../about.php">About</a>
          </li>

        </ul>
       <!--<form class="form-inline my-2 my-lg-0">
      <a class="btn btn-success" href="enter.php">Admin</a>
    </form> -->
      </div>
    </nav>
    <header>
      <div class="container centre-div shadow"  >
        <div class="heading text-center mb-5 text-uppercase text-white">
          ADMIN LOGIN PAGE
        </div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
          <div class="admin-from shadow p-4">
            <form action="logincheck.php" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" value="" class="form-control">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" value="" class="form-control">
              </div>
              <input type="submit" class="btn btn-success" value="submit" name="submit">
            </form>

          </div>

        </div>
      </div>
    </header>
  </body>
</html>
