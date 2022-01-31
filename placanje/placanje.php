
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ПЛАЋАЊЕ</title>
    <link rel="stylesheet" href="./placanje.css">
    <link rel="preconnect" href="./placanje.css">
</head>
<body>
<span class = "button" >
<a href = "../droniranje/droniranje.php"><button type="button">НАЗАД</button></a>
</span> 
<form action = "./hvala.php" method = "POST">
    <div class="container">
        <h1>Потврдите плаћање</h1>
        <div class="prvi_red">
            <div class="vlasnik">
                <h3>Власник:</h3>
                <div class="input">
                    <input type="text" placeholder = "Унесите своје име и презиме" oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')" required >
                </div>
            </div>
            <div class="cvv">
                <h3>CVC код:</h3>
                <div class="input">
                    <input type="password" maxlength = 3 minlength = 3 placeholder = "CVC" required oninvalid="this.setCustomValidity('Ово поље је обавезно.')"
            oninput="this.setCustomValidity('')">
                </div>
            </div>
            <div class="iznos">
                <div class="input">
                    <input type="number"  min ="20000" placeholder = "Унесите жељени износ" title = "Минимални износ са уплату је 20000 динара" required oninvalid="this.setCustomValidity('Ово поље је обавезно.')"
            oninput="this.setCustomValidity('')">
                </div>
            </div>
        </div>
        <div class="drugi_red">
            <div class="kartica">
                <h3>Број картице:</h3>
                <div class="input">
                    <input type="number" minlenght = 13 maxlengt = 19 placeholder = "Унесите број картице" title = "Број картице мора имати између 13 и 19 цифара" required oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')">
                </div>
            </div>
        </div>
        <div class="treci_red">
            <h3>Датум истека картице:</h3>
            <div class="datumi">
                <div class="date">
                    <select name="months" id="mesec" required oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')">
                        <option value="Jan">Јануар</option>
                        <option value="Feb">Фебруар</option>
                        <option value="Mar">Март</option>
                        <option value="Apr">Април</option>
                        <option value="May">Мај</option>
                        <option value="Jun">Јун</option>
                        <option value="Jul">Јул</option>
                        <option value="Aug">Август</option>
                        <option value="Sep">Септембар</option>
                        <option value="Oct">Октобар</option>
                        <option value="Nov">Новембар</option>
                        <option value="Dec">Децембар</option>
                      </select>
                      <select name="years" id="godina" required oninvalid="this.setCustomValidity('Ово поље је обавезно')"
            oninput="this.setCustomValidity('')">
                        <option value="2020">2026</option>
                        <option value="2019">2025</option>
                        <option value="2018">2024</option>
                        <option value="2017">2023</option>
                        <option value="2016">2022</option>
                      </select>
                </div>
                <div class="kartice">
                    <img src="master.png" alt="">
                    <img src="visa.png" alt="">
                    <img src="paypal.png" alt="">
                </div>
            </div>    
        </div>
        <input type = "submit" class = "submit" value="Потврди">
        </form>
    </div>
</body>
</html>