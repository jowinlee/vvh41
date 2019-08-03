<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
	require 'PHPMailer/src/OAuth.php';

	$mail = new PHPMailer();

	try {
	    $mail->SMTPDebug = 2;                                       
	    $mail->isSMTP();                                            
	    $mail->Host       = 'smtp.gmail.com';                       
	    $mail->SMTPAuth   = true;                                   
	    $mail->Username   = 'denzdesu@gmail.com';                  
	    $mail->Password   = 'kelankeindian1';                       
	    $mail->SMTPSecure = 'tls';                                  
	    $mail->Port       = 587;                                    

	    //Recipients
	    $mail->setFrom('denzdesu@gmail.com');
	    $mail->addAddress('vvhtesting13@gmail.com');               
	    $mail->addReplyTo('denzdesu@gmail.com');

	    // Content
	    $mail->isHTML(true);                                  
	    $mail->Subject = 'Your site has been created';
	    $mail->Body    = '<h1>Thank for creating your site with us.</h1><p>Click <a href="#">here</a> to reset password.</p>';

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>