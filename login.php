<?php
require('header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();

    if ($username == "admin" && $password == "pw123") {
        setcookie("admin", $username, time() + 3600);
        setcookie("pw123", $password, time() + 3600);
        header('location:index.php');
        $_SESSION['username'] = $username;
    } else {
        header('location:error.php?error');
    }
}

