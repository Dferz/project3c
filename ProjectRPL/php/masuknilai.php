<?php
	
	if(isset($_POST['submit']) && $_POST['submit']=='Masukkan'){

		include("connection.php");

		$nodaftar = $_POST['nodaftar'];
		$ipa = $_POST['ipa'];
		$ips = $_POST['ips'];

		$query= "UPDATE data_sebelum_seleksi SET nilai_ipa='$ipa',nilai_ips='$ips' WHERE no_pendaftaran='$nodaftar'";
		
		if(!mysqli_query($connection, $query)){
				$keterangan = "Maaf anda gagal";
		}else{
				$keterangan = "Selamat anda berhasil";
		}
		header("location: ../menuadmin.php");	
	}


	

?>