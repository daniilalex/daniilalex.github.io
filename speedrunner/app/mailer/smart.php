<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'daniil.alex1@gmail.com';                 // Наш логин
$mail->Password = 'gidqzdwstpdmkuvu';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('daniil.alex1@gmail.com', 'Pulse');   // От кого письмо 
$mail->addAddress('danalex.1@yandex.com', 'Dan Alex');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML
$body = '<p><strong>Hello</strong> this is my first php mailer</p>';

$mail->Subject = 'This is a test email';
$mail->Body    = $body;

if(!$mail->send()) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    return false;
} else {
	echo 'Message has been sent';
    return true;
}
