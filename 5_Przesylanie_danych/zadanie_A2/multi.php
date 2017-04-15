<?php
$width=null;
$height=null;


if ($_SERVER['REQUEST_METHOD']==='GET') {
    $width=$_GET['width'];
    $height=$_GET['height'];

}else {

  $width=5;
    $height=10;
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A2</title>
</head>
<body>

<?php
for ($i=0; $i <=$height; $i++) {
  for ($j=0; $j <=$width ; $j++) {
  echo $i." x ".$j.' = '.$i*$j." |";
  }
  echo "<br>";
}

?>


</body>
</html>
