<?php

if (isset($_GET['name'])) {
echo $_GET['name'];
}elseif (isset($_GET['mail'])) {
  echo $_GET['mail'];
}elseif (isset($_GET['id'])) {
  echo $_GET['id'];
}else {
  echo "brak danych przekazanych getem";
}
