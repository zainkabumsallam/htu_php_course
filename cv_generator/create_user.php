<?php
include "./functions.php";
$connection = connection();

$email = $_POST["email"];
$user_password = $_POST["user_password"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

var_dump($email, $user_password, $first_name, $last_name);

$sql = "INSERT INTO users (email, user_password, first_name, last_name) VALUES ('$email', '$user_password', '$first_name', '$last_name');";
$result = mysqli_query($connection, $sql);
mysqli_close($connection);
header("location: ./home.php");
