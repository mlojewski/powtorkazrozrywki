<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
  echo "witaj ".$_POST['userName'].' '.$_POST['userSurname'];
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B1</title>
</head>
<body>

<?php


?>


<form action="index.php" method="POST">
    <label>
        Imię:
        <input type="text" name="userName">
    </label>
    <label>
        Nazwisko:
        <input type="text" name="userSurname">
    </label>
    <input type="submit">
</form>

</body>
</html>
