<?php

function checkLength($password)
{
  $pattern = '/^[a-zA-Z0-9]{10,15}$/';
  $lengthCheck = preg_match($pattern, $password, $match);
    if ($lengthCheck == '1') {
      return true;
    }else {
      throw new Exception("hasło nieprawidłowej długości");

    }
}

function checkSmall($password)
{
  $pattern = '/[a-z]+/';
  $smallCheck = preg_match($pattern, $password, $match);
    if ($smallCheck == "1") {
      return true;
    }else {
      throw new Exception("hasło nie zawiera małej litery");
      ;
    }
}
function checkCapital($password)
{
  $pattern = '/[A-Z]+/';
  $capitalCheck = preg_match($pattern, $password, $match);
  if ($capitalCheck == '1') {
    return true;
  }else {
    throw new Exception("hasło nie zawiera wielkiej litery");
    ;
  }
}
function checkTwoInARow($password)
{
  $pattern = '/[a-z]{2}|[A-Z]{2}/';
  $twoInARowCheck = preg_match($pattern, $password, $match);
  if ($twoInARowCheck == '1') {
    throw new Exception("hasło zawiera dwa podobne znaki pod rząd");
  }else {
      return true;
  }
}
function checkPassword($password)
{
  try {
         checkLength($password);
         checkCapital($password);
         checkSmall($password);
         checkTwoInARow($password);
         return true;
   }catch(Exception $e){
         echo $e->getMessage();
         return false;
   }

  // if (checkLength($password) && checkCapital($password) && checkSmall($password) && checkTwoInARow($password)) {
  //   return true;
  // }else {
  //   return false;
  // }
}

var_dump(checkPassword("1234567890aDD"));
// function checkQuote($quote)
// {
//   $result = preg_match_all('~(["\'])([^"\']+)\1~', $quote, $arr);
//   var_dump($arr);
// }
// checkQuote('To jest jakiś tekst. "To jest cyctat1". To jest dalsza część tekstu. "To jest drugi cyctat".')

 ?>
