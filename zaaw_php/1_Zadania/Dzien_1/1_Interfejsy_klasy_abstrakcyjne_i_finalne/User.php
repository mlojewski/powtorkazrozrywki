<?php

abstract class User {

  protected $username;
  protected $password;
  protected $loginFail;

  abstract function checkLogin($login, $password);
  abstract function setLogin($login);
  abstract function setPassword($password);

     final public function login($username, $password)
    {
      return  $this ->checkLogin($username, $password);
    }
}
