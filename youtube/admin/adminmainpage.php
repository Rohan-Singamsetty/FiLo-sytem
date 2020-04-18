<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:admin.php');
}
$con = mysqli_connect('localhost','root');
if ($con) {
  //echo "connection success";
}else {
  echo "connection not success";
}
$db = mysqli_select_db($con,'items');
$query = "select * from requests ";
$result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="../.css/pagemainadmin.css"> -->
    <?php include 'links.php' ?>
    <style media="screen">
    *{
      margin: 0;
      padding:0;
    }
    .centre-div{
      position: absolute;
      top: 50%;
      left: 50%;
      transform:translate(-50%,-50%);
    }
    .heading{
      width: 100%;
      line-height:60px;
      font-size: 1.4rem;
      background: -webkit-linear-gradient(left,#696969,#A9A9A9);
      font-family: 'Staatliches', cursive;
    }

    </style>
  </head>
  <body>
    <!--navbar -->
    <!--navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">FiLo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="list.php">List<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="create.php">Create</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="usertable.php">Users</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="requestAdmin.php">Requests</a>
            </li>

          </ul>
          <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-success" href="admin.php">Logout</a>
      </form>
        </div>
      </nav>
     <!--container -->
      <div style="position:relative;top:150px;left:580px;height:200px" class="container centre-div shadow"  >
        <div class="heading text-center mb-5 text-uppercase text-white">
          Hello Mr.<?php echo $_SESSION['user'] ?>
        </div>
      </div>


  </body>
</html>
