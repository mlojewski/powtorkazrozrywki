<?php
session_start();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "<p> Siemka ".$_SESSION['userName']." !<br> Twój zarejestrowany adres email to: ".$_SESSION['userLogin'];//wyświetlenie danych pobranych z bazy
     ?>
  </body>
</html>
