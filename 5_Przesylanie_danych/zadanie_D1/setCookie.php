<?php
if (!isset($_COOKIE['user'])) {
  setcookie('user', 'marcin', time() + 3600);
}
// tutaj umieść kod nastawiający wartośc w ciasteczku

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D1</title>
</head>
<body>
    <h1> Ciasteczko nastawione na początkową wartość </h1>
    <a href="./showCookie.php">pokaż</a>
</body>
</html>
