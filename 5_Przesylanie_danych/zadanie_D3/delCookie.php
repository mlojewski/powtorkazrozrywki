<?php

if ($_SERVER['REQUEST_METHOD']=== 'GET') {
  if (isset($_GET['jezyk'])) {
    setcookie('jezyk', 'en', time()-600);
  }elseif (isset($_GET['user'])){
    setcookie('user', 'cin', time()-600);
  }
}
// tutaj umieść kod usuwający ciasteczko

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 21</title>
</head>
<body>
    <h1> Ciasteczko o nazwie <?php
    if (isset($_GET['jezyk'])) {
      echo $_GET['jezyk'];
    }elseif (isset($_GET['user'])){
      echo $_GET['user'];
    }

     ?> zostało usunięte</h1>
</body>
</html>
<?php

var_dump($_COOKIE);
 ?>
