<?php
	session_start();
	$keterangan='';

	if(isset($_POST['submit']) && $_POST['submit'] == "Login"){

		if($_POST['kodeCaptcha'] == $_SESSION['kode_captcha']){
			include("connection.php");

			$no_pendaftaran = $_POST['no_pendaftaran'];
			$identitas = $_POST['identitas'];
			$pin = $_POST['pin'];

			$no_pendaftaran = mysql_real_escape_string($no_pendaftaran);
			$identitas = mysql_real_escape_string($identitas);
			$pin = mysql_real_escape_string($pin);

			$query = "SELECT * FROM login_peserta WHERE pin='$pin' AND no_pendaftaran='$no_pendaftaran' AND identitas='$identitas'";
			$result = mysqli_query($connection, $query);
			if (mysqli_num_rows($result) == 1) {
				$data = mysqli_fetch_array($result);
				$_SESSION['no_pendaftaran']= $data[0];
				$keterangan='Login Sukses';
				header("location: ../contoh_cetak.php");
			}else{
				$keterangan.="User tidak ditemukan";
			}

		}else{
			$keterangan='Maaf Captcha yang anda isi salah';

		}

		echo $keterangan;
		
	}


?>