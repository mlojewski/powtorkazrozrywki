<?php
/**
 *
 */
 require "user.php";
class VIPUser extends User
{
  public $vipCardNumber;
  function __construct($name, $surname, $mail, $vipCardNumber)
  {
    parent::__construct($name, $surname, $mail);
    if (checkCard($vipCardNumber) == true) {
   $this->vipCardNumber = $vipCardNumber;
 }else {
   $this->vipCardNumber == null;
 }
  }
  private function checkCard($newNumber)
  {
    if ($newNumber > 999 && $newNumber%2==0) {
      return true;
    }else {
      return false;
    }
  }
  public function getVipCardNumber()
  {
    return $this->vipCardNumber;
  }
  public function setVipCardNumber($newCardNumber)
  {
    if ($this->checkCard($newCardNumber) == true) {
      $this->vipCardNumber = $newCardNumber;
    }else {
      return $this->vipCardNumber;
    }
  }
}


 ?>
