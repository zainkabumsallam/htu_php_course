<?php
include './functions.php';

$data = $_POST;
if (login_auth($_POST['email'], $_POST['password'])) {
    unset($_SESSION['errors']);
    $_SESSION['user'] = get_customer($_POST['email']);
    header('location: ./home.php');
} else {
    header('location: ./');
}
