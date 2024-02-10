<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$headers = "From:".$email."\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

//mail('bruno.guala@fi.uncoma.edu.ar','contacto desde mi form', $mensaje, $headers )

echo "<p>El mensaje se ha enviado correctamente</p>"

?>