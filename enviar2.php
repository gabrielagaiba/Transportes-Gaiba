<?php
    $nombre = $_POST ['nombre'];
    $mail = $_POST ['email'];
    $telefono = $_POST ['telefono'];
    $asunto = $_POST ['asunto'];
    $mensaje = $_POST ['mensaje'];

    $header ='From: ' . $mail. "\r\n";
    $header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje_mail = "Este mensaje fue enviado por: " . $nombre . "\r\n";
    $mensaje_mail .= "Su email es: " . $mail . "\r\n";
    $mensaje_mail .= "Mensaje: " . $mensaje . "\r\n";
    $mensaje_mail .= "Enviado el " . date ('d/m/Y', time ());

    $para = 'ttesgaiba@gmail.com'; 
    $asunto_mail = 'Mensaje del sitio web -' . $asunto;

    mail($para, $asunto_mail, utf8_decode($mensaje_mail), $header);
    header("Location:index.html");
?>
