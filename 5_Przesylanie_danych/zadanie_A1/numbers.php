<?php
function startEnd()
{

if ($_SERVER['REQUEST_METHOD']==='GET') {
  for ($i=$_GET['start']; $i <=$_GET['end'] ; $i++) {
  echo $i."<br>";
  }
}else {
  echo "dane nieprzesłane GETEM";
}
}
// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli liczby

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A1</title>
</head>
<body>

<?php



startEnd();

// tutaj użyj wcześniej przygotowanej funkcji

?>


</body>
</html>
