<?php

session_start();

if (isset(($_SESSION['loggedUser'])) && ($_SESSION['loggedUser'] == true)) {
  header('Location: mainpage.php');
  exit();
}
if (isset($_SESSION['properRegistration'])) {
  echo "Witaj nowy użytkowniku, zaloguj się";
  unset($_SESSION['properRegistration']);
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mój twitter</title>
  </head>
  <body>
  <h1>  Lorem ipsum dolor sit amet, consectetur adipiscing elit<br></h1>

<a href="register.php">Rejestracja </a>- załóż konto na twitterze<br> <br>


  <form action="zaloguj.php" method="POST">
    Login:<br>
    <input type="text" name="login"><br>
    Hasło:<br>
    <input type="password" name="password"><br>
    <input type="submit" value ="zaloguj"><br>
  </form>
    <?php
    if (isset($_SESSION['loginFail'])) { // jeśli jest ustawiona zmienna sesyjna (w wyniku złego logowania ze strony zalogj)to ją uruchom
      echo $_SESSION['loginFail'];
    }

     ?>
  </body>
</html>
