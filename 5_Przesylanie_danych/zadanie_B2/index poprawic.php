<?php

$cenzura=['kurde', 'cholera', 'dupa'];
$pocenzurze=['*****', '*******', '****'];

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B2</title>
</head>
<body>

<?php
// function naCenzurowanym()
// {

  if (in_array($_POST['userText'], $cenzura)) {

    $pierwszy=$_POST['userText'];
    $zmieniony=str_replace($cenzura, $pocenzurze, $pierwszy);
    echo $zmieniony;
  }
// }


?>


<form action="index.php" method="POST">
    <label>
        Twój tekst:
        <input type="text" name="userText">
    </label>
    <label>
        Jestem świadomy konsekwencji
        <input type="checkbox" name="userAgreement">
    </label>
    <input type="submit">
</form>
<?php

if ($_SERVER['REQUEST_METHOD']==='POST') {
  echo $_POST['userText'];
}

 ?>
</body>
</html>
