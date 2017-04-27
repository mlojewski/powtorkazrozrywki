<?php

session_start();

if (isset($_POST['email'])) {
  $validationComplete = true; //udana walidacja
  $username=$_POST['username'];

  if((strlen($username)>250) || (strlen($username)<1)) {
    $validationComplete = false;
    $_SESSION['err_nick'] = "nick nie może być krótszy niż 1 i dłuższy niż 250 znaków";
  }
  if (ctype_alnum($username) == false) {//czy ma znaki alfanumeryczne
    $validationComplete = false;
    $_SESSION['err_nick'] = "nazwa użytkownika musi składać się tylko z liter łacińskich i cyfr";
  }
  $email=$_POST['email'];
  $correctEmail = filter_var($email, FILTER_SANITIZE_EMAIL);//czyści ze znaków przestankowych i polskich

  if ((filter_var($correctEmail, FILTER_VALIDATE_EMAIL) == false) || ($correctEmail != $email)) {//czy jest emailem
    $validationComplete = false;
    $_SESSION['err_email'] = "podaj prawidłowy adres email";
  }
  $password1=$_POST['password1'];
  $password2=$_POST['password2'];

  if ((strlen($password1)<6) || (strlen($password1)>20)) {
    $validationComplete = false;
    $_SESSION['err_password'] = "hasło musi mieć pomiędzy 6 a 20 znaków";
  }

  if ($password1 != $password2) {
    $validationComplete = false;
    $_SESSION['err_password'] = "podane hasła nie są takie same";
  }

  $hashedPassword = password_hash($password1, PASSWORD_BCRYPT);// szyfrowanie hasła

  //captcha
  $secret = '6Lf1zx4UAAAAAJYd9ZpbW-gia-wmlsBEKP3HSxTn';
  $captchaVerify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
  $response = json_decode($captchaVerify);
    if ($response->success == false) {
      $validationComplete = false;
      $_SESSION['err_bot'] = "potwierdź że nie jesteś robotem - zaznacz captchę";
    }

require_once"../src/connect.php";
mysqli_report(MYSQLI_REPORT_STRICT);

  try {
    $conn = @new mysqli($host, $user, $password, $db);
      if($conn->connect_errno!=0){
        throw new Exception(mysqli_connect_errno());
      }else {
        $result = $conn->query("SELECT id FROM users WHERE email= '$email'");
          if (!$result) { //jeśli nie udało się wyszukać
            throw new Exception($conn->error);
          }
          $emailNo= $result->num_rows;
            if ($emailNo>0) {//jeśli jest taki email
              $validationComplete = false;
              $_SESSION['err_email'] = "tki email jest już zarejestrowany w bazie";
            }
              if ($validationComplete == true) {//jeśli wszystkie testy zaliczone dodajemy do bazy
                if ($conn->query("INSERT INTO users VALUES (NULL, '$email', '$username', '$hashedPassword')")) {
                  $_SESSION['properRegistration'] = true;
                  header('Location:index.php');
                }else {
                  throw new Exception($conn->error);
                }
        exit();
                # tu będzie insert do bazy
              }
        $conn->close();
      }
  } catch (Exception $e) {
    echo "błąd serwera - spróbuj jeszcze raz";
    echo $e;
  }

}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Twitter - załóż konto</title>
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <style>
        .error
        {
          color:green;
          margin-top: 20px;
          margin-bottom: 20px;
        }
     </style>
   </head>
   <body>
     <form method="post">
        Username: <br> <input type="text" name="username"><br>
        <?php

        if (isset($_SESSION['err_nick'])) {
          echo '<div class = "error">'.$_SESSION['err_nick'].'</div>';
          unset($_SESSION['err_nick']);
        }
         ?>
        Email: <br> <input type="text" name="email"><br>
        <?php

        if (isset($_SESSION['err_email'])) {
          echo '<div class = "error">'.$_SESSION['err_email'].'</div>';
          unset($_SESSION['err_email']);
        }
         ?>
        Password: <br> <input type="password" name="password1"><br>
        <?php

        if (isset($_SESSION['err_password'])) {
          echo '<div class = "error">'.$_SESSION['err_password'].'</div>';
          unset($_SESSION['err_password']);
        }
         ?>
        Repeat password: <br> <input type="password" name="password2"><br>
        <div class="g-recaptcha" data-sitekey="6Lf1zx4UAAAAAMo7g1uucA2QKJ-TrKHtLJyFUw_f"></div>
        <?php

        if (isset($_SESSION['err_bot'])) {
          echo '<div class = "error">'.$_SESSION['err_bot'].'</div>';
          unset($_SESSION['err_bot']);
        }
         ?>
        <input type="submit"  value="register">
     </form>
   </body>
 </html>
