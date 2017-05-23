<?php

session_start();
if (!isset($_SESSION['pageCounter'])) {
  echo "esja nie posiada wartości pod kluczem pageCounter";
}else {
  echo $_SESSION['pageCounter'];
  $_SESSION['pageCounter']++;
}
