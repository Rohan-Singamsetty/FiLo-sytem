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
      background: -webkit-linear-gradient(left,#0073ff,#8811c5);
      font-family: 'Staatliches', cursive;
    }

    </style>
  </head>
  <body>
    <!--navbar -->
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
            <a class="nav-link" href="requestAdmin.php">Request item</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
      <!--<button class="btn btn-outline-success" href="enter.php">Search</button>-->
      <a class="btn btn-success" href="requestAdmin.php">Back</a>
    </form>
      </div>
    </nav>
   <!--container -->
    <div style="position:relative;top:150px;left:580px;height:200px" class="container centre-div shadow"  >
      <div class="heading text-center mb-5 text-uppercase text-white">
        TECHNICAL PROBLEM:EMAIL DID NOT GO
        <!--<a href="logout.php" class="btn btn-danger">Logout</a>-->
      </div>
    </div>

  </body>
</html>
