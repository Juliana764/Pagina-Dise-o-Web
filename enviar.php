<?php 
  $destino= "juliesgon2003@gmail.com";
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];
  $contenido = "nombre: " . $nombre . "\nemail: " . $email . "\nAsunto: " . $Asunto . "\nMensaje: " . $mensaje;
  mail(to, subject, message)
  header("location:contacto.html")


?>