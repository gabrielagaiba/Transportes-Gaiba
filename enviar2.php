<?php
$nombre = $_POST ['nombre-usuario'];
$mail = $_POST ['email-usuario'];
$telefono = $_POST ['telefono-usuario'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

$alto = $_POST ['alto'];
$ancho = $_POST ['ancho'];
$profundidad = $_POST ['profundidad'];
$peso = $_POST ['peso'];
$retirar = $_POST ['retirar'];
$entregar = $_POST ['entregar'];


$header ='Form: ' . $mail. "\r\n";
$header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por" . $nombre . "\r\n";
$mensaje .= "Su email es:" . $mail . "\r\n";
$mensaje .= "Mensaje:" $_POST ['mensaje'] . "\r\n";
$mensaje .= "Enviado el " .date ('d/m/Y', time ());
$mensaje .= "El tamaño del bulto es:" . $alto . , . $ancho . , . $profundidad . , . $peso . "\r\n"; 
$mensaje .= "Se retira en:". $retirar . "\r\n";
$mensaje .= "Se entrea en:". $entregar . "\r\n";

$para = 'ttesgaiba@gmail.com'; //
$asunto = 'Mensaje del sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header;
header("Location:index.html");
?>


