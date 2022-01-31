<title>ДОБРОДОШАО, АДМИНЕ</title>
<link href="https://fonts.googleapis.com/css2?family=Comforter&family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href = "./index.css">
<?php 
include_once('./initdb.php');
session_start();
if(isset($_COOKIE['user'])) {
    $_SESSION['user'] = $_COOKIE['user'];
}
include_once ("../includes/header.php");

if(!isset($_SESSION['user'])) {
    die('Молимо Вас да кликнете <a href="./login.php">овде</a> како бисте се улоговали.');
}
// menjaj u destinacije
// $destinacije = $connection->nizLokacija();
// foreach($destinacije as $destinacija) {
//     echo "<div id='". $destinacija[0] . "'><p>Снимак: <span style='color:lime'>" . $destinacija[1] . "</span></p><p>Држава: <span style='color:orange'>" . $destinacija[2] . "</span></p><p>Град: <span style='color:orange'>" . $destinacija[3] . "</span></p><p>Опис: <span style='color:orange'>" . $destinacija[4] . "</span></p><p>Датум: <span style='color:orange'>" . $destinacija[5] . "</span></p><p>Музика: <span style='color:orange'>" . $destinacija[6] . "</span></p><p>Аутор: <span style='color:orange'>" . $destinacija[7] . "</span></p></div><hr>";
// }
?>

<div class = "main">
            <h1>Добродошао, админе!</h1>
            <br>
            <div class = "dugmad">
                <div class = "dugmad_unutrasnji">
            <a href = "../naslovna/naslovna.php"><button id = "procitaj">Боље те нашао ✈️ </button> </a>
                </div>
                <div class = "dugmad_unutrasnji">
            <form action="./logout.php"><input type="submit" id ="odjavi" value="Одјави ме"/></form>
            </div>
            </div>
        </div>

