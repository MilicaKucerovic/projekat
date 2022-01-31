<!DOCTYPE html>
<html lang="en">
<head #procitaj {display: none;} >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О НАМА</title>
    <link rel = "stylesheet" href = "./onama.css">
    <!-- javascript -->
    <script>
    function myFunction() {
    var manje = document.getElementById("manje");
    var viseText = document.getElementById("vise");
    var procitajText = document.getElementById("procitaj");
  
    if (manje.style.display === "none") {
      manje.style.display = "inline";
      procitajText.innerHTML = "Прочитај више ✈️";
      viseText.style.display = "none";
    } else {
      manje.style.display = "none";
      procitajText.innerHTML = "Прочитај мање ✈️";
      viseText.style.display = "inline";
    }
    }  
         
    </script>
</head>
<body>
    <?php
    include_once ("../includes/header_gost.php");
    ?>
        <div class = "main">
            <h1>О НАМА...</h1>
            <p>
            <strong>ФиланДРОН </strong> је непрофитна организација која има за циљ помоћ најугроженијем становништву наше земље, а првенствено деци. 
            Ми желимо да свако дете у нашој земљи одраста безбрижно, да добије најбоље могуће образовање и расте у здравом окружењу. 
            Сав приход добијен од пројеката одлази у хуманитарне сврхе и отуда и наш назив ФиланДРОН који у себи уједињује филантропију и 
            љубав према видео уметности. До сада смо успешно завршили преко 200 пројеката и помогли деци у преко 100 градова наше земље. 
            
            <span id="manje"></span><span id="vise">Захваљујући подршци многих људи у нашој земљи и иностранству до 2022. године смо укупно прикупили преко 10 милиона динара и цео тај износ отишао је у хуманитарне сврхе. Уколико желите да нас ангажујете, молимо Вас да посетите страницу 
            <a href ="../raspored/raspored.php">РАСПОРЕД</a> и информишете се о слободним терминима. Хвала Вам што подржавате наш рад! 
             </span>
            </p>
            <br>
            <button id = "procitaj"  onclick="myFunction()" >Прочитај више ✈️</button>
        </div>

</body>
</html>