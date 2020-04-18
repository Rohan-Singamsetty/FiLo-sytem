<?php

include 'connection.php';

$id = $_GET['itemid'];

$q = " DELETE FROM `requests` WHERE itemid = $id ";

mysqli_query($con, $q);

header('location:requestAdmin.php');

?>
