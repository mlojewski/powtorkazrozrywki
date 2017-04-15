<?php
session_start();

  # code...
}

/* Tutaj umieść kod który:
 * 1. Wczyta tablicę z ocenami z sesji (jeżeli jej nie ma to ją utworzy)
 * 2. Wczyta dane przesłane POST-em
 * 3. Jeżeli dane spełniają założenia (liczba z zakresu 1-6) to doda ją na końcu tablicy
 * 4. nastawi nową wartość w sesji (do sesji wkładamy tablicę z nową oceną)
 * 5. Wyliczy średną  z ocen
*/
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C2</title>
    <form action="#" method="POST">
      <label>
        <input type="number" min="1" max ="6" step="1.00" name="grade">

      </label>
      <input type="submit" name="ocena" value="polski">
      <input type="submit" name="ocena" value="angielski">
      <input type="submit" name="ocena" value="wloski">
    </form>
</head>
<body>

<?php

// tutaj umieść kod wyświetlający tablicę z ocenami i średną z nich

?>

<!--

Tutaj napisz formularz używając HTML

-->

</body>
</html>
