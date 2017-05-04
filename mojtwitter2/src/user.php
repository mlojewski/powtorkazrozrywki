<?php

/**
 *
 */
require ('connect.php');

class TwitterUser
{
  private $id;
  private $email;
  private $userName;
  private $hashedPassword;
  function __construct()
  {
    $this ->id = -1;
    $this ->email="";
    $this ->userName="";
    $this ->hashedPassword="";
  }
  public function getId()
  {
    return $this->id;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function setEmail($email)
  {
    if ((is_string($email)) && (strpos($email, '@'))){
      $this->email=$email;
      return true;
    }else {
      echo "podano nieprawidłowy email";
    }
  }
  public function getUserName()
  {
    return $this->userName;
  }
  public function setUserName($userName)
  {
    if (is_string($userName)) {
      $this->userName=$userName;
      return true;
    }else {
      echo "Podana wartość jest nieprawidłowa, login musi składać się z liter";
    }
  }
  public function getHashedPassword()
  {
    return $this->hashedPassword;
  }public function setHashedPassword($hashedPassword)
  {
    $hashedPassword=password_hash($hashedPassword, PASSWORD_BCRYPT);
    $this->hashedPassword=$hashedPassword;
    return true;
  }
  public function saveToDB(mysqli $conn)
  {
    if ($this->id == -1) {
      $sql = "INSERT INTO users(email, username, hashedPassword) VALUES ('$this->email', '$this->userName', '$this->hashedPassword')";
      $result = $conn->query($sql);
      if ($result == true) {
        $this->id = $conn->insert_id;
        return true;
      }
    }else {
        $sql = "UPDATE users SET email='$this->email',username='$this->userName', hashedPassword='$this->hashedPassword' WHERE id=$this->id";
        $result = $conn->query($sql);
        if ($result == true) {
          return true;
        }
      }
      return false;
    }

  static public function loadUserByID(mysqli $conn, $id)
  {
    $sql = "SELECT * FROM users WHERE id=$id";

    $result = $conn->query($sql);
    if ($result == true && $result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $loadedUser = new TwitterUser();
      $loadedUser ->id=$row['id'];
      $loadedUser ->email = $row['email'];
      $loadedUser ->userName = $row['username'];
      $loadedUser ->hashedPassword = $row['hashedPassword'];
      return $loadedUser;
    }
    return null;
  }

  static public function loadUserByUsername(mysqli $conn, $userName)
  {
    $sql = "SELECT * FROM users WHERE username=$userName";

    $result = $conn->query($sql);
    if ($result == true && $result->num_rows == 1) {
      $row = $result->fetch_assoc();
      $loadedUser = new TwitterUser();
      $loadedUser ->id=$row['id'];
      $loadedUser ->email = $row['email'];
      $loadedUser ->userName = $row['username'];
      $loadedUser ->hashedPassword = $row['hashedPassword'];
      return $loadedUser;
    }
    return null;
  }

  static public function loadAllUsers(mysqli $conn)
  {
    $sql = "SELECT * FROM users";
    $ret = [];
    $result = $conn->query($sql);
    if ($result == true && $result->num_rows != 0) {
      foreach ($result as $row) {
      $loadedUser=new TwitterUser();
      $loadedUser->id=$row['id'];
      $loadedUser->email=$row['email'];
      $loadedUser->userName = $row['username'];
      $loadedUser->hashedPassword = $row['hashedPassword'];

      $ret[] = $loadedUser;
      }
    }
    return $ret;
  }

  public function deleteUser(mysqli $conn)
  {
  if ($this->id !=-1) {
    $sql = "DELETE FROM users WHERE id = $this->id";
    $result = $conn ->query($sql);
    if ($result == true) {
      $this->id = -1;
      return true;
    }
    return false;
  }
  return true;
  }
}




 ?>
