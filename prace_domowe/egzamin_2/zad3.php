<form action="#" method="POST">
    <label>Nazwa:
        <input type="text" name="name">
    </label>
    <label>Cena:
        <input type="number" name="price">
    </label>
    <label>Opis:
        <input type="text" name="description">
    </label>
    <input type="submit" value="wyślij">
</form>
<br>

<?php
require_once dirname(__FILE__).'/config.php';
if (isset($_POST['name']) && ($_POST['description']) && ($_POST['price'])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "INSERT INTO Items(name, description, price) VALUES ('$name', '$description', '$price')";
  $result = $conn->query($sql);
  if ($result == true) {

    echo "o bazy danych został dodany nowy przedmiot o id";
  }
}else {
  echo "Brak przesłania wymaganych danych POST";
};
