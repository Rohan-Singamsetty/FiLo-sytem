<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href=".css/styleone.css">
    <?php include 'links.php'?>
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="login.php">FiLo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="homeguest.php">Products</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">About</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
      <!--<button class="btn btn-outline-success" href="enter.php">Search</button>-->
      <a class="btn btn-success" href="admin/admin.php">Admin</a>
    </form>
      </div>
    </nav>
    <!--Form starts here -->
   <div style="position:relative;top:55px;height:510px" class="container centre-div shadow p-4 ">
     <div class="row">
       <div class="col-lg-6">
         <div class="headingup text-center mb-5 text-uppercase text-white ">
           LOGIN PAGE
         </div>
         <div class="container centre-div shadow p-4 ">
         <form class="" action="validation.php" method="POST">
           <div class="form-group">
             <label>Username</label>
             <input type="text" name="user1" value="" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Password</label>
             <input type="password" name="pass1" value="" class="form-control" required>
           </div>
           <button class="btn btn-success" type="submit" name="button">Login</button>
         </form>
       </div>
       </div>
       <div class="col-lg-6">
         <div class="headingup text-center mb-5 text-uppercase text-white">
           REGISTRATION FORM
         </div>
         <div class="container centre-div shadow p-4 ">
         <form class="" action="registration.php" method="POST">
           <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" value="" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Password</label>
             <input type="password" name="pass" value="" class="form-control" required>
           </div>
           <div class="form-group">
             <label>Email</label>
             <input type="email" name="email" value="" class="form-control" required>
           </div>
           <button class="btn btn-success" type="submit" name="button">Sign up</button>
         </form>
       </div>
       </div>
     </div>
   </div>
  </body>
</html>
