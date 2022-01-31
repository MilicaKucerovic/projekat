<?php
include_once("../includes/header.php");
include_once('./initdb.php');
session_start();


//ako korisnik vec postoji u sesiji
if (isset($_SESSION['user'])) {
    header('Location: ./index.php');
}

//ako korisnik vec postoji u cookies
if (isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
    header('Location: ./index.php');
}

//ako se korisnik upravo ulogovao
if (isset($_POST['user']) && isset($_POST['pass'])) {
    if ($connection->proveriKorisnika($_POST['user'], $_POST['pass'])) {
        //ako je checkiran keep me logged in
        if (isset($_POST['keep'])) {
            setcookie("user", $_POST['user'], time() + 60 * 60 * 24);
        }
        $_SESSION['user'] = $_POST['user'];
        header('Location: ./index.php');
    }
    $greska = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЗАЈЕДНИЦА</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="forma">
        <h1>ПРИЈАВИТЕ СЕ</h1>
        <form method="POST" action="./login.php">
            <label for="user">Админ имејл: </label>
            <input type="email" id="user" name="user" placeholder="Унесите Ваш имејл" />
            <br>
            <label for="pass">Лозинка</label>
            <input type="password" id="pass" name="pass" placeholder="Унесите Вашу лозинку" />
            <br>
            <label for="keep">Желим да останем пријављен</label>
            <input type="checkbox" name="keep" id="keep" />
            <br>
            <input type="submit" value="Пријави ме" id="submit" />
        </form>
        <?php if (isset($greska) && $greska) : ?>
            <div id='greska'>Погрешан унос. Молимо Вас проверите корисничко име и лозинку.</div>
        <?php endif; ?>
    </div>
</body>

</html>