<?php
session_start();

if (defined('RESTRICTED')) {
    if (!isset($_SESSION['username'])) {
        header('Location: login.html');
        exit();
    }
} else {
    if (isset($_SESSION['username'])) {
        header('Location: index.php');
        exit();
    }
}

?>