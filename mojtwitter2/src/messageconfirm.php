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
if($_SERVER['REQUEST_METHOD'] == 'GET'){

 if ((!empty($_GET)) && ($_SESSION['id'] != $_GET['recipient_id'])) {// sprawdzam czy nie wysyła do samego siebie
    $newMessage=new Message();
    $newMessage->setSenderId($_SESSION['id']);
    $newMessage->setRecipientId($_GET['recipient_id']);
    $newMessage->settext($_GET['message']);
    $newMessage->setDate(date('Y-m-d H:i:s'));
    $newMessage->setReadconfirm(0);
    $addNewMessage = $newMessage->saveToDB($conn);
    if ($addNewMessage== true) {
      $_SESSION['message_sent'] = true;
      header("Location: ../main/mainpage.php");
    }
  }else {
    echo "nie można wysłać wiadomości do samego siebie <br>";
    echo "<a href= '../main/mainpage.php'>przejdź do strony głównej</a>";
  }
}

?>
