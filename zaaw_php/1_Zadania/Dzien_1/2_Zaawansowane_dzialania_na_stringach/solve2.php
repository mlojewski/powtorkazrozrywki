<?php

$output = [];

   function step1($email)  {
    $stepOne = explode(".", $email);

    $alias = [0 =>$stepOne[0][0]];
    $stepTwo = array_replace($stepOne, $alias);
    $result = implode(".", $stepTwo);
    return $result;
  }
array_push($output, step1("imię.nazwisko@firma.com.pl"));

var_dump($output);
 ?>
