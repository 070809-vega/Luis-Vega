<?php
    $destino= "vegalu63@gmail.com";
    $nombre = $_Post["nombre"];
    $correo = $_Post["correo"];
    $telefono = $_Post["telefono"];
    $descripcion = $_POST["descripcion"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nDescripcion: " . $descripcion;
    mail($destino, "Contacto", $contenido);
    header("Location:index.html");


?>