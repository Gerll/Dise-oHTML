<?php
  $destino = "leyva.german@uabc.edu.mx";
  $nombre = $_Post["nombre"];
  $correo = $_Post["correo"];
  $telefono = $_Post["telefono"];
  $celular = $_Post["celular"];
  $mensaje = $_Post["mensaje"];
  $contenido = "Nombre: ".$nombre ."\nCorreo: ".$correo ."\nTeléfono: " .$telefono
  ."\nMensaje: ".$mensaje;
  mail($destino,"Contacto", $contenido);
 ?>
