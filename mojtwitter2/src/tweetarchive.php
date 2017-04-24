<?php
require "tweet.php";
require "user.php";
require "connect.php";
require "comment.php";
session_start();
if (!isset($_SESSION['loggedUser'])) {// takiego ifa wklejamy do każdej podstrony do której ma mieć dostęp zalogowany user
  header('Location: index.php');
  exit();
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Archiwum tweetów</title>
  </head>
  <body>
<?php

$tweetload = Tweet::loadAllTweets($conn);
$tweetArchive = array_reverse($tweetload);
 ?>
Wszystkie tweety w archiwum:<br>
<br>
<table border="3" cellspacing="7">

<tr><th>Treść tweeta</th><th>Autor</th><th>email autora</th><th>data przesłania</th><th>skomentuj</th></tr>


<?php

  foreach ($tweetArchive as $value) {
    $id=$value->getUserId();
    $sql="SELECT email, username FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    echo "<tr>";
    echo "<td>".$value->getText()."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$value->getCreationDate()."</td>";
    echo '<td><form action="singletweet.php" method="GET">
                    <input type="hidden" name="tweetId" value="'.$value->getId().'" />
                    <input type="submit" value="Skomentuj" />
                  </form></td>';
    echo "</tr>";
  }
  ?>
</table>

Jeśli chcesz wrócić do strony głównej kliknij <a href="../main/mainpage.php">tutaj</a>
  </body>
</html>
