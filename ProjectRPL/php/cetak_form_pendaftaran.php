<?php
	
	$no_pendaftaran = $_SESSION['no_pendaftaran'];
	$query = "SELECT * FROM data_pendaftar WHERE no_pendaftaran = '$no_pendaftaran'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_assoc($result);

	$query1 = "SELECT * FROM data_orangtua WHERE no_pendaftaran = '$no_pendaftaran'";
	$result1 = mysqli_query($connection,$query1);
	$row1 = mysqli_fetch_assoc($result1);

	$query2 = "SELECT * FROM data_sebelum_seleksi WHERE no_pendaftaran = '$no_pendaftaran'";
	$result2 = mysqli_query($connection,$query2);
	$row2 = mysqli_fetch_assoc($result2);

?>