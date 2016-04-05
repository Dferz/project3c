<html>
	<head>
		<title>verifikasi-form-volunteer</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<style type="text/css">
			body {
			  margin: 0;
			}
			a {
			  background-color: transparent;
			}
			html * {
			  -webkit-font-smoothing: antialiased;
			  -moz-osx-font-smoothing: grayscale;
			}
			button,
			input,
			optgroup,
			select,
			textarea {
			  color: inherit;
			  /* 1 */
			  font: inherit;
			  /* 2 */
			  margin: 0;
			  /* 3 */
			}
			body {
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  font-weight: 400;
			  color: #434a54;
			  line-height: 1.35;
			  letter-spacing: 0.02rem;
			  background: #ffffff;
			}
			textarea {
			  overflow: auto;
			}
			button {
			  overflow: visible;
			}
			@media (min-width: 1280px) and (max-width: 1679px) {
			  html {
			    font-size: 10px;
			  }
			}

			button,
			html input[type="button"],
			input[type="reset"],
			input[type="submit"] {
			  -webkit-appearance: button;
			  /* 2 */
			  cursor: pointer;
			  /* 3 */
			}

			h1,
			h2,
			h3,
			h4,
			h5,
			h6 {
			  margin: 0px 0px 20px 0px;
			  padding: 0;
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  font-weight: 500;
			  color: #434a54;
			  line-height: 1.2;
			}

			h1 {
			  font-size: 3.6rem;
			}

			legend {
			  border: 0;
			  /* 1 */
			  padding: 0;
			  /* 2 */
			}

			.container {
			  position: relative;
			  margin: 0 auto;
			  width: 100%;
			  *zoom: 1;
			}

			@media (min-width: 1280px) and (max-width: 1679px) {
			  .container {
			    padding-left: 15px;
			    padding-right: 15px;
			    max-width: 1280px;
			  }
			}

			a {
			  color: #05bed5;
			  text-decoration: none;
			  -webkit-transition: color 0.2s ease-in-out;
			  transition: color 0.2s ease-in-out;
			}

			[class*='column-'] {
			  float: left;
			  position: relative;
			  min-height: 1px;
			  padding-left: 15px;
			  padding-right: 15px;
			}

			[class*='column-'].column-center {
			  float: none;
			  margin-left: auto;
			  margin-right: auto;
			}

			.column-1-2,
			.column-2-4,
			.column-3-6,
			.column-4-8,
			.column-5-10,
			.column-6-12 {
			  width: 50%;
			}

			@media (min-width: 1280px) and (max-width: 1679px) {
			  [class*='column-'] {
			    padding-left: 15px;
			    padding-right: 15px;
			  }
			}

			input,
			textarea {
			  display: block;
			  margin: 15px 0px;
			  width: 100%;
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  font-weight: 400;
			  line-height: 1.35;
			  border-radius: 2px;
			  -webkit-transition: all 0.2s ease-in-out;
			  transition: all 0.2s ease-in-out;
			  -webkit-appearance: none;
			  -moz-appearance: none;
			  appearance: none;
			  -webkit-box-sizing: border-box;
			  -moz-box-sizing: border-box;
			  box-sizing: border-box;
			  padding: 0 16px;
			  height: 40px;
			  font-size: 1.6rem;
			  color: #434a54;
			  background: #ffffff;
			  border: 1px solid #ccd1d9;
			}

			textarea {
			  max-width: 100%;
			  -webkit-transition: none;
			  transition: none;
			}
			textarea {
			  padding: 12px 16px;
			  height: auto;
			  line-height: 1.35;
			}

			fieldset {
			  display: block;
			  margin: 0;
			  padding: 20px;
			  border: 1px solid #656d78;
			}

			fieldset legend {
			  display: inline-block;
			  padding: 10px;
			  font-size: 1.6rem;
			  color: #656d78;
			}

			label {
			  display: block;
			  margin: 15px 0px;
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  font-weight: 600;
			  font-size: 1.3rem;
			  color: #434a54;
			  line-height: 1.35;
			}
			button,
			.button {
			  display: inline-block;
			  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			  font-weight: 700;
			  line-height: 1;
			  text-align: center;
			  text-transform: none;
			  white-space: nowrap;
			  cursor: pointer;
			  border-radius: 2px;
			  -webkit-transition: all 0.2s ease-in-out;
			  transition: all 0.2s ease-in-out;
			  padding: 12px 16px;
			  height: 40px;
			  font-size: 1.4rem;
			  color: #434a54;
			  background: #ffffff;
			  border: 1px solid #ccd1d9;
			}

			.button-primary {
			  color: #ffffff;
			  background: #05bed5;
			  border: 1px solid #04a8bc;
			}

			.button-block {
			  display: block;
			  width: 100%;
			  text-align: center;
			}

			.margin-top-xsmall {
			  margin-top: 20px;
			}

			.margin-top-small {
			  margin-top: 35px;
			}

			.column-1 {
			  width: 100%;
			}

			.margin-bottom-medium {
			  margin-bottom: 50px;
			}

			.padding-medium {
			  padding: 50px;
			}

			.text-center {
			  text-align: center;
			}

			.padding-left-small {
			  padding-left: 35px;
			}

			.padding-right-small {
			  padding-right: 35px;
			}

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
				<h1 class="text-center underline padding-medium">VERIFIKASI FORM VOLUNTEER</h1>
			</div>
		</div>
		<div class="container padding-medium">
			<form action="" method="post" enctype="multipart/form-data">
				<fieldset class="padding-left-small padding-right-small">
					<legend style="font-size:30px;">Data Diri</legend>
					<label for="nama_lengkap">Nama Lengkap</label>
					<input type="text" id='nama_lengkap' name="nama_lengkap" readonly value="<?php echo $_POST['nama_lengkap']?>" style="color:#000;">
					<label for="nama_panggilan">Nama Panggilan</label>
					<input type="text" id='nama_panggilan' name="nama_panggilan" readonly value="<?php echo $_POST['nama_panggilan']?>" style="color:#000;" >		
					<label for="alamat">Alamat</label>
					<textarea id='alamat' name='alamat' cols="30" rows="5" readonly style="color:#000;"><?php echo $_POST['alamat']?></textarea>
					<div class="row">
						<div class="column-1-2">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" id="tempat_lahir" name='tempat_lahir' value="<?php echo $_POST['tempat_lahir']?>" readonly style="color:#000;" >
						</div>
						<div class="column-1-2">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="text" id="tanggal_lahir" name='tanggal_lahir' value="<?php echo $_POST['tanggal_lahir']?>" readonly style="color:#000;">
						</div>
					</div>
					<label for="pekerjaan">Pekerjaan</label>
					<input type="text" id='pekerjaan' name="pekerjaan" value="<?php echo $_POST['pekerjaan']?>" readonly style="color:#000;">
					<label for="telp_rumah">Fakultas</label>
					<input type="text" id="fakultas" name="fakultas" value="<?php echo $_POST['fakultas']?>" readonly style="color:#000;">
					<label for="telp_hp">Telepon HP</label>
					<input type="text" id="telp_hp" name="telp_hp" value="<?php echo $_POST['telp_hp']?>" readonly style="color:#000;">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" value="<?php echo $_POST['email']?>" readonly style="color:#000;">
					<label for="line">LINE</label>
					<input type="text" id='line' name="line" value="<?php echo $_POST['line']?>" readonly style="color:#000;">
					<label for="wa">Whatsapp</label>
					<input type="text" id='wa' name="wa" value="<?php echo $_POST['wa']?>" readonly style="color:#000;" >
					<label for="motivasi">Motivasi masuk 3C</label>
					<textarea id='motivasi' name='motivasi' cols="30" rows="5" readonly style="color:#000;"><?php echo $_POST['motivasi']?></textarea>
					<label for="skill">Kemampuan yang dimiliki</label>
					<textarea id='skill' name='skill' cols="30" rows="5" readonly style="color:#000;"><?php echo $_POST['skill']?></textarea>
					<label for="organisasi">Organisasi yang aktif</label>
					<textarea id='organisasi' name='organisasi' cols="30" rows="5" readonly style="color:#000;"><?php echo $_POST['organisasi']?></textarea>	
				</fieldset>
				<?php
					//save page name form-kunjungan.html
	  				file_put_contents('../formData/form-volunteer.html', ob_get_contents());

				?>
			  	<button type="submit" class="button button-block margin-top-small" name='submitVerifikasiVolunteer' value="Submit">Submit</button>
			</form>
			<a href="javascript:history.go(-1)"><button class="button-primary button-block margin-top-xsmall">Kembali ke Halaman Sebelumnya</button></a>
		</div>

	</body>
</html>