<?php
use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\Exception;

require 'phpmailer/src/exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPmailer(true);
    
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'rikoadhi@gmail.com';
    $mail -> Password = 'zknqbfkjrqyedrhx';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;

    $mail -> setFrom('rikoadhi@gmail.com');

    $mail -> addAddress($_POST["email"]);

    $mail -> isHTML(true);

    $mail -> Subject = $_POST["subject"];
    $mail -> Body = $_POST["pesan"];

    $mail -> send();

    echo
    "
    <script>
    alert('Email Terkirim');
    document.location.href = 'index.html';
    </script>
    ";

}
?>