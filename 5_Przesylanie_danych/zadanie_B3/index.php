<?php



function calc()
{
  if ($_POST['convertionType']=='celcToFahr') {

  $output=32+(($_POST['degrees']*9)/5);
}else {
  $output=(5*($_POST['degrees']-32)/9);
}
return $output;
}
// tutaj umieść kod który będzie przeliczał stopnie (najlepiej napisz do tego funkcję i jej użyj)

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B3</title>
</head>
<body>

<?php

echo (calc())

// Tutaj umieść kod który będzie wyświetlał przeliczoną wartość

?>

<form action="index.php" method="POST">
    <label>
        Temperatura:
        <input type="number" min="0.00" step="0.01" name="degrees">
    </label>
    <input type="submit" name="convertionType" value="celcToFahr">
    <input type="submit" name="convertionType" value="FahrToCelc">
</form>

</body>
</html>
