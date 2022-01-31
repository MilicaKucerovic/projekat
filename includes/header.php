<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .header {
    position: fixed;
    width: 100%;
    height: 80px;
    display: block;
    background-color:  #272b25;
}
ul {
    margin-top: 0;
}
.unutrasnji_header {
    width: 1000px;
    height: 100%;
    display: block;
    margin: 0 auto;
    
    
}
.logo_container {
    position: absolute;
    float: left;
    height: 100%;
    display: table;
    margin-top: 12px;
    /* ovo sam menjala */
    left: 190px;
   
}
.logo_container h1 a {
    color: white;
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    font-family: 'Mochiy Pop P One', sans-serif;
    font-size: 32px;
    font-weight: 200;
    font-style: normal;
}
.logo_container h1 span {
    font-weight: 900;
    font-style: normal;
}
.navigacija {
    float: right;
    height: 100%;  
}
.navigacija a {
    height: 100%;
    float: left;
    display: table;
    padding: 0px 20px;
}
.navigacija :hover, .logo_container h1 a {
    opacity: 0.8;
}
.navigacija :visited, .logo_container h1 a {
    text-decoration: none;
}
.navigacija :active, .logo_container h1 a {
    text-decoration: none;
}
.navigacija :link, .logo_container h1 a {
    text-decoration: none;
}
.navigacija a:last-child {
    padding-right: 0px;
}
.navigacija a li {
    height: 100%;
    display: table-cell;
    vertical-align: middle;
    font-family: 'Mochiy Pop P One', sans-serif;
    font-size: 16px;
    color: white;
}
    </style>
</head>
<body>
<div class = "header">
    <div class = "unutrasnji_header">
        <div class = "logo_container">
            <h1> <a href = "../naslovna/naslovna.php">Филан<span>дрон</span></a></h1> 
        </div>
        <ul class = "navigacija">
            <a href = "../naslovna/naslovna.php"><li>НАСЛОВНА</li></a>
            <a href = "../onama/onama.php"><li>О НАМА</li></a>
            <a href = "../galerija/galerija.php"><li>ГАЛЕРИЈА</li></a>
            <a href = "../raspored/raspored.php"><li>РАСПОРЕД</li></a>
            <a href = "../droniranje/droniranje.php"><li>ДРОНИРАЊЕ</li></a>
            <a href = "../kontakt/kontakt.php"><li>КОНТАКТ</li></a>
            <a href = "../prijava/login.php"><li>ЗАЈЕДНИЦА</li></a>

        </ul>
    </div>
   
</div>
</body>
</html>