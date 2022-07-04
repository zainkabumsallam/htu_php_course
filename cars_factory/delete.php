<?php
include './functions.php';
$connection = connection();
$id = $_GET['id'];
$sql = "DELETE FROM cars WHERE id='$id'";
$res = mysqli_query($connection, $sql);
mysqli_close($connection);
header('location: ./index.php');
