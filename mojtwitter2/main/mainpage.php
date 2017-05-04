<?php

require "../src/tweet.php";
require "../src/user.php";
require "../src/connect.php";
require "../src/comment.php";
require "../src/message.php";
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
    <style>
       .error
       {
         color:green;
         margin-top: 20px;
         margin-bottom: 20px;
       }
    </style>
  </head>
  <body>
    <?php

      echo "<p> Siemka ".$_SESSION['userName']."!<br> Twój zarejestrowany adres email to: ".$_SESSION['userLogin']."<br><a href='logout.php'>WYLOGUJ</a>";//wyświetlenie danych pobranych z bazy

      $tweetload = Tweet::loadAllTweets($conn);
      $tweetPreProper = array_reverse($tweetload);
      $tweetProper = array_slice($tweetPreProper,0,7);//wczytywanie 7 ostatnich tweetów
      $loadedAllUsers = TwitterUser::loadAllUsers($conn);
?>
<table border="3" cellspacing="3">
  <tr><th>wyślij wiadomość do:</th></tr>
  <?php
      foreach ($loadedAllUsers as $value) {
        $id=$value->getId();
        $name=$value->getUserName();
        echo "<tr>";
        echo '<td><form action="../src/messageconfirm.php" method="GET">
                        <input type ="text" name="message"/>
                        <input type="hidden" name="recipient_id" value="'.$id.'" />
                        <input type="submit" value="'.$name.'"/>
                      </form></td>';

        echo "</tr>";

      }
?>
</table>
<br>
<?php
if (isset($_SESSION['message_sent'])) {
  echo '<div class = "error"> wiadomość została wysłana</div>';
  unset($_SESSION['message_sent']);
}
$messageLoad = Message::loadAllMessagesByRecipientId($conn, $_SESSION['id']);
$messagePreProper = array_reverse($messageLoad);
$messageProper = array_slice($messagePreProper,0,7);

?>
Najnowsze 7 otrzymanych wiadomości:<br>
<br>
<table border="3" cellspacing="7">

<tr><th>Treść wiadomości</th><th>Autor</th><th>data przesłania</th><th>czy przeczytana</th><th>przeczytaj</th></tr>


<?php
foreach ($messageProper as $value) {
  $id=$value->getSenderId();
  $sql="SELECT username FROM users WHERE id=$id";
  $result = $conn->query($sql);
  $row=$result->fetch_assoc();
    echo "<tr>";
    echo "<td>".$value->getText()."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$value->getDate()."</td>";
    if ($value->getReadconfirm() == '0') {
    echo "<td>nie</td>";
  }else {
    echo "<td>tak</td>";
  }
    echo '<td><form action="../src/singlemessage.php" method="GET">
                    <input type="hidden" name="messageId" value="'.$value->getMessageId().'" />
                    <input type="submit" value="przeczytaj" />
                  </form></td>';
    echo "</tr>";
  }
  ?>
</table>
<br>Tutaj możesz zobaczyć swoje <a href="../src/messagearchive.php">archiwum wiadomości </a><br>
<?php
echo "<br>";
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
  <label><textarea maxlength="160" name="tweet" cols="40" rows="5" placeholder="tu wpisz treść"/></textarea></label><br>
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
<p>Zobacz wszystkie tweety w <a href="../src/tweetarchive.php">archiwum</a></p>
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
  <tr><th>Treść tweeta</th><th>Data przesłania</th><th>liczba komentarzy</th><th>strona tweetu</th></tr>

  <?php
foreach ($tweetUserLoadProper as $value) {
  $commentLoadByTweetID = Comments::loadAllCommentsByTweetId($conn, $value->getId());
  $liczbaKomentow = count($commentLoadByTweetID);//liczę długość tablicy z komentarzami do danego tweeta
  echo "<tr>";
  echo "<td>".$value->gettext()."</td>";
  echo "<td>".$value->getCreationDate()."</td>";
  echo "<td>".$liczbaKomentow."</td>";
  echo '<td><form action="../src/singletweet.php" method="GET">
                  <input type="hidden" name="tweetId" value="'.$value->getId().'" />
                  <input type="submit" value="Zobacz" />
                </form></td>';
  echo "</tr>";
  }
  ?>
  </table>
  <br>
  <p>Zobacz wszystkie swoje tweety w <a href="../src/tweetuserarchive.php">archiwum</a></p>
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
}
  ?>

  </table>
    <p>Zobacz wszystkie swoje komentarze w <a href="../src/commentuserarchive.php">archiwum</a></p>
<br>
  </body>
</html>
