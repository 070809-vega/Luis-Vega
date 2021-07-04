<?php
    $destino= 'vegalu63@gmail.com';
    $nombre = $_Post['nombre'];
    $correo = $_Post['correo'];
    $telefono = $_Post['telefono'];
    $descripcion = $_POST['descripcion'];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nDescripcion: " . $descripcion;
    mail($destino, "Contacto", $contenido);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";


?>