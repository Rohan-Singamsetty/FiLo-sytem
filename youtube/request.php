<!DOCTYPE html>
<html lang="en" dir=>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    *{
      margin: 0;
      padding:0;
    }
    .heading{
      width: 100%;
      line-height:60px;
      font-size: 1.4rem;
      background: -webkit-linear-gradient(left,#0073ff,#8811c5);
      font-family: 'Staatliches', cursive;
    }

    </style>
    <?php include 'links.php'?>
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

    <div style="position:relative;top:50px;max-width:900px" class="container-fluid  p-4  " max-width:1250px>
      <div style="position:relative;height:460px;" class="card">
      <div class="heading text-center text-white">Request for an item</div><br>
      <form action="requestsql.php" method="post">
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Item Id</label>
          <input type="text" name="itemid" value="" class="form-horizontal"> </br>
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Username</label>
          <input type="text" name="username" value="" class="form-horizontal">
        </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
            <label >Email</label>
            <input type="email" name="email" class="form-horizontal">
          </div>
        </div>
        <div class="form-horizontal">
          <div class="col-md-8">
          <label>Reason</label>
          <textarea class="form-control" name="reason" cols="50" rows="3">Notes about the item</textarea></br>
        </div>
        </div>
        <div class="form-horizontal">
        <div class="col-md-6 col-md-offset-4">
        <input type="submit" class="btn btn-primary" />
        <input type="reset" class="btn btn-primary" />
        </div>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
