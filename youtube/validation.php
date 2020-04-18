<?php
session_start();
include 'registration.php';

$con = mysqli_connect('localhost','root');
if ($con) {
  echo "connection successful";
  header('location:login.php');

}else {
  echo "not connected";
}
mysqli_select_db($con,'session');

$name = $_POST['user1'];
$pass = $_POST['pass1'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num == 1) {
  $_SESSION['username'] = $name;
  header('location:home.php');
}elseif ($name == null && $pass == null) {
  header('location:login.php');
}

?>
