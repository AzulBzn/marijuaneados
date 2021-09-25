<?php
$name = $_POST ['name'];
$email = $_POST ['email'];
$mail = $_POST ['mail'];
$phone = $_POST ['phone'];
$message = $_POST ['message'];

$header = 'From:' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n"; 
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Su direccion es: " . $email . "\r\n";
$message .= "Su email es: " . $mail . "\r\n"
$message .= "Su telefono es: " . $phone . "\r\n"
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'bazanazul22@gmail.com';
$asunto = 'Compra';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html")
?>