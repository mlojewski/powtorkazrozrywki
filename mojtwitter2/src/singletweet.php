<?php

require "tweet.php";
require "user.php";
require "connect.php";
require "comment.php";
session_start();
if (!isset($_SESSION['loggedUser'])) {
  header('Location:index.php');
  exit();
}
setcookie('tweetID', $_GET['tweetId'], time() +100);// to jest oszustwo bo nie umiem przenieść w formularzu danych ze zmiennej $_GET
echo "Strona tweetu ".$_GET['tweetId']."<br>";
$loadedTweet = Tweet::loadTweetById($conn, $_GET['tweetId']);
$getAuthor = $loadedTweet->getUserId();
$sql="SELECT username FROM users WHERE id=$getAuthor";
$result = $conn->query($sql);
$row=$result->fetch_assoc();
foreach ($row as $value) {

  echo "treść tweeta:" .$loadedTweet->getText()."<br>";
  echo "autor: ".$row['username']."<br>";
  echo "data przesłania: ".$loadedTweet->getCreationDate()."<br>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="singlecomment.php" method="POST">
      Skomentuj tego tweeta:
      <br>
      <label><textarea maxlength="60" name="comment" cols="50" rows="2" placeholder="tu wpisz treść"/></textarea></label><br>
      <input type="submit" value="wyślij komentarz"/>
      <br>
    <?php
    $commentTweetLoad = Comments::loadAllCommentsByTweetId($conn, $_GET['tweetId']);
    $commentTweetLoadProper = array_reverse($commentTweetLoad);
    ?>
    <br>
    Komentarze do tego tweeta:
    <br>
    <br>
    <table border="3" cellspacing="5">
      <tr><th>Treść komentarza</th><th>Data przesłania</th><th>autor komentarza</th></tr>

      <?php
    foreach ($commentTweetLoadProper as $value) {
      echo "<tr>";
      echo "<td>".$value->getText()."</td>";
      echo "<td>".$value->getCreationDate()."</td>";
      echo "<td>".$_SESSION['userName']."</td>";
      echo "</tr>";
    }//TODO:jakimś cudem pobrać autora komentarza a nie tylko jego id
      ?>
      </table>
    <br>
  </body>
</html>
