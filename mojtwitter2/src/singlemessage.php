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
$authorId= $loadedMessage->getSenderId();
var_dump($authorId);
  echo "treść wiadomości:" .$loadedMessage->getText()."<br>";
  echo "autor: ".$author->getUserName()."<br>";
  echo "data przesłania: ".$loadedMessage->getDate()."<br>";
$sql=" UPDATE messages SET readconfirm = 1 WHERE message_id = $loadedMessageId";
$result = $conn->query($sql);


echo "<br>";
echo '<a href = "../main/mainpage.php">Wróć do strony głównej</a>';
echo "<br>";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    Tu możesz odpowiedzieć <br>
    <form action="../src/messageconfirm.php" method="GET">
      <label><textarea maxlength="500" name="message" cols="100" rows="5" placeholder="tu wpisz treść"/></textarea></label><br>
                <?php echo("<input type='hidden' name='recipient_id' value=".$authorId.">") ?>   
                    <input type="submit" value="wyślij"/>
                  </form>
  </body>
</html>
