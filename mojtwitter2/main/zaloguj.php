<?php
session_start();
require "connect.php";

if($conn->connect_errno!=0){ //jeśli połączenie jest udane - jeśli osattnie połączenie się powiodło
  echo "error: ".$conn->connect_errno." Opis: ".$conn->connect_error;//wywala numer i opis błędu połączenia
}else {
  $login=$_POST['login'];
  $password=$_POST['password'];

  $sql="SELECT * FROM users WHERE email='$login' AND hashedPassword='$password'";//tresć zapytania do bazy - wyszukaj użytkownika o takim loginie i haśle
  if ($result=$conn->query($sql)) { // jeśli wykonane zapytanie o powyższej treści jest udane to.. jeśli nie zostanie wykonane to nie wywali błędów na wierzch
    $userNo=$result->num_rows; // ilu jest userów i tym loginie i haśle?
    if ($userNo>0) {//komuś udało się zalogować - tu może wyjść tylko 1 bo login jest unikalny
      $row = $result->fetch_assoc(); // pobierz wiersz z bazy z danymi zalogowanego usera
      $_SESSION['userLogin']=$row['email']; //zmienna sesyjna trzymająca sam login - email
      $_SESSION['userName']=$row['username'];//zmienna sesyjna trzymająca nazwę użytkownika
      unset($_SESSION['loginFail']); // podwójne zabezpieczenie - jeśli udało się zalogować to usuń zmienną sesyjną z błędem logowania
      $result->close();//usuwa pobrany rekord z bazy
      header('Location: mainpage.php');//przekierowanie na stronę główną

    }else {//nie udało się zalogować
      $_SESSION['loginFail']='<span style="color:purple"><b>Nieprawidłowe dane logowania spróbuj jeszcze raz!</b></span>';
      header('Location:index.php'); //jeśli nie udało się zalogować to ustaw zmienna sesyjna
    }
  };
  $conn->close();
}

 ?>
