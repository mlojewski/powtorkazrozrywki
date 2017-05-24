<?php

if (isset($_COOKIE['odlicz'])) {
  setcookie('odlicz', time(), time() -600);
  echo "ciasteczko usunięte";
}

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="warsztaty_1_3.php">wróć</a>
   </body>
 </html>
