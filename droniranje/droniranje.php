<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ДРОНИРАЊЕ</title>
    <link rel = "stylesheet" href = "./droniranje.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php
    include_once ("../includes/header_gost.php");
    ?>
    <div class="glavni">
        <h1>Хвала Вам што желите да помогнете</h1>
    </div>
    <div class="sporedni">
        <h3>Сав приход од пројекта иде у хуманитарне сврхе. Минимална цена пројекта је 20 000 динара, а први слободан термин можете погледати на страници <a href = "../raspored/raspored.php">РАСПОРЕД.</a></h3>
    </div>
    <form action = "../placanje/placanje.php" method = "POST">
    <input type="submit" value="ДОНИРАЈ" class="button">
    </form>



</body>
</html>