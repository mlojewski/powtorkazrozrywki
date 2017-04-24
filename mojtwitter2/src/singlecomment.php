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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $newComment = new Comments();
  $newComment->setUserId($_SESSION['id']);
  $newComment->setTweetId($_COOKIE['tweetID']);
  $newComment->setText($_POST['comment']);
  $newComment->setCreationDate(date('Y-m-d H:i:s'));
  $addNewComment = $newComment->saveToDB($conn);
  if ($addNewComment== true) {
    header("Location: ../main/mainpage.php");
  }
}

 ?>
