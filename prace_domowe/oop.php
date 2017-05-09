<?php

/**
 *
 */
class Product
{
  static private $nextId = 0;
  private $id = '';
  private $name = '';
  private $description = '';
  private $price = '';
  private $quantity='';
  function __construct($name, $description, $price, $quantity)
  {
    $this->id = self::$nextId;
    self::$nextId++;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->quantity = $quantity;
  }
  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    if(is_string($name)){
      $this->name=$name;
      return true;
    }
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setDescription($description)
  {
    if(is_string($description)){
      $this->description=$description;
      return true;
    }
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    if ((is_float($price)) && ($price >= 0.01)) {
      $this->price=$price;
      return true;
    }
  }
  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setQuantity($quantity)
  {
  if ((is_int($quantity)) && ($quantity>0)) {
      $this->quantity=$quantity;
    }
  }
  public function getTotalSum()
  {
      if ($this->quantity>=3) {
      $totalSum=$this->price*$this->quantity*0.8;
      return $totalSum;
    }else {
        $totalSum=$this->price*$this->quantity;
    return $totalSum;
    }
  }
}
/**
 *
 */
class ShoppingCart
{
  public $products = [];
  public function addProduct(Product $newProduct)
  {
    $this->products[$newProduct->getId()]=$newProduct;
  }
  public function removeProduct($productId)
  {
    if(empty($this->products[$productId])){
      echo "nie da się usunąć produktu którego już nie ma";
    }else {
      unset($this->products[$productId]);
    }
  }
  public function changeProductQuantity($productId, $newQuantity)
  {
    if (empty($this->products[$productId])) {
      echo "nie ma tego produktu w bazie";
    }else {
    $this->products[$productId]->setQuantity($newQuantity);
    }
  }
  public function printReceipt()
  {
    foreach ($this->products as $value) {
      echo ("id is ".$value->getId().'<br>');
      echo ("name is ".$value->getName().'<br>');
      echo ("Price is ".$value->getPrice().'<br>');
      echo ("Quantity is ".$value->getQuantity().'<br>');
      echo ("total is ".$value->getTotalSum().'<br>');
    }
  }
}
$a = new Product ("ziemniak","irga", 2.5, 200);
$b = new Product ("burak", "cukrowy", 3.0, 100);
$koszyk = new ShoppingCart();
$koszyk->addProduct($a);
$koszyk->addProduct($b);
$koszyk->changeProductQuantity($b->getId(), 30);
$koszyk->removeProduct($a->getId());
$koszyk->printReceipt($a);


 ?>
