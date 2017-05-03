<?php
require "connect.php";

class Message {
  private $message_id;
  private $sender_id;
  private $recipient_id;
  private $text;
  private $date;
  private $readconfirm;

  function construct()
  {
    $this->id = -1;
    $this->sender_id = '';
    $this->recipient_it ='';
    $this->text='';
    $this->date='';
    $this->readconfirm='';
  }
  public function getMessageId()
  {
  return $this->id;
  }
  public function getSenderId()
  {
    return $this->sender_id;
  }
  public function setSenderId($sender_id)
  {
    $this->sender_id=$sender_id;
  }
  public function getRecipientId()
  {
    return $this->recipient_id;
  }
  public function setRecipientId($recipient_id)
  {
    $this->recipient_id=$recipient_id;
  }
  public function getText()
  {
    return $this->text;
  }
  public function setText($text)
  {
    $this->text = $text;
  }
  public function getDate()
  {
    return $this->date;
  }
  public function setDate($date)
  {
    $this->date = $date = date('Y-m-d H:i:s');
  }
  public function getReadconfirm()
  {
    return $this->readconfirm;
  }
  public function setReadconfirm($readconfirm)
  {
    if($this->readconfirm==''){
     $this->readconfirm = 0;
   }elseif($this->readconfirm==0){
     $this->readconfirm = 1;
   }
 }

  public function saveToDB(mysqli $conn)
  {
    if ($this->id = -1) {
      $sql = "INSERT INTO messages(sender_id, recipient_id, text, date, readconfirm) VALUES ('$this->sender_id', '$this->recipient_id', '$this->text', '$this->date', '$this->readconfirm')";
      $result = $conn->query($sql);
      if ($result == true) {
        $this->id = $conn->insert_id;
        return true;
      }
    }else {
      $sql = "UPDATE messages SET sender_id='$this->sender_id', recipient_it='$this->recipient_it', text = '$this->text', WHERE id='$this->id'";
      $result = $conn->query($sql);
      if ($result == true) {
        return true;
      }
    }
    return false;
  }
  static public function loadMessageById(mysqli $conn, $message_id)
  {
    $sql = "SELECT * FROM messages WHERE message_id = $message_id";
    $result = $conn->query($sql);
    if ($result == true && $result ->num_rows == 1) {
      $row = $result->fetch_assoc();
      $loadedMessage = new Message ();
      $loadedMessage->message_id=$row['message_id'];
      $loadedMessage->sender_id=$row['sender_id'];
      $loadedMessage->recipient_id=$row['recipient_id'];
      $loadedMessage->text=$row['text'];
      $loadedMessage->date=$row['date'];
      $loadedMessage->readconfirm=$row['readconfirm'];
      return $loadedMessage;
    }
    return null;
  }
  static public function loadAllMessages(mysqli $conn)
  {
    $sql = "SELECT * FROM messages";
    $ret = [];
    $result = $conn->query($sql);
    if ($result == true && $result ->num_rows !=0) {
      foreach ($result as $row) {
        $loadedMessage = new Message ();
        $loadedMessage->id=$row['message_id'];
        $loadedMessage->sender_id=$row['sender_id'];
        $loadedMessage->recipient_id=$row['recipient_id'];
        $loadedMessage->text=$row['text'];
        $loadedMessage->date=$row['date'];
        $loadedMessage->readconfirm=$row['readconfirm'];
        $ret[] = $loadedMessage;
      }
    }
    return $ret;
  }
  static public function loadAllMessagesBySenderId(mysqli $conn, $sender_id)
  {
    $sql = "SELECT * FROM messages WHERE sender_id=$sender_id";
    $ret = [];
    $result = $conn->query($sql);
    if ($result == true && $result ->num_rows !=0) {
      foreach ($result as $row) {
        $loadedMessage = new Message ();
        $loadedMessage->id=$row['message_id'];
        $loadedMessage->sender_id=$row['sender_id'];
        $loadedMessage->recipient_it=$row['recipient_it'];
        $loadedMessage->text=$row['text'];
        $loadedMessage->date=$row['date'];
        $loadedMessage->readconfirm=$row['readconfirm'];
        $ret[] = $loadedMessage;
      }
    }
    return $ret;
  }
  static public function loadAllMessagesByRecipientId(mysqli $conn, $recipient_id)
  {
    $sql = "SELECT * FROM messages WHERE recipient_id=$recipient_id";
    $ret = [];
    $result = $conn->query($sql);
    if ($result == true && $result ->num_rows !=0) {
      foreach ($result as $row) {
        $loadedMessage = new Message ();
        $loadedMessage->id=$row['message_id'];
        $loadedMessage->sender_id=$row['sender_id'];
        $loadedMessage->recipient_id=$row['recipient_id'];
        $loadedMessage->text=$row['text'];
        $loadedMessage->date=$row['date'];
        $loadedMessage->readconfirm=$row['readconfirm'];
        $ret[] = $loadedMessage;
      }
    }
    return $ret;
  }
}

 ?>
