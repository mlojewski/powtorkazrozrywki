<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
  echo "wymagane dane post";
}elseif (!isset($_POST)) {
  echo "źle przekazane dane post";
}else {
    if(isset($_POST['email'])){
      echo $_POST['email']."<br>";
    }
    if (isset($_POST['password'])) {
      echo $_POST['password'];
    }
}
