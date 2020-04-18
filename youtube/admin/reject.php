<?php
session_start();
$itemid = $_GET['itemid'];
$con = mysqli_connect('localhost','root');
if ($con) {
  //echo "connection success";
}else {
  echo "connection not success";
}

$db = mysqli_select_db($con,'items');

$query = "select * from requests where itemid = $itemid";

$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'links.php'?>
<style media="screen">
*{
  margin: 0;
  padding:0;
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
      <a class="btn btn-success" href="adminmainpage.php">Home</a>
    </form>
      </div>
    </nav>
    <?php
    while ($rows=mysqli_fetch_assoc($result))
    {
     ?>
     <!-- form starts here -->
     <div style="position:relative;top:50px;max-width:900px" class="container-fluid  p-4  " max-width:1250px>
       <div style="position:relative;height:460px;" class="card">
       <div class="heading text-center text-white">Send Email</div><br>
       <form action="rejectmail.php" method="post">
         <div class="form-horizontal">
           <div class="col-md-8">
           <label>Email</label>
            <input type="text" name="email" value= <?php  echo $rows['email']; ?>><br> </br>
         </div>
         </div>
         <div class="form-horizontal">
           <div class="col-md-8">
           <label>Status</label>
           <input type="text" name="statusa" value= "REJECT">
         </div>
         </div>
         <div class="form-horizontal">
           <div class="col-md-8">
           <label>Description</label>
           <textarea class="form-control" name="reason" cols="50" rows="3">Your request got rejected because</textarea></br>
         </div>
         <div class="col-md-6 col-md-offset-4">
         <input type="submit" value="Send" class="btn btn-primary" />
         </div>
         </div>
       </form>
     </div>
   </div>
     <!-- form ends here -->
     <?php

       }
    ?>

  </body>
</html>
