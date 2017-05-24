<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        
        require_once __DIR__.'/vendor/autoload.php';
        $mailer = new PHPMailer;
        
        $mailer->isSMTP();
        $mailer->Host = 'smtp.gmail.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'testmail.coderslab@gmail.com';
        $mailer->Password = 'coderslab03';
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = 587;
        
        
        $mailer->CharSet = 'UTF-8';
        $mailer->setFrom($_POST['fromEmail'], $_POST['nameSurname']);
        $mailer->addAddress('piotr.dul@coderslab.pl', 'PD');
        $mailer->Subject = 'Wiadomość z formularza kontaktowego';
        $mailer->Body = $_POST['content'];
        if(!$mailer->send()){
            echo 'Wiadomość nie została wysłana. ';
            echo 'Bład: ' . $mailer->ErrorInfo;
        } else {
            echo 'Wiadomość została wysłana';
        }
        
}
?>

<form method="POST">
    <label>
        Nadawca<br>
        <input type="text" name="destination" required="required">
    </label>
    <br>
    <label>
        Odbiorca<br>
        <input type="email" name="reciver" required="required">
    </label>
    <br>
    <label>
        Email<br>
        <textarea name="content" cols="80" rows="10" required="required"></textarea>
    </label>
    <br>
    <input type="submit" value="Wyślij">
</form>