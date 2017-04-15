<?php


function kantor()
{
  if ($_POST['conversionType']=='EURtoUSD') {
    $output=$_POST['cashAmount']*1.06;

  }
  elseif ($_POST['conversionType']=='USDtoEUR') {
    $output=$_POST['cashAmount']*0.94;

  }
  elseif ($_POST['conversionType']=='EURtoPLN') {
    $output=$_POST['cashAmount']*4.23;

  }
  elseif ($_POST['conversionType']=='PLNtoEUR') {
    $output=$_POST['cashAmount']*0.24;

  }
  elseif ($_POST['conversionType']=='USDtoPLN') {
    $output=$_POST['cashAmount']*3.99;

  }
  elseif ($_POST['conversionType']=='PLNtoUSD') {
    $output=$_POST['cashAmount']*0.25;

  }
  return $output;
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B4</title>
</head>
<body>

<?php

echo(kantor())
// Tutaj umieść kod który będzie wyświetlał przeliczoną walutę

?>

<form action="#" method="POST">
    <label>
        Kwota:
        <input type="number" min="0.00" step="0.01" name="cashAmount">
    </label>
    <label>
        <br>Konwersja:<br>
        <input type="radio" name="conversionType" value="EURtoUSD" checked> EUR → USD <br>
        <input type="radio" name="conversionType" value="USDtoEUR" > USD → EUR <br>
        <input type="radio" name="conversionType" value="EURtoPLN" > EUR → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoEUR" > PLN → USD <br>
        <input type="radio" name="conversionType" value="USDtoPLN" > USD → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoUSD" > PLN → USD <br>
    </label>
    <input type="submit">
</form>

</body>
</html>
