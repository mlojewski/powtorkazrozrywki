<?php

function compareLotto()
{

  $prepare=range(1,49);
  $compare=array_rand($prepare, 6);
  $result=array_intersect($compare, $_POST['numer']);
  $liczba=count($result);
  echo "wylosowane liczby to: ";
  echo implode(" ", $compare);
  echo "<br>pokrywa się".$liczba."liczb a są to: <br>";
  echo implode(" ", $result);
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="#" method="POST">
      <?php
      for ($i=1; $i <= 49; $i++) {

        echo ("$i.<input type='checkbox' name='numer[]' value=".$i.">");
        if ($i%7==0) {
          echo "<br>";
        };
      }
       ?>
       <label><br>
       <input type="submit">
     </label>
    </form>

  </body>
</html>
<?php
if (count($_POST['numer'])==6) {
  compareLotto();
}else {
  echo "proszę podać 6 liczb ";
}

 ?>
