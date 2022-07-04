<?php
include './functions.php';
$id = $_GET['id'];
$connection = connection();
$sql = "UPDATE cars SET sales_quantity = sales_quantity - 1 WHERE id = $id";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);
header("Location: ./car.php?id=$id");
