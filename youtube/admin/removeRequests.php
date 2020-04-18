<?php

include 'connection.php';

$id = $_GET['itemid'];

$q = "DELETE items , requests
             FROM items
              LEFT JOIN requests ON (requests.itemid=items.id)
              WHERE items.id=$id";

mysqli_query($con, $q);

header('location:requestAdmin.php');

?>
