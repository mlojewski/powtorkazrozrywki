<?php

/**
 *
 */
 require ('connect.php');

class Tweet
  {
    private $id;
    private $userId;
    private $text;
    private $creationDate;

    function __construct()
    {
      $this->id = -1;
      $this->userId = '';
      $this ->text = '';
      $this ->creationDate = "";
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
    // if(is_int($userId)){
      $this->userId=$userId;
      return true;
    // }
  }
  public function gettext()
  {
    return $this->text;
  }
  public function settext($text)
  {
    if(is_string($text)){
      $this->text=$text;
      return true;
    }
  }
  public function getCreationDate()
  {
    return $this->creationDate;
  }
  public function setCreationDate($creationDate)
  {

      $this->creationDate = date('Y-m-d H:i:s');
      return true;

  }
  public function saveToDB(mysqli $conn)
  {
    if ($this->id == -1) {
      $sql = "INSERT INTO tweet(userId, text, creationDate) VALUES ('$this->userId','$this->text', '$this->creationDate')";
      $result = $conn->query($sql);
      if ($result == true) {
        $this->id = $conn->insert_id;
        return true;
      }
    }else {
      $sql = "UPDATE tweet SET userId='$this->userId', text='$this->text', creationDate='$this->creationDate' WHERE id=$this->id";
      $result = $conn->query($sql);
      if ($result == true) {
        return true;
      }
    }
    return false;
  }
  static public function loadTweetById(mysqli $conn, $id)
  {
      $sql = "SELECT * FROM tweet WHERE id=$id";
      $result = $conn->query($sql);
    if ($result == true && $result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $loadedTweet = new Tweet();
      $loadedTweet->id=$row['id'];
      $loadedTweet->userId=$row['userId'];
      $loadedTweet->text=$row['text'];
      $loadedTweet->creationDate=$row['creationDate'];
      return $loadedTweet;
    }
  return null;
  }

  static public function loadAllTweets(mysqli $conn)
  {
        $sql = "SELECT * FROM tweet";
        $ret = [];
        $result = $conn->query($sql);
      if ($result == true && $result->num_rows != 0) {
        foreach ($result as $row) {
          $loadedTweet = new Tweet();
          $loadedTweet->id=$row['id'];
          $loadedTweet->userId=$row['userId'];
          $loadedTweet->text=$row['text'];
          $loadedTweet->creationDate=$row['creationDate'];
          $ret[] = $loadedTweet;
        }
      }
    return $ret;
  }
static  public function loadAllTweetsByUserId(mysqli $conn, $userId)
  {
    $sql = "SELECT * FROM tweet WHERE userId=$userId";
    $ret =[];
    $result=$conn->query($sql);
    if ($result == true && $result->num_rows!=0) {
      foreach ($result as $row) {
        $loadedTweet = new Tweet();
        $loadedTweet->id=$row['id'];
        $loadedTweet->userId=$row['userId'];
        $loadedTweet->text=$row['text'];
        $loadedTweet->creationDate=$row['creationDate'];
        $ret[] = $loadedTweet;
      }
    }
    return $ret;
  }
  }
// $dupa = new Tweet();
// $dupa->setUserId(15);
// $dupa->settext('pjonty tłyt');
// $dupa->setCreationDate();
// $dupa->saveToDB($conn);

// var_dump($dupa);
 ?>
