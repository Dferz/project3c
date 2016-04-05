<?php
	
	$keterangan='';
	
	if(isset($_POST['submit']) && $_POST['submit']=='Cek Hasil'){

		include("php/connection.php");
		$keterangan="";
		$no_pendaftaran = $_POST['no_pendaftaran'];

		for($i=1;$i<5;$i++){

			$keterangan = "Maaf Anda tidak diterima di seleksi mandiri UNS";
			
			$status="status".$i;
			$query = "SELECT * FROM data_sebelum_seleksi WHERE $status='diterima' AND no_pendaftaran='$no_pendaftaran'";
			$sql = mysqli_query($connection, $query);
			if(mysqli_num_rows($sql)==1){
				$row = mysqli_fetch_assoc($sql);
				$pilihan="pilihan".$i;
				$keterangan= "Selamat anda diterima pada pilihan ke ".$i." di : ".$row[$pilihan];
				break;
			}
		}
	}

?>

<html>
<head>
	<title></title>
	<style>
		body {
			margin:0;
			position: absolute;
			height:100%;
			width:100%;
			left:0;right:0;bottom:0;top:0;
			background-image: url('img/bg1.jpg');
			background-repeat: no-repeat;
			background-size: 100%;
		}
		@font-face {
			font-family: 'RWBold';
			src:url('font/Raleway-Bold.ttf');
		}
		@font-face {
			font-family: 'Code';
			src:url('font/CODE Bold.otf');
		}
		h1 {
			font-size:70px;
			text-align: center;
			color:#1a1919;
			font-family: 'Code';
			margin-top: 3%;
		}
		h2 {
			font-size:50px;
			text-align: center;
			color:#1a1919;
			margin-top: 1%;
			font-family: 'Code';
		}
		h3 {
			font-size:30px;
			text-align: center;
			color:#1a1919;
			font-family: 'Code';
			margin-top:1%;
		}
		.line {
			height:1%;
			width:50%;
			border-top:2px solid #1a1919;
			margin-left: auto;
			margin-right: auto;
		}
		.logo {
			margin-top: 5%;
			width:30%;
			height:30%;
			background-image: url('img/uns.png');
			margin-right: auto;
			margin-left: auto;
			background-size: 100%;
			background-repeat: no-repeat;
		}
		form {
			margin-left: auto;
			margin-right: auto;
			font-family: 'RWBold';
			border:1px solid #1a1919;
			height:7%;
			padding-top:20px;
			width:40%;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="logo"></div>
	<div class="line"></div>
	<h2>APAKAH ANDA DITERIMA DI SELEKSI MANDIRI UNS?</h2>
	<form action='' method='post'>
		<label>No Pendaftaran : </label>
		<input type='text' name='no_pendaftaran'>
		<input type='submit' name='submit' value='Cek Hasil' style="font-family:'Code'";>
	</form>
	<div>
		<h3><?php echo $keterangan; ?></h3>

	</div>
</body>
</html>