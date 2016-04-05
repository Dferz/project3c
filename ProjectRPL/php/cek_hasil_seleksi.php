<?php

	if(isset($_POST['submit']) && $_POST['submit']=='Cek Hasil'){

		include("connection.php");

		$no_pendaftaran = $_POST['no_pendaftaran'];

		for($i=1;$i<5;$i++){

			$keterangan = "Maaf Anda tidak diterima di seleksi mandiri UNS";
			
			$status="status".$i;
			$query = "SELECT * FROM data_sebelum_seleksi WHERE $status='diterima' AND no_pendaftaran='$no_pendaftaran'";
			$sql = mysqli_query($connection, $query);
			if(mysqli_num_rows($sql)==1){
				$row = mysqli_fetch_assoc($sql);
				$pilihan="pilihan".$i;
				$keterangan= "Selamat anda diterima pada pilihan ke ".$i." di: ".$row[$pilihan];
				break;
			}
		}
	}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<form action='' method='post'>
		<label>No Pendaftaran : </label>
		<input type='text' name='no_pendaftaran'>
		<input type='submit' name='submit' value='Cek Hasil'>
	</form>
	<div>
		<?php echo $keterangan; ?>

	</div>
</body>
</html>