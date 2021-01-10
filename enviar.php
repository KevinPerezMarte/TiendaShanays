<?php
$destino = "tiendashanays@gmail.com";
$nombre = $_POST["name"];
$correo = $_POST["email"];
$mensaje = $_POST["mensage"];
$contenido = "Nombre: ".$nombre . "\nCorreo: ". $correo . "\nMensaje: " . $mensaje;
mail($destino,$nombre, $contenido);
header("Location:gracias.html")
?>