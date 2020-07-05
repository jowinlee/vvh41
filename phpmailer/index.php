<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';


	$mail = new PHPMailer;
	$mail->SMTPDebug = 3;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "contact@virtualvisiblehands.com";
	$mail->Password = "cotiraho#!!38";
	$mail->setFrom('contact@virtualvisiblehands.com');
	$mail->addReplyTo('contact@virtualvisiblehands.com');
	$mail->addCC('virtualvisiblehands@gmail.com');
	$mail->addAddress($account); //reciever
	$mail->Subject = 'Virtual Visible Hands Successfull Registration.';
	$body = '<div style="border: 1px solid #ccc; border-radius: 5px">
				<div style="padding: 10px 40px; background-color: #ccc;">
					<img src="https://irp-cdn.multiscreensite.com/1a7979e6/dms3rep/multi/mobile/vvh4.png" style="height: 110px;">
				</div>
				<div style="padding: 10px 40px;">
					<h3><strong>Félicitations!</strong> Voici votre nouveau site! Bonjour <strong>'.$account.'</strong>,</h3>
					<hr>
					<p>Votre site est maintenant prêt. Vous trouverez ci-dessous un lien vers votre nouveau tableau de bord. Ce dernier vous permet d\'accéder à votre compte et de modifier votre site.</p>
					<p>Je recommande d\'ajouter cette URL dans vos favoris, ou au moins de l\'enregistrer quelque part où vous pouvez facilement la retrouver, car vous en aurez besoin pour vous connecter à votre tableau de bord dans le futur.</p>
					<p>Votre URL de connexion : <a href="'.$resetPassLink.'">'.$resetPassLink.'</a></p>
					<p>Votre nom d\'utilisateur : '.$account.'.</p>
					<p>Remarque : veuillez mettre à jour votre mot de passe au cours des 30 prochains jours, sinon cette URL expirera.</p>
					<p>Cordialement,</p>
					<p>contact@vvhpro.fr</p>
					<p>Monsieur Guilhem Arnal <br>S.A.S. Virtual Visible Hands <br>Service relation client<br>0630906774</p>
				</div>
			</div>';
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

?>
