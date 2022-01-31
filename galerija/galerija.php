<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <title>ГАЛЕРИЈА</title>
    <link rel="stylesheet" href="./galerija.css">
    <?php
    include_once('../prijava/initdb.php');
    session_start();

    include_once("../includes/header.php");

    if (isset($_POST["snimak"]) && isset($_POST["drzava"]) && isset($_POST["grad"]) && isset($_POST["opis"]) && isset($_POST["datum"]) && isset($_POST["muzika"]) && isset($_POST["autor"])) {
        $snimak = $_POST["snimak"];
        $drzava = $_POST["drzava"];
        $grad = $_POST["grad"];
        $opis = $_POST["opis"];
        $datum = $_POST["datum"];
        $muzika = $_POST["muzika"];
        $autor = $_POST["autor"];

        $conn = new mysqli("localhost", "root", "", "projekat");
        if (is_null($conn->connect_error)) {
            echo "Povezan sam sa bazom";
        } else {
            echo "Nisam povezan sa bazom. Greska je $conn->connect_error";
        }

        $insert = "INSERT INTO `destinacije` (`snimak`, `drzava`, `grad`, `opis`, `datum`, `muzika`, `autor`) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert_statement = $conn->prepare($insert);
        $insert_statement->bind_param("ssssssi", $snimak, $drzava, $grad, $opis, $datum, $muzika, $autor);
        $insert_statement->execute();
        mysqli_close($conn);
    }

    if (isset($_POST["obrisi"])) {
        $destinacija_id = $_POST["obrisi"];
        obrisi($destinacija_id);
    }

    function obrisi($destinacija_id)
    {
        $conn = new mysqli("localhost", "root", "", "projekat");
        $delete = "DELETE FROM `destinacije` WHERE `destinacija_id` = ?";
        $delete_statement = $conn->prepare($delete);
        $delete_statement->bind_param("i", $destinacija_id);
        $delete_statement->execute();
        mysqli_close($conn);
    }

    ?>
    
</head>

<body>
  
    <div class="main">
        <div class="video_container">
            <h1>ГАЛЕРИЈА ВИДЕО СНИМАКА</h1>
            <?php
            // menjaj u destinacije
            $destinacije = $connection->nizLokacija();
            foreach ($destinacije as $destinacija) {
                echo "<div class = 'prikaz' id='" . $destinacija[0] . "'><p id = \"naslov\">Уколико желите да погледате снимак, кликните на видео.<span> <video width =\"500px\" height =\"350px\" onclick=\"this.paused? this.play() : this.pause()\" style=\"cursor:hand;cursor:pointer\">> <source src=\"$destinacija[1]\" type=\"video/mp4\"></video>  </span></p>
                <p>ID: $destinacija[0]</p><p>Држава: <span style='color:#ddd'>" . $destinacija[2] . "</span></p><p>Град: <span style='color:#ddd'>" . $destinacija[3] . "</span></p>
                <p>Опис: <span style='#ddd'>" . $destinacija[4] . "</span></p><p>Датум: <span style='color:#ddd'>" . $destinacija[5] . "</span></p>
                <p>Музика: <span style='color:#ddd'>" . $destinacija[6] . "</span></p></div><span id=\"razmak\">";
            }

            ?>
        </div>
        <div class="video_container" <?php
                                    if (!isset($_SESSION['user'])) {
                                        echo "style= \"display: none;\"";
                                    } ?>>

            <div class="forma">
                <h1>ДОДАЈ ВИДЕО</h1>

                <form method="POST" action="./galerija.php">

                    <label for="snimak">Снимак:</label>
                    <input type="text" id="snimak" name="snimak" placeholder="Унесите путању до снимка" />
                    <br>
                    <label for="drzava">Држава:</label>
                    <input type="text" id="drzava" name="drzava" placeholder="Унесите назив државе" />
                    <br>
                    <label for="grad">Град:</label>
                    <input type="text" name="grad" id="grad" placeholder="Унесите назив града" />
                    <br>
                    <label for="opis">Опис:</label>
                    <input type="text" name="opis" id="opis" placeholder="Унесите опис пројекта" />
                    <br>
                    <label for="datum">Датум:</label>
                    <input type="text" name="datum" id="datum" placeholder="Унесите датум" />
                    <br>
                    <label for="muzika">Музика:</label>
                    <input type="text" name="muzika" id="muzika" placeholder="Унесите аутора музике" />
                    <br>
                    <label for="autor">Аутор:</label>
                    <input type="text" name="autor" id="autor" placeholder="Унесите ID аутора" />
                    <br><br>
                    <input type="submit" id="submit" value="Проследите унос" />
                </form>
                <br> <br>
                <?php if (isset($greska) && $greska) : ?>
                    <div id='greska'>Погрешан унос. Молимо Вас проверите корисничко име и лозинку.</div>
                <?php endif; ?>
                <div>
                    <h1>ОБРИШИ ВИДЕО</h1>
                    <form action="./galerija.php" method="POST">
                        <label for="obrisi">ID снимка:</label> 
                        <input type="number" name="obrisi" id="obrisi" placeholder="Унесите ID видео снимка" /><br><br>
                        <input type="submit" id="obrisi_dugme" value="ОБРИШИ ВИДЕО" 
                        onclick="return confirm('Да ли сте сигурни да желите да обришете видео?');" />
                    </form>
                 </div>
            </div>
        </div>
    </div>
</body>

</html>