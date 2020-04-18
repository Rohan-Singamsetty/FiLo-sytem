<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
if ($con) {
  echo "connection successful";
}else {
  echo "not connected";
}
mysqli_select_db($con,'session');
$name = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$hashing = password_hash($pass,PASSWORD_BCRYPT);






$q = "select * from signin where name = '$name' && password = '$pass' && email = '$email' ";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
  echo "duplicate data";
}elseif ($name == null && $pass == null) {
  header('location:login.php');
}else {
  $qy = "insert into signin(name,password,email) values('$name','$hashing','$email') ";
  mysqli_query($con,$qy);
}
?>
