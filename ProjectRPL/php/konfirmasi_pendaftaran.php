<?php
	session_start();
	if(isset($_POST['submit']) && $_POST['submit'] == 'Setuju' && isset($_POST['konfirmasi'])){
		
		include("connection.php");

		$no_pendaftaran = $_SESSION['no_pendaftaran'];
		$query = "SELECT * FROM data_pendaftar WHERE no_pendaftaran = '$no_pendaftaran'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_assoc($result);

		$identitas = $row['identitas'];
		$pin = rand(1000000000,9999999999);

		$no_pendaftaran = mysql_real_escape_string($no_pendaftaran);
		$identitas = mysql_real_escape_string($identitas);
		$pin = mysql_real_escape_string($pin);

		$query = "INSERT INTO login_peserta VALUES ('$no_pendaftaran','$identitas', '$pin')";
		if(!mysqli_query($connection, $query)){
				$keterangan = "Maaf anda gagal";
		}else{
				$keterangan = "Selamat anda berhasil";
				header("location: ../form-daftar5.php");
		}

	}else{
		die("Persyaratan Mohon disetujui");
	}

?>