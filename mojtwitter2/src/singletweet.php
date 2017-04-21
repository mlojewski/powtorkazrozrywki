<?php

require "tweet.php";
require "user.php";
require "connect.php";
session_start();
if (!isset($_SESSION['logged'])) {
  header('Location:index.php');
  exit();
}
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
