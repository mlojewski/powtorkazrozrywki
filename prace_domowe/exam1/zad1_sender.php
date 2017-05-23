<?php

$dataToSend = [
    "name" => "Jacek",
    "mail" => "jacek@somemail.com",
    "id" => 42
];
foreach ($dataToSend as $key => $value) {
  echo "<a href = 'zad1_receiver.php?$key=$value'>link do strony</a> <br>";
}

?>
