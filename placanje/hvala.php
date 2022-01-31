<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ХВАЛА</title>
    <style> 
    * {
    margin: 0;
    padding: 0;
    font-family: 'Mochiy Pop P One', sans-serif;
}
body {
    height: 100vh;
    width: 100%;
    background-image: url("led.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;  
}
.glavni {
    width: 38%;
    background: #272b25;
    opacity: 0.9;
    color: white;
    text-align: center;
    padding: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    right: 50%;
    transform: translate(-50%, -50%);
}
h1 a {
    list-style: none;
    color: #ddd;
    text-decoration: none;
}
h1 a:hover {
    opacity: 0.8;
}
</style>
</head>
<body>
<?php
    include_once ("../includes/header_gost.php");
    ?>
    <div class="glavni">
        <h1><a href ="../naslovna/naslovna.php">Хвала Вам на уплати!</a></h1>
    </div>
    
</body>
</html>