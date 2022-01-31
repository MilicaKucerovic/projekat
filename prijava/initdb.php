<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Konekcija
    {
        private $connection;
        function __construct()
        {
            //povezujemo se bez baze jer hocemo da napravimo novu ako ne postoji 
            $this->connection = new mysqli('localhost', 'root', '');
            if ($this->connection->error) {
                die("Greska pri povezivanju: $this->connection->error");
            }

            //kreiramo bazu ako ne postoji
            $this->connection->query("CREATE DATABASE IF NOT EXISTS `projekat`");
           
            //selektujemo bazu da bi smo radili sa njom
            $this->connection->select_db('projekat');

            //kreiramo tabelu user ako ne postoji
            $this->connection->query("CREATE TABLE IF NOT EXISTS `user` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE `uname` (`username`(50))) ENGINE = innoDB;");
            //INSERT IGNORE ignorise duplikate za UNIQUE kolonu (username), tako da nece biti ponavljanja admina u tabeli
            $this->connection->query("INSERT IGNORE INTO `user`(`username`,`password`) VALUES ('aleksakucerovic@gmail.com','aleksa')");
            $this->connection->query("INSERT IGNORE INTO `user`(`username`,`password`) VALUES ('milicakucerovic@gmail.com','milica')");
            $this->connection->query("INSERT IGNORE INTO `user`(`username`,`password`) VALUES ('milenakucerovic@gmail.com','milena')");

            $this->connection->query("CREATE TABLE IF NOT EXISTS `destinacije` (
  `destinacija_id` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `snimak` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drzava` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grad` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `muzika` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");

            $this->connection->query("INSERT IGNORE INTO `destinacije` (`destinacija_id`, `autor`, `snimak`, `drzava`, `grad`, `opis`, `datum`, `muzika`) VALUES
(1, 2, 'video1.mp4', 'Француска', 'Бретања', 'Видео снимак северозападног дела Француске и полуострва Бретања. Видео је снимљен дроном Mavic 2 pro у пролеће 2021. године', '2021-05-07', 'Х. Макс, Крхко дрвеће'),
(2, 1, 'video2.mp4', 'Боливија', 'Амазонија', 'Дивљи предели Амазоније снимљени дроном DJI Mavic Pro', '2021-08-21', 'Тони Андерсон, Дар живота'),
(3, 2, 'video3.mp4', 'Србија', 'село', 'Компилација видео снимака забележених у руралним подручјима наше земље. Видео снимци су снимани дроном DJI Mavic Mini 2 Fly More Combo', '2021-06-02', 'Тони Андерсон, Жеравица'),
(4, 3, 'video4.mp4', 'Србија', 'Тара', 'Компилација видео снимака насталих на планини Тари у пролеће 2021. године. Снимци су забалежени дроном DJI Mavic Mini 2 Fly More Combo.', '2021-04-21', 'Никола Ђурић, Демо'),
(5, 2, 'video5.mp4', 'Србија', 'Власинско језеро', 'Снимци Власинског језера забележени дроном  DJI Phantom 4 Pro', '2021-09-01', 'Сања Стеванов, Траг'),
(6, 2, 'video6.mp4', 'Ирска', 'Клонмел', 'Компилација видео снимака насталих у Ирској 2019. године.', '2019-09-01', 'Сања Стеванов, Приче'),
(7, 1, 'video7.mp4', 'Канада', 'Нијагарини водопади', 'Снимак Нијагариних водопада дроном DJI Mavic Mini 2 Fly More Combo', '2021-05-02', 'Џеф Кал'),
(8, 2, 'video8.mp4', 'Србија', 'Рашка', 'Снимак села Гњилица код Рашке. Видео је направљен дроном DJI Mavic Mini 2 Fly More Combo у јануару 2022. године.', '2022-01-27', 'Милица Кућеровић, Импресије'),
(9, 3, 'video9.mp4', 'Србија', 'Космај', 'Снимак планине Космај дроном DJI Mavic Mini 2 Fly More Combo. Снимак је направљен у јуну 2021. године.', '2021-06-27', 'Милица Кућеровић, Небо'");
        }

        private function prepareSelectUser()
        {
            return $this->connection->prepare("SELECT * FROM `user` WHERE `password`=? AND `username`=?");
        }

        function proveriKorisnika($user, $pass): bool
        {
            $prepared = $this->prepareSelectUser();
            $prepared->bind_param("ss", $pass, $user);
            $prepared->execute();
            return $prepared->get_result()->num_rows == 1;
        }

        function nizLokacija()
        {
            $query_res = $this->connection->query("SELECT * FROM `destinacije`");
            $result = [];
            foreach ($query_res as $row) {
                array_push($result, [$row['destinacija_id'], $row['snimak'], $row['drzava'], $row['grad'], $row['opis'], $row['datum'], $row['muzika'], $row['autor']]);
            }
            return $result;
        }
    }

    $connection = new Konekcija();

    ?>
</body>

</html>