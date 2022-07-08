<?php
include "./functions.php";
$connection = connection();

$users = get_users();

foreach ($users as $user) {
    if ($user["email"] == $_POST["email"]) {
        if ($user["user_password"] == $_POST["user_password"]) {
            header("location: ./home.php");
            break;
        }
    }
    header("location: ./");
}
