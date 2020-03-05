<?php
define('RESTRICTED', true);
require('header.php');
$uname = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>OpenWeatherMap Api</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div id="topnav" class="topnav">
        <a class="btn" href="#">OpenWeather</a>
        <a class="btn" href="ajax.html">Ajax Test</a>
        <a class="btn" href="#">Contact</a>
        <a class="btn" href="logout.php">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="loadIcon()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="input">
        <input type="text" id="city" placeholder="Enter the city" class="input_text">
        <input type="submit" value="Submit" class="submit">
    </div>
    </div>

    <div class="container">
        <div class="card">
            <h1 class="name" id="name"></h1>
            <p class="temp"></p>
            <p class="clouds"></p>
            <p class="desc"></p>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>

</body>

</html>