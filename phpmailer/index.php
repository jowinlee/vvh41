<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();

$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "vvhtesting13@gmail.com";
$mail->Password = "VVHtesting13";
$mail->setFrom('vvhtesting13@gmail.com');
$mail->addReplyTo('vvhtesting13@gmail.com');

//reciever
$mail->addAddress('denzdesu@gmail.com');

$mail->Subject = 'PHPMailer GMail SMTP test';
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->AltBody = 'This is a plain-text message body';
//$mail->addAttachment('images/phpmailer_mini.png');
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}