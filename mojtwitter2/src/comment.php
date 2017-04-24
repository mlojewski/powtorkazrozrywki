<?php

require ('connect.php');

/**
 *
 */
class Comments
{
  private $id;
  private $userId;
  private $tweetId;
  private $creationDate;
  private $text;
  function __construct()
  {
    $this->id = -1;
    $this->userId='';
    $this->tweetId='';
    $this->creationDate='';
    $this->text='';
  }
  public function getId()
  {
    return $this->id;
  }
  public function getUserId()
  {
    return $this->userId;
  }
  public function setUserId($userId)
  {

      $this->userId=$userId;

  }
  public function getTweetId()
  {
    return $this->tweetId;
  }
  public function setTweetId($tweetId)
  {

      $this->tweetId=$tweetId;
  }
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  public function setCreationDate($creationDate)
  {
    $this->creationDate=$creationDate=date('Y-m-d H:i:s');
    return $this;
  }
  public function getText()
  {
      return $this->text;
  }
  public function setText($text)
  {

      $this->text=$text;

  }
  public function saveToDB(mysqli $conn)
  {
    if ($this->id == -1) {
      $sql = "INSERT INTO comments(userId, tweetId, creationDate, text) VALUES ('$this->userId', '$this->tweetId', '$this->creationDate', '$this->text')";
      $result = $conn->query($sql);
      if ($result == true) {
        $this->id = $conn->insert_id;
        return true;
      }
    }else {
      $sql = "UPDATE comments SET userId='$this->userId', tweetId='$this->tweetId', creationDate='$this->creationDate', text='$this->text' WHERE id=$this->id";
        $result = $conn->query($sql);
      if ($result == true) {
        return true;
      }
    }
    return false;
  }
static public function loadCommentById(mysqli $conn, $id)
{
  $sql = "SELECT * FROM comments WHERE id=$id";
  $result = $conn->query($sql);
  if ($result == true && $result ->num_rows == 1) {
    $row = $result->fetch_assoc();
    $loadedComment = new Comments();
    $loadedComment->id=$row['id'];
    $loadedComment->userId=$row['userId'];
    $loadedComment->tweetId=$row['tweetId'];
    $loadedComment->creationDate=$row['creationDate'];
    $loadedComment->text=$row['text'];
    return $loadedComment;
  }
  return null;
}
static public function loadAllComments(mysqli $conn)
{
  $sql = "SELECT * FROM comments";
  $ret = [];
  $result = $conn->query($sql);
  if ($result == true && $result ->num_rows !=0) {
    foreach ($result as $row) {
      $loadedComment = new Comments();
      $loadedComment->id=$row['id'];
      $loadedComment->userId=$row['userId'];
      $loadedComment->tweetId=$row['tweetId'];
      $loadedComment->creationDate=$row['creationDate'];
      $loadedComment->text=$row['text'];
      $ret[] = $loadedComment;
    }
  }
  return $ret;
}

static public function loadAllCommentsByTweetId(mysqli $conn, $tweetId)
//chyba będzie wgrywać wszystkie komentarze do danego tweeta
{

    $sql = "SELECT * FROM comments WHERE tweetId=$tweetId";
    $ret = [];
    $result = $conn->query($sql);
    if ($result == true && $result ->num_rows !=0) {
      foreach ($result as $row) {
        $loadedComment = new Comments();
        $loadedComment->id=$row['id'];
        $loadedComment->userId=$row['userId'];
        $loadedComment->tweetId=$row['tweetId'];
        $loadedComment->creationDate=$row['creationDate'];
        $loadedComment->text=$row['text'];
        $ret[] = $loadedComment;
      }
    }
    return $ret;
}
static public function loadAllCommentsByUserId(mysqli $conn, $userId)
//ta z kolei ma wgrywać wszystkie komentarze tegu usera
{
  $sql = "SELECT * FROM comments WHERE userId=$userId";
  $ret = [];
  $result = $conn->query($sql);
  if ($result == true && $result ->num_rows !=0) {
    foreach ($result as $row) {
      $loadedComment = new Comments();
      $loadedComment->id=$row['id'];
      $loadedComment->userId=$row['userId'];
      $loadedComment->tweetId=$row['tweetId'];
      $loadedComment->creationDate=$row['creationDate'];
      $loadedComment->text=$row['text'];
      $ret[] = $loadedComment;
    }
  }
  return $ret;
}
}

 ?>
