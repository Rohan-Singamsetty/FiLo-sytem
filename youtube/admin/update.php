<?php

 include 'connection.php';

 if(isset($_POST['done'])){

 $id = $_GET['id'];
 $color = $_POST['color'];
 $type = $_POST['category'];
 $location = $_POST['location'];
 $date = $_POST['date'];
 $description = $_POST['description'];
 $image = $_POST['file'];
 // $q = " update crudtable set id=$id, username='$username', password='$password' where id=$id  ";
 $q =  " update items set id=$id, color='$color', type='$type', location='$location', date='$date', description='$description', image='$image' where id=$id ";

 $query = mysqli_query($con,$q);

 header('location:list.php');
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php include 'links.php'?>
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

        </ul>

       <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-success" href="adminmainpage.php">Home</a>
    </form>
      </div>
    </nav>

    <div style="position:relative;top:50px;max-width:900px" class="container-fluid  p-4  " max-width:1250px>
      <div class="card ">
      <div class="card-header">Create an new item</div><br>
      <form method="post">
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Item Color</label>
          <input type="text" name="color" value="" class="form-horizontal"> </br>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Item type</label>
          <select name="category" >
<           <option class="form-horizontal"  value="pet">Pet</option>
            <option  class="form-horizontal" value="phone">Phone</option>
            <option  class="form-horizontal" value="jewellery"> jewellery</option>
          </select>
        </div>
      </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Location</label>
          <input type="text" name="location" value="" class="form-horizontal">
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
            <label >Date</label>
            <input type="date" name="date" placeholder="Date"/>
          </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Description</label>
          <textarea class="form-control" name="description" cols="50" rows="3">Notes about the item</textarea></br>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Image</label>
          <input type="file" name="file" id="file"/>
        </div>
        <div class="col-md-6 col-md-offset-4">
        <input type="submit" class="btn btn-primary" name="done" />
        <input type="reset" class="btn btn-primary" />
        </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
