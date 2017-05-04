<?php
require "tweet.php";
require "user.php";
require "connect.php";
require "comment.php";
require "message.php";
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
    <title>Archiwum wiadomości</title>
  </head>
  <body>
<?php

$messageLoad = Message::loadAllMessagesByRecipientId($conn, $_SESSION['id']);
$messageProper = array_reverse($messageLoad);


?>
Archiwum otrzymanych wiadomości:<br>
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
<?php

$outgoingMessageLoad = Message::loadAllMessagesBySenderId($conn, $_SESSION['id']);
$outgoingMessageProper = array_reverse($outgoingMessageLoad);


?>
<br>Archiwum wysłanych wiadomości:<br>
<br>
<table border="3" cellspacing="7">

<tr><th>Treść wiadomości</th><th>odbiorca</th><th>data przesłania</th></tr>


<?php
foreach ($outgoingMessageProper as $value) {
  $id=$value->getRecipientId();
  $sql="SELECT username FROM users WHERE id=$id";
  $result = $conn->query($sql);
  $row=$result->fetch_assoc();
    echo "<tr>";
    echo "<td>".$value->getText()."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$value->getDate()."</td>";
    echo "</tr>";
  }
  ?>
</table>

 <br>Jeśli chcesz wrócić do strony głównej kliknij <a href="../main/mainpage.php">tutaj</a>
   </body>
 </html>
