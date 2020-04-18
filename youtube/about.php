
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
     .information{
        font-size: 1.4rem;
        font-family: 'Permanent Marker', cursive;
       /* font-family: 'Roboto Condensed', sans-serif; */
     }
     span {
       content: "\2022";
      }


     </style>
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
             <a class="nav-link" href="homeguest.php">List of Products<span class="sr-only">(current)</span></a>
           </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
       <!--<button class="btn btn-outline-success" href="enter.php">Search</button>-->
       <a class="btn btn-success" href="login.php">Home</a>
     </form>
       </div>
     </nav>
     <div style="position:relative;top:300px;left:580px;height:500px;" class="container centre-div shadow"  >
       <div class="heading text-center mb-5 text-uppercase text-white">
         WELCOME TO FILO SYTEMS AND TECHNOLOGY
       </div>
       <div class="information">
          Everyday, hundreds and thousands of valuable items are lost from home, trains, and airports etc.
          Many of those lost items are never returned to their owners because it is just very difficult to link a lost
          item to the owner. We are a company where we designed and implemented this Find-the-Lost website called FiLo
          system. This system could provide a lost item database so that users could check the lost items there
          and could add new items they found into it. We categorise items in 3 different types which are <br>
        <span> &#8226;</span> Jewellery <br>
        <span> &#8226;</span> Pets <br>
        <span> &#8226;</span> Phones <br>
          To request or view more details of a particular item you need to register and login in <br>
          You can even add products you find in to this system
       </div>

     </div>
   </body>
 </html>
