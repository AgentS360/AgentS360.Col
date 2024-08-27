<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $codigo_pais = $_POST['codigo-pais'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Configuración del correo
    $to = "agents360col@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje del formulario de contacto";
    $body = "Nombre: $nombre\nCorreo: $correo\nTeléfono: +$codigo_pais $telefono\nMensaje:\n$mensaje";
    $headers = "From: $correo";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "El mensaje se envió correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>
