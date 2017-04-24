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

$tweetUserLoad = Tweet::loadAllTweetsByUserId($conn, $_SESSION['id']);
$tweetUserLoadPreProper = array_reverse($tweetUserLoad);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Pełne archiwum Twoich tweetów <?php echo $_SESSION['userName'] ?>
    <br>
    <br>
    <table border="3" cellspacing="5">
      <tr><th>Treść tweeta</th><th>Data przesłania</th><th>liczba komentarzy</th><th>strona tweetu</th></tr>

      <?php
    foreach ($tweetUserLoadPreProper as $value) {
      $commentLoadByTweetID = Comments::loadAllCommentsByTweetId($conn, $value->getId());
      $liczbaKomentow = count($commentLoadByTweetID);//liczę długość tablicy z komentarzami do danego tweeta
      echo "<tr>";
      echo "<td>".$value->gettext()."</td>";
      echo "<td>".$value->getCreationDate()."</td>";
      echo "<td>.$liczbaKomentow.</td>";//dlaczego są kropki?
      echo '<td><form action="../src/singletweet.php" method="GET">
                      <input type="hidden" name="tweetId" value="'.$value->getId().'" />
                      <input type="submit" value="Zobacz" />
                    </form></td>';
      echo "</tr>";
      }
      ?>
      </table>
      Jeśli chcesz wrócić do strony głównej kliknij <a href="../main/mainpage.php">tutaj</a>
  </body>
</html>
