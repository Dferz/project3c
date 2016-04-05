<?php
	session_start();
	include("connection.php");
	if(isset($_POST['submit']) && $_POST['submit']=='Submit' && isset($_POST['konfirmasi'])){

		$image 		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_size	= getimagesize($_FILES['image']['tmp_name']);
 		
		if($image_size == false){
			die('File yang anda pilih Kegedean');
		}

		//data diri
		$no_pendaftaran = "6142241".rand(99,999);
		$nama_lengkap = $_POST['nama_lengkap'];
		$identitas = $_POST['identitas'];
		$provinsi_lahir = $_POST['provinsi'];
		$kota_lahir = $_POST['kota'];
		$alamat = $_POST['alamat'];
		$tgl_lahir = $_POST['tanggal_lahir'];
		$provinsi_sekolah = $_POST['provinsi_sekolah'];
		$kota_sekolah = $_POST['kota_sekolah'];
		$asal_sekolah = $_POST['asal_sekolah'];
		$agama = $_POST['agama'];
		$jenis_kelamin = $_POST['jk'];
		$no_telp = $_POST['no_telp'];
		$program_studi = $_SESSION['jenis'];

		date_default_timezone_set("Asia/Jakarta");
		$tgl_daftar = date('Y-m-d H:i:s');

		$_SESSION['no_pendaftaran'] = $no_pendaftaran;

		$no_pendaftaran = mysql_real_escape_string($no_pendaftaran);
		$identitas = mysql_real_escape_string($identitas);
		
		$query = "INSERT INTO data_pendaftar VALUES ('$no_pendaftaran', '$nama_lengkap', '$identitas', '$provinsi_lahir', 
			'$kota_lahir', '$alamat', '$tgl_lahir', '$image' , '$provinsi_sekolah', '$kota_sekolah', '$asal_sekolah', '$agama', 
			'$jenis_kelamin', '$no_telp', '$program_studi', '$tgl_daftar')";
		
		if(!mysqli_query($connection, $query)){
				$keterangan = "Maaf anda gagal";
		}else{
				$keterangan = "Selamat anda berhasil";
		}


		//data ortu
		$nama_ayah = $_POST['nama_ayah'];
		$pendidikan_ayah = $_POST['pendidikan_ayah'];
		$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
		$nama_ibu = $_POST['nama_ibu'];
		$pendidikan_ibu = $_POST['pendidikan_ibu'];
		$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
		$alamat_orangtua = $_POST['alamat_ortu'];
		$penghasilan_orangtua = $_POST['penghasilan_ortu'];

		$query = "INSERT INTO data_orangtua VALUES ('$no_pendaftaran', '$nama_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', 
			'$nama_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$alamat_orangtua', '$penghasilan_orangtua')";

		if(!mysqli_query($connection, $query)){
				$keterangan = "Maaf anda gagal";
		}else{
				$keterangan = "Selamat anda berhasil";
		}

		header('location: ../form-daftar3.php');
		

	}else {
		header('location: ../form-daftar2.php');
	}

?>