
<html>
	<head>
		<title>form_daftar</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/turret.css" />
		<style type="text/css">
			*, *:before, *:after {
			  margin: 0;
			  padding: 0;
			  box-sizing: border-box;
			}

			html, body {
			  height: 100%;
			}

			body {
			  color: #eeeeee;
			  background-color: #ECECEC;
			}

			@font-face {
				font-family: 'Code';
				src:url('font/CODE Bold.otf');
			}
			.underline {
				border-bottom:1px solid;
			}
			h1 {
			  font-weight: 420;
			  text-align: center;
			  font-family:'Code';
			  color: #eeeeee;
			}
			#title h1{
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			
			#title:hover h1 {
				background-color: #eeeeee;
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
		</style>
	</head>
	<body>
		<div class="column-1 margin-bottom-medium" style="background-color:#BF55EC;">
			<div class="column-1-2 column-center padding-medium" id="title">
				<h1 class="text-center underline padding-medium">FORM KUNJUNGAN</h1>
			</div>
		</div>
		<div class="container padding-medium">
			<form action="verifikasi-form-kunjungan" method="post">
				<fieldset class="padding-left-small padding-right-small">
					<legend style="font-size:30px;">Data Kunjungan</legend>
					<label for="nama">Nama / Instansi</label>
					<input type="text" id='nama' name="nama" placeholder="Masukkan nama / instansi" maxlength='50' required>
					<label for="alamat">Alamat</label>
					<textarea id='alamat' name='alamat' cols="30" rows="5" placeholder="Masukkan alamat" required></textarea>
					<label for="telp_hp">Telepon HP</label>
					<input type="tel" id="telp_hp" name="telp_hp" placeholder="Masukkan telepon HP" required maxlength="12">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Masukkan email" required>
					<label for="tujuan">Tujuan Kunjungan</label>
					<textarea id='tujuan' name='tujuan' cols="30" rows="5" placeholder="Masukkan tujuan kunjungan" required></textarea>
					<label class="select" for="jumlah"> Jumlah Orang
						<select id="jumlah" name="jumlah" required>
							<?php
					  			for ($i=1; $i <= 100; $i++) { 
					  				echo "<option value='".$i."'>".$i."</option>";
					  			}
					  		?>					  		
						</select>
					</label>
				</fieldset>
				<button type="submit" class="button button-block margin-top-small" name='submit' value="Submit">Submit</button>
			</form>
			<a href="../"><button class="button-primary button-block margin-top-xsmall">Kembali ke Halaman Utama</button></a>
		</div>
	</body>
</html>