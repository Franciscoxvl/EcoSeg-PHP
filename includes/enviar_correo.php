<!-- PHP: includes/enviar_correo.php -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Cargar las clases de PHPMailer
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    // Crear una nueva instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // Cambia esto al servidor SMTP que estás utilizando
        $mail->SMTPAuth   = true;
        $mail->Username   = 'franciscovaldez86@gmail.com';  // Tu dirección de correo electrónico
        $mail->Password   = 'tjhb cnhz oaef nttu';  // Tu contraseña del correo electrónico
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Configurar el correo
        $mail->setFrom($email, "Nueva peticion de contacto de ".$nombre);  // Tu dirección de correo y nombre
        $mail->addAddress('franciscovaldez86@gmail.com');  // Dirección del destinatario

        $mail->Subject = 'Nuevo mensaje del formulario de contacto';
        $mail->Body    = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nMensaje: $mensaje";

        // Enviar el correo
        $mail->send();
        header("Location: ../contacto.php?enviado=true");
        exit();

    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
} else {
    // Si no se ha enviado el formulario, redirige o muestra un mensaje de error
    echo 'Error: El formulario no se ha enviado correctamente.';
    header("Location: ../contacto.php");
    exit();
}
?>
