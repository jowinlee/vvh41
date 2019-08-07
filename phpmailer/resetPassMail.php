<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

function getResetMail($account,$resetPassLink){

	$mail = new PHPMailer;

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "vvhtesting13@gmail.com";
	$mail->Password = "VVHtesting13";
	$mail->setFrom('vvhtesting13@gmail.com');
	$mail->addReplyTo('vvhtesting13@gmail.com');
	$mail->addAddress($account); //reciever
	$mail->Subject = 'Successfully Registered.';
	$body = '<p>Thank you for creating your website with us, click <a href="'.$resetPassLink.'">here</a></p>';
	$mail->Body = $body;
	$mail->AltBody = strip_tags($body);

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
}