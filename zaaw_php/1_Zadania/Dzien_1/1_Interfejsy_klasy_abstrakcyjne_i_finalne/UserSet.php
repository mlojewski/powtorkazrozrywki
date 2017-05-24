<?php
require "Client.php";

/**
 *
 */
class UserSet implements Iterator
{
private $klienci = [];
private $position = 0;

public function __construct()
{
  $this->klienci=[];
  $this->position = 0;
}
public function add(Client $objClient)
{
  $this->klienci[] = $objClient;
}
public function rewind() {
       $this->position = 0;
   }
public function valid()
{
  return isset($this->klienci[$this->position]);
}
public function current()
{
  $objClient = $this->klienci[$this->position];
  echo $objClient->getLogin();
  echo " ";
  echo $objClient->getPassword();
  echo "<br>";
}
public function next()
{
  $this->position++;
}
public function key()
{
  return $this->position;
}
public function checkLogin($inputPassword)
{
  foreach ($this->klienci as $key => $newClient) {
    if ($newClient->getPassword() == $inputPassword) {
    echo $newClient->getLogin();
    echo "<br>";
    }
  }
}
}
$test1=new UserSet();

$client0 = new Client();
$client0->setLogin('jurek');
$client0->setPassword('123456789');

$client1 = new Client();
$client1->setLogin('bomba');
$client1->setPassword('123456789');

$client2 = new Client();
$client2->setLogin('siurek');
$client2->setPassword('9876544321');

$test1->add($client0);
$test1->add($client1);
$test1->add($client2);

$test1->checkLogin('123456789');

foreach ($test1 as $key => $value) {
  var_dump($key);
  // var_dump($value);
}
