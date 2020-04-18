<?php
session_start();
$con = mysqli_connect('localhost','root');
if ($con) {
  //echo "connection success";
}else {
  echo "connection not success";
}
$db = mysqli_select_db($con,'items');
$query = "select * from items ";
$result = mysqli_query($con,$query);
?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" type="text/css" href=".css/guest.css">
     <?php include 'links.php' ?>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="login.php">FiLo</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="homeguest.php">Products<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="about.php">About</a>
           </li>

         </ul>

        <form class="form-inline my-2 my-lg-0">
       <a class="btn btn-success" href="login.php">Home</a>
     </form>
       </div>
     </nav>
     <div style="position:relative;top:100px;" class="container">
       <div class="heading text-center  text-uppercase text-white">Items list</div>
     <table  class="table table-striped table-hover table-bordered p-4 ">
       <tr>
          <th scope="col">Color</th>
          <th scope="col">Type</th>
          <th scope="col">Location</th>
       </tr>
       <?php
       while ($rows=mysqli_fetch_assoc($result))
       {
        ?>
         <tr>
            <td> <?php echo $rows['color']; ?></td>
            <td> <?php echo $rows['type']; ?></td>
            <td> <?php echo $rows['location']; ?></td>
        </tr>
        <?php
          }
       ?>
     </table>
   </div>
   </body>
 </html>
