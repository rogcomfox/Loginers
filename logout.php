<?php
$username = $_COOKIE['admin'];
$password = $_COOKIE['pw123'];
session_start();
if (session_destroy()) {
    setcookie("admin", "", time() - 3600);
    setcookie("pw123", "", time() - 3600);
    header("Location: login.php");
}
