<?php
	
	if(isset($_POST['submitVerifikasi'])){
		require '../php/sendMail.php';
		require '../templates/formVerifikasiSuccess.php';
		require '../php/config.php';
	
		header("refresh:3;url=$homepage");
	
	}elseif(isset($_POST['submit'])){

		//start session
		session_start();
		$_SESSION['message'] = "Ini Form Donasi";
		$_SESSION['nama'] = $_POST['nama'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['att'] = "form-donatur.html";
		
		// Start the buffering //
		ob_start();
		require '../templates/formVerifikasiDonatur.php';
	}else{
		require '../templates/formVerifikasiFailed.php';
	}
			
?>
