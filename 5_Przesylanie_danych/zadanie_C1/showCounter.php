<?php
session_start();
if (isset($_SESSION['counter'])) {



  $_SESSION['counter']++;
}else {
  echo "nie ma danych sesji";
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C1</title>
</head>
<body>
    <h1> Wartość wczytana z sesji to:
<?php

echo $_SESSION['counter'];
?>
 </h1>
<a href="delCounter.php">usuń sesję</a>
</body>
</html>
