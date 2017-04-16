<?php

if ($_SERVER['REQUEST_METHOD']==='POST') {
  if($_POST['choose']=='polish'){
    setcookie('jezyk', 'polski', time() + 600);
  }elseif ($_POST['choose']=='english') {
    setcookie('jezyk', 'angielski', time() +600);
  }
}
var_dump($_COOKIE);
/*
 * Tutaj wczytaj dane przesłane POST-em i nastaw odpowiednie ciasteczko
 */

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D4</title>
</head>
<body>
    Język został nastawiony<br>
    <a href = 'select_language.php'>wróć</a>
</body>
</html>
