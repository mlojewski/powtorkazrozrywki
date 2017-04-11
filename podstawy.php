<?php
$a = 0;
$b = 0;
$c = 0;

function checkTriangle($a, $b, $c){

  if ($a+$b>$c && $a+$c>$b && $c+$b>$a) {
    echo "da się stworzyć trójkąt o bokach ".$a." ".$b." oraz ".$c."<br>";
  }
  else {
    echo "nie da się stworzyć trójkąta <br>";
  }
}
checkTriangle(3,5,6);
checkTriangle(1,2,11);

 function compareThree($a, $b, $c)
{
  if ($a>$b && $a>$c) {
    echo "największą liczbą jest ".$a."<br>";
  }elseif ($b>$c && $b>$a) {
    echo "największą liczbą jest ".$b."<br>";
  }else {
    echo "największą liczbą jest ".$c."<br>";
  }
}
compareThree(3,5,77);
compareThree(5,3,11);
compareThree(33,2,44);

function gotThePower($a)
{
  $baza=1;
  for ($i=1; $i <=$a ; $i++) {
    $baza=$baza*$i;
  }
  echo $baza."<br>";
}
gotThePower(5);

function countBetween($a, $b)
{
  $result='';
  for ($i=$a; $i <=$b; $i++) {
    $result+=$i;
  }
  echo $result;
}
countBetween(5,10);

function showOdd($a)
{
  for ($i=0; $i <=$a ; $i++) {

    if ($i%2!=0) {
      echo $i." - nieparzysta<br>";
    }else {
      echo $i." - parzysta <br>";
    }
  }
}
showOdd(11);

function showSquare($x)
{
  for ($i=1; $i <=$x; $i++) {
    for ($j=1; $j <=$x; $j++) {
      echo " *";
    }
    echo "<br>";
  }
}
showSquare(4);

function showTree($x)
{
  for ($i=1; $i <= $x; $i++) {
    for ($j=1; $j <=$i ; $j++) {
      echo " *";
    }
    echo "<br>";
  }
}
showTree(5);
 ?>
