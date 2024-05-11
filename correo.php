
<?php

require 'vendor/autoload.php';
use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\SMTP;
use PHPmailer\PHPmailer\Exception;
 


$mail= new PHPmailer(true);
try{

$mail -> SMTPDbug= SMTP::DEBUG_SERVER;
$mail -> isSMTP();
$mail ->Host= 'smtp.gmail.com';
$mail -> SMTPAuth=true;

$mail -> username = 'hipatia.confirmacion@gmail.com';
$mail->password= 
$mail->SMTPSecure='ssl';
$mail->SMTPSecure= PHPMailer :: ENCRYPTION_SMTPS;
$mail->Port=465;
$mail ->setFrom('hipatia.confirmacion@gmail.com',"No responder");
$mail->addAddress('salazarwalter@gmail.com',"bienvenido");
$contenido="<h3>hola mundo</h3>";
$mail -> isHTML(true);
$mail ->Subject='registro en hipatya';
$mail->Body=$contenido;
$mail->AltBody="texto alternativo";
$mail->send();
echo 'mensaje enviado a salazarwalter@gmail.com';
}
catch(Exception $e){
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}

?>