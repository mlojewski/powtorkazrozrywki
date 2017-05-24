<?php


if ($_SERVER['REQUEST_METHOD']=="POST") {
  if (!isset($_SESSION['task'])) {
    $_SESSION['task']=$_POST['task'];
  }
  if (!isset($_SESSION['date'])) {
    $_SESSION['date']=$_POST['date'];
  }
  if (!isset($_SESSION['place'])) {
    $_SESSION['place']=$_POST['place'];
  }
}
var_dump($_SESSION['date']);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>wpisz zadanie<br></h3>
    <form action="#" method="POST">
      <label>
        treść
        <input type="text" name="task">
      </label>
      <label>
        data
        <input type="text" name="date">
      </label>
      <label>
        miejsce
        <input type="text" name="place">
        <input type="submit">
    </form>
    <h4>Twoje zadania</h4>
  </body>
</html>
