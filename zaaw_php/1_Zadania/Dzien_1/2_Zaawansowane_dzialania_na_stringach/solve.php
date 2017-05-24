<?php
// $email = "imie.nazwisko@firma.com.pl";
 function solve1($email)
{
  $stepOne = explode("@", $email);
  $stepTwo = explode(".", $stepOne[0]);
  foreach ($stepTwo as $value) {
    echo ucwords($value);
    echo " ";
  }
}
 function solve2($email){
  $stepOne = explode(".", $email);
  $stepTwo = array_reverse(explode("@", $stepOne[1]));
  foreach ($stepTwo as $value) {
    echo ucwords($value);
    echo " ";
  }
}
function solve3($email)
{
  $stepOne = explode("@", $email);
  $stepTwo = explode(".", $stepOne[0]);
  foreach ($stepTwo as $value) {
    echo strtoupper($value[0]);
    echo " ";
  }
}
solve1("imie.nazwisko@firma.com.pl");
solve2("imie.nazwisko@firma.com.pl");
solve3("imie.nazwisko@firma.com.pl")
 ?>
