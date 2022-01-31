<!DOCTYPE html>
<html>

<head>
  <title>РАСПОРЕД</title>
  <link rel="stylesheet" href="./raspored.css">
  <script src="5-calendar.js"></script>
</head>

<body>
  <?php
  include_once("../includes/header.php");
  ?>
  <!-- (A) PERIOD SELECTOR -->
  <div id="calPeriod"><?php
                      // (A1) MONTH SELECTOR
                      // NOTE: DEFAULT TO CURRENT SERVER MONTH YEAR
                      $months = [
                        1 => "Јануар", 2 => "Фебруар", 3 => "Март", 4 => "Април",
                        5 => "Мај", 6 => "Јун", 7 => "Јул", 8 => "Август",
                        9 => "Септембар", 10 => "Октобар", 11 => "Новембар", 12 => "Децембар"
                      ];
                      $monthNow = date("m");
                      echo "<select id='calmonth'>";
                      foreach ($months as $m => $mth) {
                        printf(
                          "<option value='%s'%s>%s</option>",
                          $m,
                          $m == $monthNow ? " selected" : "",
                          $mth
                        );
                      }
                      echo "</select>";

                      // (A2) YEAR SELECTOR
                      echo "<input type='number' id='calyear' value='" . date("Y") . "'/>";
                      ?></div>

  <!-- (B) CALENDAR WRAPPER -->
  <div id="calwrap"></div>

  <!-- (C) EVENT FORM -->
  <div id="calblock">
    <form id="calform">
      <input type="hidden" name="req" value="save" />
      <input type="hidden" id="evtid" name="eid" />
      <label for="start">Датум почетка</label>
      <input type="datetime-local" id="evtstart" name="start" required oninvalid="this.setCustomValidity('Ово поље је обавезно')" oninput="this.setCustomValidity('')">
      <label for="end">Датум завршетка</label>
      <input type="datetime-local" id="evtend" name="end" required oninvalid="this.setCustomValidity('Ово поље је обавезно')" oninput="this.setCustomValidity('')">
      <label for="email">Адреса електронске поште</label>
      <input type="text" id="email" name="email" placeholder="Унесите свој имејл" required oninvalid="this.setCustomValidity('Ово поље је обавезно')" oninput="this.setCustomValidity('')">
      <label for="txt">Догађај</label>
      <textarea id="evttxt" name="txt" required oninvalid="this.setCustomValidity('Ово поље је обавезно')" oninput="this.setCustomValidity('')"></textarea>
      <label for="color">Боја</label>
      <input type="color" id="evtcolor" name="color" value="#e4edff" required oninvalid="this.setCustomValidity('Ово поље је обавезно')" oninput="this.setCustomValidity('')">
      <input type="submit" id="calformsave" value="Сачувај" />
      <input type="button" id="calformcx" value="Откажи" />
      <input type="button" id="calformdel" value="Обриши" <?php
                                                          if (!isset($_SESSION['user'])) {
                                                            echo "disabled";
                                                          } ?> />
    </form>
  </div>
</body>

</html>