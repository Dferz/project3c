<?php
	include("php/cek_session.php");
	include("php/connection.php"); 

?>
<html>
<head>
	<title>form-daftar3</title>
	<style>
		body {
			margin:0;
			position: absolute;
			height:100%;
			width:100%;
			left:0;right:0;bottom:0;top:0;
			background-repeat: repeat;
			background-image: url('img/pat4.jpg');
		}
		@font-face {
			font-family: 'Code';
			src:url('font/CODE Bold.otf');
		}
		h1 {
			font-size:100px;
			text-align: center;
			color:#f6f6f6;
			font-family: 'Code';
			margin-top: 3%;
		}
		h2 {
			font-size:50px;
			text-align: center;
			color:#f6f6f6;
			margin-top: -0%;
			font-family: 'Code';
		}
		.line {
			height:1%;
			width:25%;
			border-top:2px solid #e3dede;
			margin-left: auto;
			margin-right: auto;
			margin-top: -5%;
		}
		form {
			width:70%;
			height:40%;
			opacity: 1;
			margin-left:auto;
			margin-right: auto;
			margin-top: 3%;
			background-color: #f6f6f6;
			font-family: 'Code';
			padding-top: 5px;
		}
		select {
			width:70%;
			font-family: 'Code';
		}
		input {
			font-family: 'Code';
		}
	</style>
</head>
<body>
	<h1>LANGKAH 3</h1>
	<div class="line"></div>
	<h2>Masukkan pilihan program studi</h2>
	<form action="php/pilihan_prodi.php" method="post">
		<table cellpadding="0" cellspacing="10" style="margin-left:auto;margin-right:auto;margin-top:5%;">
			<tr>
				<td rowspan='4' style="border-right:1px solid black;padding:3px;width:50%;font-size:30px;text-align:center;"><label>Pilihan Program Studi</label></td>
				<td><label for='pilihan1'>Pilihan 1</label>
					<select id='pilihan1' name="pilihan1">
				  		<option value=''>-Pilih Prodi-</option>
				  		<?php include("php/cetak_pilihan_prodi.php");?>
			  		</select>
				</td>
			</tr>
			<tr>
				<td><label for='pilihan2'>Pilihan 2</label>
					<select id='pilihan2' name="pilihan2">
				  		<option value=''>-Pilih Prodi-</option>
				  		<?php include("php/cetak_pilihan_prodi.php");?>
			  		</select>
				</td>
			</tr>
			<tr>
				<td><label for='pilihan3'>Pilihan 3</label>
					<select id='pilihan3' name="pilihan3">
				  		<option value=''>-Pilih Prodi-</option>
				  		<?php include("php/cetak_pilihan_prodi.php");?>
			  		</select>
				</td>
			</tr>
			<tr>
				<td><label for='pilihan4'>Pilihan 4</label>
					<select id='pilihan4' name="pilihan4">
				  		<option value=''>-Pilih Prodi-</option>
				  		<?php include("php/cetak_pilihan_prodi.php");?>
			  		</select>
				</td>
			</tr>
		</table>
		<input type='submit' name='submit' value='Lanjut' style="margin-left:44%;width:10%;height:10%;margin-top:2%;">
	</form>

</body>
</html>