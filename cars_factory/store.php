<?php
include './functions.php';
$connection = connection();

$car_model = $_POST['car_model'];
$manufacturing_year = $_POST['manufacturing_year'];
$sales_quantity = $_POST['sales_quantity'];

$sql = "INSERT INTO cars (car_model, manufacturing_year, sales_quantity) VALUES ('$car_model', '$manufacturing_year', '$sales_quantity');";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);
header('Location: ./');
