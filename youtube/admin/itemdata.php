<?php
header('location:create.php');
$con = mysqli_connect('localhost','root');
if ($con) {
  echo "connection successful";
}else {
  echo "not connected";
}
mysqli_select_db($con,'items');
// if (isset($_POST['submit'])) {
  $color = $_POST['color'];
  $type = $_POST['category'];
  $location = $_POST['location'];
  $date = $_POST['date'];
  $description = $_POST['description'];
  // $image = $_POST['file'];
  $image = $_FILES['file'];

  $filename = $image['name'];
  $fileerror = $image['error'];
  $filetmp = $image['tmp_name'];

  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));

  $fileextstored = array('png','jpg','jpeg');

  if (in_array($filecheck,$fileextstored)) {
    $destinationfile = '../upload/'.$filename ;
    move_uploaded_file($filetmp,$destinationfile);

    $qy = "insert into items(color,type,location,date,description,image) values('$color','$type','$location','$date','$description','$destinationfile') ";
    mysqli_query($con,$qy);
  }
  // if ($image == null) {
  //   $image ="No Image";
  // }else {
  //   $image = $_POST['file'];
  // }


  $q = "select * from items where color = '$color' && type = '$type' && location = '$location'  &&
   date = '$date' && description = '$description' && image = '$image' ";
  $result = mysqli_query($con,$q);

  if ($type == null && $color == null && $date == null) {
    header('location:create.php');
  }//else {
  //   $qy = "insert into items(color,type,location,date,description,image) values('$color','$type','$location','$date','$description','$image') ";
  //   mysqli_query($con,$qy);
  // }


 ?>
