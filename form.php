<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

$mensaje = "Este mensaje fue enviador por: " . $nombre . ",/r/n";
$mensaje .= "Su e-mail es:" . $email . ",/r/n";
$mensaje .= "Mensaje:" . $_POS['message'] . ",/r/n";
$mensaje .= "Enviado el" . date('d/m/y', time());


// Configurar el destinatario y otros detalles del correo electrónico
$para = 'ignaciosoraka@gmail.com';
$asunto = 'Mensaje enviado desde la web';
    

// Enviar el correo electrónico
mail($para, $asunto, utf8_decode($mensaje), $header);

// Redireccionar a una página de confirmación o mostrar un mensaje de éxito
header('Location:exito.html');
    

?>
