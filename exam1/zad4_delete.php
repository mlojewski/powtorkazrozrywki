<?php
session_start();
if (isset($_SESSION['pageCounter'])) {
  echo $_SESSION['pageCounter'];
  unset($_SESSION['pageCounter']);
}else {
  echo "Sesja nie posiada wartości pod kluczem pageCounter";
}
