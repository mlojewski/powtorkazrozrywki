<?php
require_once dirname(__FILE__).'/config.php';
if ($_SERVER['REQUEST_METHOD'] == "GET") {
  if (isset($_GET['userId'])) {
    $id = $_GET['userId'];

    $sql = "SELECT * FROM Messages WHERE user_id = $id";

    $result = $conn->query($sql);
    if ($result->num_rows!=0) {
      foreach ($result as $row) {
        echo $row['id']." ".$row['message']."<br>";
          }
    }else {
      echo "brak wiadomości dla danego użytkownika";
    }


  }else {
    echo "Brak przesłania wymaganych danych GET";
  }
}else {
  echo "Proszę wejść na stronę metodą GET";
}
