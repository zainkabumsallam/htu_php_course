<?php
include './functions.php';
$connection = connection();

$id = $_POST['id'];
$car_model = $_POST['car_model'];
$manufacturing_year = $_POST['manufacturing_year'];
$sales_quantity = $_POST['sales_quantity'];

$sql = "UPDATE cars SET car_model= '$car_model', manufacturing_year= '$manufacturing_year', sales_quantity= '$sales_quantity' WHERE id=$id;";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);
header('Location: ./');
