
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
				<h1 class="text-center underline padding-medium">FORM VOLUNTEER</h1>
			</div>
		</div>
		<div class="container padding-medium">
			<form action="verifikasi-form-volunteer" method="post" enctype="multipart/form-data">
				<fieldset class="padding-left-small padding-right-small">
					<legend style="font-size:30px;">Data Diri</legend>
					<label for="nama_lengkap">Nama Lengkap</label>
					<input type="text" id='nama_lengkap' name="nama_lengkap" placeholder="Masukkan nama lengkap" maxlength='50' required>
					<label for="nama_panggilan">Nama Panggilan</label>
					<input type="text" id='nama_panggilan' name="nama_panggilan" placeholder="Masukkan nama panggilan" maxlength='20' required>
					<label for="alamat">Alamat</label>
					<textarea id='alamat' name='alamat' cols="30" rows="5" placeholder="Masukkan alamat" required></textarea>
					<div class="row">
						<div class="column-1-2">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" id="tempat_lahir" name='tempat_lahir' placeholder="Masukkan tempat lahir" maxlength='20' required>
						</div>
						<div class="column-1-2">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" id="tanggal_lahir" name='tanggal_lahir' placeholder="Masukkan tanggal lahir" required>
						</div>
					</div>
					<label class="select" for="pekerjaan">Pekerjaan
						<select id="pekerjaan" name="pekerjaan" required>
							<option value="">-Pilih-</option>
							<option value="Mahasiswa">Mahasiswa</option>
							<option value="PNS">PNS</option>
							<option value="Swasta">Swasta</option>
							<option value="BUMN">BUMN</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</label>
					<label for="telp_rumah">Fakultas</label>
					<input type="text" id="fakultas" name="fakultas" placeholder="Masukkan fakultas" maxlength="12">
					<label for="telp_hp">Telepon HP</label>
					<input type="tel" id="telp_hp" name="telp_hp" placeholder="Masukkan telepon HP" required maxlength="12">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Masukkan email" maxlength='50' required>
					<label for="line">LINE</label>
					<input type="text" id='line' name="line" placeholder="Masukkan akun LINE" maxlength='30'>
					<label for="wa">Whatsapp</label>
					<input type="text" id='wa' name="wa" placeholder="Masukkan akun whatsapp" maxlength='30'>
					<label for="motivasi">Motivasi masuk 3C</label>
					<textarea id='motivasi' name='motivasi' cols="30" rows="5" placeholder="Masukkan motivasi anda masuk 3C" required></textarea>
					<label for="skill">Kemampuan yang dimiliki</label>
					<textarea id='skill' name='skill' cols="30" rows="5" placeholder="Masukkan kemampuan yang anda miliki" required></textarea>
					<label for="organisasi">Organisasi yang aktif</label>
					<textarea id='organisasi' name='organisasi' cols="30" rows="5" placeholder="Masukkan organisasi anda yang masih aktif" required></textarea>
				</fieldset>
				<button type="submit" class="button button-block margin-top-small" name='submit' value="Submit">Submit</button>
			</form>
			<a href="../"><button class="button-primary button-block margin-top-xsmall">Kembali ke Halaman Utama</button></a>
		</div>
		
	</body>
</html>