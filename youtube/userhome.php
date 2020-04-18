<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
?>
 <!DOCTYPE html>
 <html >
   <head>
     <title></title>
     <?php include 'links.php'?>
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
       background: -webkit-linear-gradient(left,#0073ff,#8811c5);
       font-family: 'Staatliches', cursive;
     }

     </style>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="#">FiLo</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">List<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="#">Create</a>
           </li>
           <li class="nav-item active">
             <a class="nav-link" href="#">Requests</a>
           </li>

         </ul>
         <form class="form-inline my-2 my-lg-0">
       <!--<button class="btn btn-outline-success" href="enter.php">Search</button>-->
       <a class="btn btn-success" href="login.php">Logout</a>
     </form>
       </div>
     </nav>
     <div style="position:relative;top:150px;left:580px;height:200px" class="container centre-div shadow"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
         Hello Mr.<?php echo $_SESSION['username'] ?>
       </div>
     </div>
   </body>
 </html>
