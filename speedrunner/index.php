<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = $_POST('name') ?? null;
$phone = $_POST('phone');
$email = $_POST('email') ?? null;
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'daniil.alex1@gmail.com';                     
    $mail->Password   = 'gidqzdwstpdmkuvu';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;       

    //Recipients
    $mail->setFrom('daniil.alex1@gmail.com', 'Pulse');
    $mail->addAddress('danalex.1@yandex.com', 'Dan Alex');    


    $body = '<p><strong>Hello</strong> this is my first php mailer</p>';

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'This is a test email';
    $mail->Body    = `
    The user has left contacts <br>
    Name: $name <br>
    Phone: $phone <br>
    Email: $email
    `;

    $mail->send();
    echo 'Message has been sent';

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
