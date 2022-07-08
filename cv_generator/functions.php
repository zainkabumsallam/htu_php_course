<?php

function connection()
{
    $connection = mysqli_connect("localhost", "root", "", "cv_generator");
    return $connection;
}

function get_users()
{
    $connection = connection();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);
    return $users;
}
