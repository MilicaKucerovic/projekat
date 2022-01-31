<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КОНТАКТ</title>
    <link rel = "stylesheet" href = "./kontakt.css">
</head>
<body>
<?php
    include_once ("../includes/header_gost.php");
    ?>
    <div class = "main">
            <h1>КОНТАКТ</h1>
            <form class = "kontakt_forma" action = "./kontakt.php" method = "POST">
            <input type = "text" class = "ime" placeholder = "Унесите Ваше име" required
            oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')">
            <input type = "email" class = "email" placeholder = "Унесите Ваш имејл" required
            oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')">
            <input type = "number" class = "telefon" placeholder = "Унесите Ваш број телефона" required  oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')">
            <textarea class = "tekst" cols = "20" rows = "30" placeholder = "Унесите Вашу поруку" required
            oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')"></textarea>
            <input type = "submit" class ="submit" value = "Проследите Ваш захтев">
            </form>
</div>
<!-- <?php
include_once("../includes/footer.php");
?> -->

</body>
</html>