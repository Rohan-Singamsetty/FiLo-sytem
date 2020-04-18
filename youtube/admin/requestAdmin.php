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
        <a class="navbar-brand" href="adminmainpage.php">FiLo</a>
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
        <!--<button class="btn btn-outline-success" href="enter.php">Search</button>-->
        <a class="btn btn-success" href="adminmainpage.php">Home</a>
      </form>
        </div>
      </nav>
     <!--container -->
     <div style="position:relative;top:100px;" class="container">
       <div class="heading text-center  text-uppercase text-white">Requests</div>
       <table class="table table-striped table-hover table-bordered text-center">
          <tr>
            <th scope="col">Item ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Reason</th>
            <th scope="col">Accept</th>
            <th scope="col">Reject</th>
            <th scope="col">Remove</th>
            <th scope="col">Delete</th>
          </tr>
          <?php
          while ($rows=mysqli_fetch_assoc($result))
          {
           ?>
           <tr>
             <td> <?php echo $rows['itemid']; ?></td>
             <td> <?php echo $rows['username']; ?></td>
             <td> <?php echo $rows['email']; ?></td>
             <td> <?php echo $rows['reason']; ?></td>
             <td> <button class="btn-success btn"> <a href="accept.php?id=<?php echo $rows['id']; ?>" class="text-white">Accept</a>  </button> </td>
             <td> <button class="btn-danger btn"> <a href="reject.php?itemid=<?php echo $rows['itemid']; ?>" class="text-white">Reject</a> </button> </td>
             <td> <button class="btn-secondary btn"> <a href="removeRequests.php?itemid=<?php echo $rows['itemid']; ?>" class="text-white">Remove</a> </button> </td>
             <td> <button class="btn-primary btn"> <a href="deleteRequests.php?itemid=<?php echo $rows['itemid']; ?>" class="text-white">Delete</a> </button> </td>
           </tr>
           <?php
             }
          ?>
          </table>
   </div>


  </body>
</html>
