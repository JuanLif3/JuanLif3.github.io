<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes realizar cualquier acción con los datos recibidos, como enviar un correo o almacenarlos en una base de datos.

    // Por ejemplo, enviar un correo con los datos del formulario:
    $destinatario = "juanitololilifeloli@gmail.com";
    $asunto = "Mensaje desde formulario de contacto";
    $contenido = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
    mail($destinatario, $asunto, $contenido);

    // Redirigir al usuario a una página de éxito o gracias por enviar el formulario:
    header("Location: gracias.html");
    exit();
}
?>