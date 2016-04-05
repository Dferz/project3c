<?php
	require 'library/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;

	if (isset($_POST['submit'])) {
		$emailAddress = $_POST['email'];
		$nameAddress = $_POST['nama'];
		$message = $_POST['message'];
	}else{
		session_start();
		$emailAddress = $_SESSION['email'];
		$nameAddress = $_SESSION['nama'];
		$message = $_SESSION['message'];
		$attachment = $_SESSION['att'];

		unset($_SESSION['email']);
		unset($_SESSION['nama']);
		unset($_SESSION['message']);
		unset($_SESSION['att']);
	}
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	//$mail->SMTPDebug = 2;                               // Enable verbose debug output

	//SMTP Server
	$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
	$mail->Username = 'oopuye2015@gmail.com';               // SMTP username
	$mail->Password = 'informatikauns';                     // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	//send email address To & From
	$mail->setFrom($emailAddress, $nameAddress);
	$mail->addAddress('oopuye2015@gmail.com', 'donasi3c');
	$mail->AddReplyTo($emailAddress);

	//fill value message
	$mail->IsHTML(true);
	$mail->Subject = '3C';
	$mail->Body = $message;
	$mail->AltBody = $message;
	if(isset($attachment)){
		$mail->addAttachment('../formData/'.$attachment, $attachment);	
	}
	
	if(!$mail->send()) {
	   // echo 'Message could not be sent.';
	   // echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	   // echo 'Message has been sent';
	}
?>