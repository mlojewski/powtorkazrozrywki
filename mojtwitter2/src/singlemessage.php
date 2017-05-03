<?php

require "tweet.php";
require "user.php";
require "connect.php";
require "comment.php";
require "message.php";
session_start();
if (!isset($_SESSION['loggedUser'])) {
  header('Location:index.php');
  exit();
}

$loadedMessage = Message::loadMessageById($conn, $_GET['messageId']);
$loadedMessageId = $_GET['messageId'];
$author= TwitterUser::loadUserByID($conn, $loadedMessage->getSenderId());

  echo "treść wiadomości:" .$loadedMessage->getText()."<br>";
  echo "autor: ".$author->getUserName()."<br>";
  echo "data przesłania: ".$loadedMessage->getDate()."<br>";
$sql=" UPDATE messages SET readconfirm = 1 WHERE message_id = $loadedMessageId";
$result = $conn->query($sql);
// echo '
// <form action="../src/messageconfirm.php" method="GET">
//                 <input type ="text" name="message"/>
//                 <input type="hidden" name="recipient_id" value="'.$loadedMessage->getSenderId().'" />
//                 <input type="submit" value="odpowiedz"/>
//               </form>';
echo "<br>";
echo '<a href = "../main/mainpage.php">Wróć do strony głównej</a>';
