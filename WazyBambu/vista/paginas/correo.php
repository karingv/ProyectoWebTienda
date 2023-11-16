<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre'] && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']))) {
        $name=$_POST['nombre'];
        $email=$_POST['correo'];
        $asunto=$_POST['asunto'];
        $mensaje=$_POST['mensaje'];
        $header="From: noreply@example.com" . "\r\n";
        $header.="Reply-To: noreply@example.com". "\r\n";
        $header.="X-Mailer: PHP/".phpversion();
        $mail= mail($email,$asunto,$mensaje,$header);
        if ($mail) {
            echo "<h4> !mail enviado exitosamente!</h4>";
        }
    
    }
}
?>