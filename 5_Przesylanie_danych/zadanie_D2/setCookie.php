<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
  setcookie($_POST['cookieName'], $_POST['cookieValue']);
}else {
  echo "wejście bez posta";
}
// tutaj umieść kod nastawiający wartośc w ciasteczku, ale tylko jeżeli wszeliśmy na stronę metodą POST

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D2</title>
</head>
<body>
    <form action="setCookie.php" method="POST">
        <label>
            Nazwa ciasteczka:
            <input type="text" name="cookieName">
        </label>
        <label>
            Wartość ciasteczka:
            <input type="text" name="cookieValue">
        </label>
        <input type="submit">
    </form>
</body>
</html>
