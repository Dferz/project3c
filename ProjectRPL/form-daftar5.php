<?php
	include("php/cek_session.php");
	include("php/connection.php"); 
	include("php/cetak_form_pendaftaran.php");

?>
<html>
<head>
	<title></title>
	<style>
		body {
			margin:0;
			position: absolute;
			height:150%;
			width:100%;
			left:0;right:0;bottom:0;top:0;
			background-image: url('img/pat6.jpg');
			background-repeat: repeat;
		}
		@font-face {
			font-family: 'RWLight';
			src:url('font/Raleway-Light.ttf');
		}
		@font-face {
			font-family: 'Code';
			src:url('font/CODE Bold.otf');
		}
		h1 {
			font-size:100px;
			text-align: center;
			color:#1a1919;
			font-family: 'Code';
			margin-top: 3%;
		}
		h2 {
			font-size:50px;
			text-align: center;
			color:#1a1919;
			margin-top: -0%;
			font-family: 'Code';
		}
		h3 {
			font-size:30px;
			text-align: center;
			color:#1a1919;
			font-family: 'RWLight';
			margin-top:1%;
		}
		.line {
			height:1%;
			width:25%;
			border-top:2px solid #1a1919;
			margin-left: auto;
			margin-right: auto;
			margin-top: -5%;
		}
		.box {
			padding:5px;
			width:40%;
			height:16%;
			border:1px solid black;
			margin-right: auto;
			margin-left: auto;
		}
		.box h3 {
			font-size: 30px;
			text-align: center;
			color:#1a1919;
			font-family: 'RWLight';
			margin-top:1%;
		}
		p{
			font-size: 20px;
			text-align: center;
			color:#1a1919;
			font-family: 'RWLight';
			
		}
		table {
			margin-right: auto;
			margin-left: auto;
			font-size:20px;
			font-family: 'RWLight';
		}
		ul, li {
			margin-right: auto;
			margin-left: auto;
			font-size:20px;
			font-family: 'RWLight';
			text-align: center;
		}
		button {
			text-align: center;
			margin-left: 45%;
			width:10%;
			height:4%;
			font-family: 'Code';
		}
	</style>
</head>
<body>
	<h1>SELAMAT</h1>
	<div class="line"></div>
	<h2>DATA ANDA SUDAH DISIMPAN DI DALAM DATABASE UNS SOLO</h2>
	<div class="box">
	<h3>Nama Anda : <?php echo $row['nama_lengkap'];?></h3>
	<h3>Nomor Pendaftaran : <?php echo $row['no_pendaftaran'];?></h3>
	<h3>Nomor Kartu Identitas : <?php echo $row['identitas'];?></h3>
	</div><br>
	<p>Nomor Pendaftaran harus anda <b>ingat</b> dan <b>catat</b> !</p>
	<p>Setelah <b>tiga hari</b> tidak melakukan <b>pembayaran ke Bank BNI</b> data akan <b>dihapus dari database</b>!</p>
	<p>Tuliskan Nomor Pendaftaran SPMB UNS dan Nama sewaktu membayar di Bank. Calon <b>tidak perlu</b> mencantumkan nomor Rekening Rektor dalam Slip</p>
	<div class="line" style="width:80%;border-top:1px solid #1a1919;margin-top:0%;"></div>
	<p>Biaya yang wajib dibayarkan ke Bank BNI :</p>
	<table cellspacing='10'>
		<tr>
			<td>Biaya Pendaftaran</td>
			<td>250000</td>
		</tr>
		<tr>
			<td>Total Biaya</td>
			<td>250000</td>
		</tr>
	</table>
	<div class="line" style="width:10%;border-top:1px solid #1a1919;margin-top:1%;"></div>
	<p>Langkah Selanjutnya :</p>
	<p>Saudara harus membayar <b>Biaya Pendaftaran</b> sebesar <b>Rp. 250000,00 ke bank BNI</b></p>
	<p>Kemudian <b>mencetak Kartu Tanda Peserta</b> secara online</p><br>
	<a href="php/logout.php"><button>Selesai</button></a>
</body>
</html>