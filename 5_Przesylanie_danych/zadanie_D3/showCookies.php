<?php

setcookie('jezyk', 'en', time() + 600);
setcookie('user', 'cin', time() + 600);
 ?>



<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D3</title>
</head>
<body>
    <h1> Wszystkie ciasteczka w systemie: </h1>

<?php

if (isset($_COOKIE['jezyk'])) {
  echo ("<a href='delCookie.php?jezyk=en'>ciasteczko język<br></a>");

}
if (isset($_COOKIE['user'])) {
  echo ("<a href='delCookie.php?user=cin'>ciasteczko user</a>");
}

    /*
     * Wypisz tutaj wszystkie ciasteczka (możesz je umieścić np. w liście)
     * Pamiętaj o dodanie do nich linku który przeniesie Cię na stronę delCookie.php, przekazując nazwę ciasteczka metodą GET
     */
    ?>
</body>
</html>
