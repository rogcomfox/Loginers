<?php
require('header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();

    $response = array(
        "status" => "failed"
    );

    if ($username == "admin" && $password == "pw123") {
        setcookie("admin", $username, time() + 3600);
        setcookie("pw123", $password, time() + 3600);
        header('location:index.php');
        $_SESSION['username'] = $username;
    } else {
        echo json_encode($response);
        header('location:error.php?error');
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Loginers</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <div class="login-form">
        <h1>Loginers</h1>
        <form action="login.php" method="post" data-toggle="validator" id="myForm">
            <div class="alert alert-danger display-error" style="display: none"></div>
            <div class="form-group ">
                <input type="text" class="form-control" onblur="validate('username', this.value)" name="username" placeholder="username" id="username">
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group log-status">
                <input type="password" class="form-control" onblur="validate('password', this.value)" name="password" placeholder="password" id="password"/>
                <i class="fa fa-lock"></i>
            </div>
            <input class="toggle-pass" type="checkbox" onclick="isVisible()">Tampilkan Password
            <input onclick="submitForm()" type='button' value='Submit' class="log-btn" />
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="login.js"></script>
    </form>

</body>

</html>