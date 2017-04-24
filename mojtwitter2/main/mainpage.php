<?php

require "../src/tweet.php";
require "../src/user.php";
require "../src/connect.php";
require "../src/comment.php";
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
    <title>Mój twitter</title>
  </head>
  <body>
    <?php

      echo "<p> Siemka ".$_SESSION['userName']."!<br> Twój zarejestrowany adres email to: ".$_SESSION['userLogin']."<br><a href='logout.php'>WYLOGUJ</a>";//wyświetlenie danych pobranych z bazy

      $tweetload = Tweet::loadAllTweets($conn);
      $tweetPreProper = array_reverse($tweetload);
      $tweetProper = array_slice($tweetPreProper,0,7);//wczytywanie 7 ostatnich tweetów

      // $loadedUserId = TwitterUser::loadUserByID($conn, $_SESSION['id']);
if($_SERVER['REQUEST_METHOD'] == 'POST'){// dodawanie nowego tweeta do bazy mysql

  if (!empty($_POST)) {
    $newTweet=new Tweet();
    $newTweet->setUserId($_SESSION['id']);
    $newTweet->settext($_POST['tweet']);
    $newTweet->setCreationDate(date('Y-m-d H:i:s'));
    $addNewTweet = $newTweet->saveToDB($conn);
    if ($addNewTweet== true) {
      header("Location: mainpage.php");
    }

  //TODO dodać w cudowny sposób informowanie o dodaniu nowego tweeta
  }
}
     ?>
     <form action="mainpage.php" method="POST">
  Tutaj możesz dodać tweeta:
  <br>
  <label><textarea maxlength="160" name="tweet" cols="80" rows="3" placeholder="tu wpisz treść"/></textarea></label><br>
  <input type="submit" value="wyślij tweeta"/>
  <br>
  <br>
  <br>
</form>
Gorąca siódemka - ostatnie 7 dodanych tweetów to:<br>
<br>
<table border="3" cellspacing="7">

<tr><th>Treść tweeta</th><th>Autor</th><th>email autora</th><th>data przesłania</th><th>skomentuj</th></tr>


<?php

  foreach ($tweetProper as $value) {
    $id=$value->getUserId();
    $sql="SELECT email, username FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    echo "<tr>";
    echo "<td>".$value->getText()."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$value->getCreationDate()."</td>";
    echo '<td><form action="../src/singletweet.php" method="GET">
                    <input type="hidden" name="tweetId" value="'.$value->getId().'" />
                    <input type="submit" value="Skomentuj" />
                  </form></td>';
    echo "</tr>";
  }
  ?>
</table>
<br>
<?php
$tweetUserLoad = Tweet::loadAllTweetsByUserId($conn, $_SESSION['id']);
$tweetUserLoadPreProper = array_reverse($tweetUserLoad);
$tweetUserLoadProper = array_slice($tweetUserLoadPreProper, 0, 10);

?>
Ostatnie 10 Twoich tweetów
<br>
<br>
<table border="3" cellspacing="5">
  <tr><th>Treść tweeta</th><th>Data przesłania</th><th>liczba komentarzy</th></tr>

  <?php
foreach ($tweetUserLoadProper as $value) {
  $commentLoadByTweetID = Comments::loadAllCommentsByTweetId($conn, $value->getId());
  $liczbaKomentow = count($commentLoadByTweetID);//liczę długość tablicy z komentarzami do danego tweeta
  echo "<tr>";
  echo "<td>".$value->gettext()."</td>";
  echo "<td>".$value->getCreationDate()."</td>";
  echo "<td>.$liczbaKomentow.</td>";//dlaczego są kropki?
  echo "</tr>";
  }
  ?>
  </table>
<br>
<br>
<?php
$commentUserLoad = Comments::loadAllCommentsByUserId($conn, $_SESSION['id']);
$commentUserLoadPreProper = array_reverse($commentUserLoad);
$commentUserLoadProper = array_slice($commentUserLoadPreProper, 0, 10);

?>
Ostatnie 10 Twoich komentarzy
<br>
<br>
<table border="3" cellspacing="5">
  <tr><th>Treść komentarza</th><th>Data przesłania</th><th>komentarz do tweeta </th></tr>

  <?php
foreach ($commentUserLoadProper as $value) {
  $selectedTweetID = $value->getTweetId();
  $sql="SELECT text FROM tweet WHERE id=$selectedTweetID";
  $result = $conn->query($sql);
  $row=$result->fetch_assoc();
  echo "<tr>";
  echo "<td>".$value->gettext()."</td>";
  echo "<td>".$value->getCreationDate()."</td>";
  echo "<td>".$row['text']."</td>";
  echo "</tr>";
}//TODO:jakimś cudem pobrać treść a nie tylko ID komentarza
  ?>
  </table>
<br>
  </body>
</html>
