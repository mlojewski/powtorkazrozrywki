<?php
session_start();
if (!isset($_SESSION['counter'])) {
  $_SESSION['counter']=0;
}else {
  echo "sesja już jest";
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C1</title>
</head>
<body>
    <h1> Sesja nastawiona na początkową wartość </h1>
    <a href="showCounter.php">link</a>
</body>
</html>
