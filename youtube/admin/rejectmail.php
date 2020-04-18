<?php
include 'connection.php';


$to_email = $_POST['email'];
$subject = $_POST['statusa'];
$body = $_POST['reason'];
$headers = "From:rohan.singamsetty@gmail.com";

if (mail($to_email,$subject,$body,$headers)) {

  header('location:sentEmail.php');

}else {
  header('location:emailProblem.php');

}

 ?>
