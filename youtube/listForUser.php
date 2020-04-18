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
     <?php include 'links.php' ?>
     <style media="screen">
     *{
       margin: 0;
       padding:0;
     }

     .heading{
       width: 100%;
       line-height:50px;
       font-size: 1.4rem;
       background: -webkit-linear-gradient(left,#0073ff,#8811c5);
       font-family: 'Staatliches', cursive;
     }

     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="home.php">FiLo</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="listForUser.php">List<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="createForUser.php">Create</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="request.php">Request item</a>
           </li>

         </ul>

        <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-success" href="home.php">Home</a>
     </form>
       </div>
     </nav>
     <div style="position:relative;top:100px;" class="container">
       <div class="heading text-center  text-uppercase text-white">Items list</div>
     <table   class="table table-striped table-hover table-bordered p-4 text-center ">
       <tr>
         <th scope="col">ID</th>
          <th scope="col">Color</th>
          <th scope="col">Type</th>
          <th scope="col">Location</th>
          <th scope="col">Date</th>
         <th scope="col">Description</th>
         <th scope="col">Image</th>

       </tr>
       <?php
       while ($rows=mysqli_fetch_assoc($result))
       {
        ?>
         <tr>
           <td> <?php echo $rows['id']; ?></td>
            <td> <?php echo $rows['color']; ?></td>
            <td> <?php echo $rows['type']; ?></td>
            <td> <?php echo $rows['location']; ?></td>
            <td> <?php echo $rows['date']; ?></td>
            <td> <?php echo $rows['description']; ?></td>
            <td> <img src=" <?php echo $rows['image'];?>" height="100px" width="100px"></td>
        </tr>
        <?php
          }
       ?>
     </table>
   </div>
   </body>
 </html>
