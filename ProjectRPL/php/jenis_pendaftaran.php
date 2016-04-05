<?php
	session_start();
	if(isset($_POST['submit']) && $_POST['jenis_pendaftaran']!=''){
		$_SESSION['jenis']=$_POST['jenis_pendaftaran'];
		header("location: ../form-daftar2.php");
	}else{
		die("mohon diisi");
		header("location: ../form-daftar.php");
	}

?>