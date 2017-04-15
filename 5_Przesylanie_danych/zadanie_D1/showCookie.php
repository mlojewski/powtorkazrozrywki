<?php
if (isset($_COOKIE['user'])) {
  var_dump($_COOKIE['user']);
}else {
  echo 'nie ma ciasteczka';
}
// tutaj umieść kod wczytujący wartośc z ciasteczka

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D1</title>
</head>
<body>
    <h1> Wartość wczytana z ciasteczka to:<?php echo $_COOKIE['user'];  ?>  </h1>
    <a href="./delCookie.php">usuń</a>
</body>
</html>
