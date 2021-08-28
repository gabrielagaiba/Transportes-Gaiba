<?php
    $alto = $_POST ['alto'];
    $ancho = $_POST ['ancho'];
    $profundidad = $_POST ['profundidad'];
    $peso = $_POST ['peso'];
    $retirar = $_POST ['retirar'];
    $entregar = $_POST ['entregar'];    
    $mail = $_POST ['email'];
    $telefono = $_POST ['telefono'];

    $header ='From: ' . $mail. "\r\n";
    $header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje_mail = "Las caracteristicas del bulto son: alto " . $alto . " ancho " . $ancho . " profundidad " . $profundidad . " peso " . $peso . "\r\n";
    $mensaje_mail = "Retirar de : " . $retirar . "\r\n";
    $mensaje_mail = "Entregar en : " . $entregar . "\r\n";
    $mensaje_mail .= "Su email es: " . $mail . "\r\n";
    $mensaje_mail .= "Enviado el " . date ('d/m/Y', time ());

    $para = 'ttesgaiba@gmail.com'; 
    $asunto_mail = 'Mensaje del sitio web - Cotizacion';

    mail($para, $asunto_mail, utf8_decode($mensaje_mail), $header);
    header("Location:index.html");
?>