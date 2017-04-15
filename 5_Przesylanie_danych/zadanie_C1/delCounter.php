<?php
session_start();
if (isset($_SESSION['counter'])) {
  unset($_SESSION['counter']);
}else {
  echo "nie było sesji";
}
// tutaj umieść kod usuwający wartośc z sesji

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C1</title>
</head>
<body>
    <h1> Sesja wyzerowana </h1>
</body>
</html>
