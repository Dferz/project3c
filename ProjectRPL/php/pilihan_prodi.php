<?php
	session_start();
	if(isset($_POST['submit']) && $_POST['submit']=='Lanjut'){

		include("connection.php");

		$no_pendaftaran = $_SESSION['no_pendaftaran'];
		$program_studi = $_SESSION['jenis'];
		$pilihan1 = $_POST['pilihan1'];
		$pilihan2 = $_POST['pilihan2'];
		$pilihan3 = $_POST['pilihan3'];
		$pilihan4 = $_POST['pilihan4'];
		$status = 'Belum';

		$query = "INSERT INTO data_sebelum_seleksi VALUES ('$no_pendaftaran', '$program_studi', '$pilihan1', '$pilihan2', 
			'$pilihan3', '$pilihan4', '', '' , '$status', '$status', '$status', '$status')";
		
		if(!mysqli_query($connection, $query)){
				$keterangan = "Maaf anda gagal";
		}else{
				$keterangan = "Selamat anda berhasil";
		}
		header("location: ../form-daftar4.php");	
	}


	

?>