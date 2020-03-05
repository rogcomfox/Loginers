<?php
define('RESTRICTED', true);

require('header.php');

//if (empty($_SESSION['username'])) {
//    header('Location:index.php');;
//} else {
$uname = $_SESSION['username'];
//}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenWeatherMap Api</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <tr>
        <td><a href="logout.php"><br><br>Logout</a></td>
    </tr>
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
    <div id="demo">
        <h1>AJAX TEST</h1>
        <button type="button" onclick="doc('sample.txt', myFunction)">Click Me To Show Text</button>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="index.js"></script>

</body>

</html>