<?php
if (!isset($_COOKIE['odlicz'])) {
  setcookie('odlicz', time(), time() +600);
  echo "ciasteczko utworzone";
}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>witaj użytkowniku ostatnio byłeś na tej stronie <?php echo (time() - $_COOKIE['odlicz']) ?> sekund temu</h1>
       <br><a href="warsztaty_1_3_del.php">usuń</a>
   </body>
 </html>
