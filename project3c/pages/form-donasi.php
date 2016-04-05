
<!DOCTYPE HTML>
<html>
	<head>
		<title>FORM-DONASI</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/turret.css" />
		<style>

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
				<h1 class="text-center underline padding-medium">FORM DONATUR</h1>
			</div>
		</div>
		<div class="container padding-medium">
			<form action="verifikasi-form-donatur" method="post" enctype="multipart/form-data">
				<fieldset class="padding-left-small padding-right-small">
					<legend style="font-size:30px;">Data Diri</legend>
					<label for="nama">Nama / Instansi</label>
					<input type="text" id='nama' name="nama" placeholder="Masukkan nama / instansi" maxlength='50' required>
					<label for="alamat">Alamat</label>
					<textarea id='alamat' name='alamat' cols="30" rows="5" placeholder="Masukkan alamat" required></textarea>
					<label for="kodepos">Kode Pos</label>
					<input type="text" id='kodepos' name="kodepos" placeholder="Masukkan kode pos" maxlength='8' required>
					<div class="row">
						<div class="column-1-2">
							<label for="tempat_lahir">Tempat Lahir</label>
							<input type="text" id="tempat_lahir" name='tempat_lahir' placeholder="Masukkan tempat lahir" maxlength='40' required>
						</div>
						<div class="column-1-2">
							<label for="tanggal_lahir">Tanggal Lahir</label>
							<input type="date" id="tanggal_lahir" name='tanggal_lahir' placeholder="Masukkan tanggal lahir" required>
						</div>
					</div>
					<label class="select" for="pekerjaan">Pekerjaan
						<select id="pekerjaan" name="pekerjaan" required>
							<option value="">-Pilih-</option>
							<option value="PNS">PNS</option>
							<option value="Swasta">Swasta</option>
							<option value="BUMN">BUMN</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</label>
					<label>Status</label>
					<label class="control control-inline radio">
						<input type="radio" name="status" value="Lajang" checked>
						<span class="control-indicator"></span>
						<span class="control-label">Lajang</span>
					</label>
					<label class="control control-inline radio">
						<input type="radio" name="status" value="Menikah">
						<span class="control-indicator"></span>
						<span class="control-label">Menikah</span>
					</label>
					<label for="telp_rumah">Telepon Rumah</label>
					<input type="tel" id="telp_rumah" name="telp_rumah" placeholder="Masukkan telepon rumah" required maxlength="10">
					<label for="telp_hp">Telepon HP</label>
					<input type="tel" id="telp_hp" name="telp_hp" placeholder="Masukkan telepon HP" required maxlength="12">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="Masukkan email" maxlength='50' required>
				</fieldset>

				<fieldset class="padding-left-small padding-right-small margin-top-medium">
					<legend style="font-size:30px;">Bentuk Donasi</legend>
					<label class="control checkbox">
						<input type="checkbox" name="dUang" id="dUang">
						<span class="control-indicator"></span>
						<span class="control-label">Uang</span>
					</label>
					<input type="text" id='donasi_uang' name="donasi_uang" placeholder="Jumlah uang / bulan" disabled>
					<label class="control checkbox">
						<input type="checkbox" name="dBarang" id="dBarang">
						<span class="control-indicator"></span>
						<span class="control-label">Barang</span>
					</label>
					<textarea id='donasi_barang' name='donasi_barang' cols="30" rows="5" placeholder="Masukkan nama barang" disabled></textarea>
					<label class="control checkbox">
						<input type="checkbox" name="dJasa" id="dJasa">
						<span class="control-indicator"></span>
						<span class="control-label">Jasa</span>
					</label>
					<textarea id='donasi_jasa' name='donasi_jasa' cols="30" rows="5" placeholder="Masukkan nama jasa" disabled></textarea>
				</fieldset>

				<fieldset class="padding-left-small padding-right-small margin-top-medium">
					<legend style="font-size:30px;">Jangka Waktu (Bulan)</legend>
					<label class="select" for="pekerjaan">
						<select id="jangka_waktu" name="jangka_waktu" required>
							<option value="">-Pilih-</option>
							<?php
					  			for ($i=1; $i <= 12; $i++) { 
					  				echo "<option value='".$i."'>".$i."</option>";
					  			}
					  		?>
					  		
						</select>
					</label>
				</fieldset>

				<fieldset class="padding-left-small padding-right-small margin-top-medium margin-bottom-medium">
					<legend style="font-size:30px;">Bank yang Digunakan</legend>
					<label for="nama">Nama Bank</label>
					<input type="text" id='nama_bank' name="nama_bank" placeholder="Masukkan nama bank" maxlengt='20' required>
					<label for="no_rek">Nomor Rekening</label>
					<input type="text" id='no_rek' name="no_rek" placeholder="Masukkan nomor rekening" maxlengt='20' required>
					<label for="atas_nama">Atas Nama</label>
					<input type="text" id='atas_nama' name="atas_nama" placeholder="Masukkan atas nama" maxlength='50' required>
				</fieldset>

				<label class="control checkbox ">
					<input type="checkbox" name="ket1" required>
					<span class="control-indicator"></span>
					<span class="control-label">Saya bersedia nama saya dicantumkan dalam laporan donasi</span>
				</label>

				<label class="control checkbox">
					<input type="checkbox" name="ket2" required>
					<span class="control-indicator"></span>
					<span class="control-label">Saya setuju untuk diingatkan setiap bulan melalui email / SMS.</span>
				</label>
				
			  	<button type="submit" class="button button-block margin-top-small" name='submit' value="Submit">Submit</button>

			  	
			</form>
			<a href="../"><button class="button-primary button-block margin-top-xsmall">Kembali ke Halaman Utama</button></a>
		</div>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript">
			$('#dUang').change(function(){
				if(this.checked){
					$('#donasi_uang').attr('disabled',false);
				}else{
					$('#donasi_uang').attr('disabled',true);
				}
			});
			$('#dBarang').change(function(){
				if(this.checked){
					$('#donasi_barang').attr('disabled',false);
				}else{
					$('#donasi_barang').attr('disabled',true);
				}
			});
			$('#dJasa').change(function(){
				if(this.checked){
					$('#donasi_jasa').attr('disabled',false);
				}else{
					$('#donasi_jasa').attr('disabled',true);
				}
			});
		 
		</script>
	</body>
</html>