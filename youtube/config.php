<?php
$servername="localhost";
$username="u-180064007";
$password="eIKK7Ig6KsUPRoT";
$database="u_180064007_db";
$conn = mysqli_connect($servername,$username,$password,$database);
if ($conn) {
  echo "connection good";
}else {
  echo "No connection";
}
 ?>
