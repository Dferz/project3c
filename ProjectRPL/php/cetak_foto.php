<?php

	session_start();
	include('connection.php'); 
	
	$no_pendaftaran = $_SESSION['no_pendaftaran'];
	$query = "SELECT * FROM data_pendaftar WHERE no_pendaftaran = '$no_pendaftaran'";
	$result = mysqli_query($connection,$query);
	
	if (mysqli_num_rows($result) == 1) {
		$row = mysqli_fetch_assoc($result);
		$image_db = $row['foto'];
		 
		header("Content-type: image/jpeg");
		echo $image_db;
	}
	
?>