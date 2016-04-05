<?php

	if(isset($_POST['submitVerifikasiVolunteer'])){
		require '../php/sendMail.php';
		require '../templates/formVerifikasiSuccess.php';
		require '../php/config.php';
	
		header("refresh:3;url=$homepage");
	
	}elseif(isset($_POST['submit'])){
		
		//start session
		session_start();
		$_SESSION['message'] = "Ini Form Volunteer";
		$_SESSION['nama'] = $_POST['nama_panggilan'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['att'] = 'form-volunteer.html';

		// Start the buffering //
		ob_start();
		require '../templates/formVerifikasiVolunteer.php';
	}else{
		require '../templates/formVerifikasiFailed.php';
	}
			
?>
