<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
  echo "witaj ".$_POST['userName'];
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formularz</title>
  </head>
  <body>
    <form action="warsztaty_1_1.php" method="POST">
      <label>
        <input type="text" name="userName">
      </label>
      <label>
        <input type="submit">
      </label>
    </form>
  </body>
</html>
