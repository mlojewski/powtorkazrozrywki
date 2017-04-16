<?php
if (isset($_COOKIE['jezyk'])) {
  var_dump($_COOKIE['jezyk']);
}
// tutaj umieść kod wczytujący ciasteczko (jeżeli jest)

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D4</title>
</head>
<body>
  <form action="set_language.php" method="POST">
    <select name="choose">
      <option value="polish">polski</option>
      <option value="english">angielski</option>
    </select>
    <br>
    <br>
      <input type="submit"></input>
  </form>  <!-- Tutaj umieść formularz do wybierania języka -->
<?php
if (isset($_COOKIE['jezyk'])) {
  echo 'wybrano język '.$_COOKIE['jezyk'];
}
 ?>
    <!-- Tutaj umieść informację o wybranym języku (jeżeli ciasteczko istnieje) -->
</body>
</html>
