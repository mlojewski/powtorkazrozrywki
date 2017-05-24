<?php
/**
 *
 */
 require "User.php";
class Client extends User
{

  public function checkLogin($login, $password)
  {
    if ($this->loginFail == 3) {
      return false;
    }
    if ($this->username == $login && $this->password == $password) {
      return true;
    }else {
      $this->loginFail ++;
      return false;
    }
  }
  public function getLogin()
  {
    return $this->username;
  }
  public function getPassword()
  {
    return $this->password;
  }
  public function setLogin($login)
  {
    $this->username = $login;
  }
  public function setPassword($password)
  {
    if (strlen($password) >=8) {
      $this->password = $password;
    }
  }
}
$oClient = new Client();
$oClient->setLogin('Jurek');
$oClient->setPassword('qwerrrrrrrrrrrrqwer');
// var_dump($oClient->login('Jurek', 'xxxxxxx'));

// var_dump($oClient);
