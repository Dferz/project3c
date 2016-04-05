<?php
	include("php/cek_session.php");
	include("php/connection.php"); 

?>
<html>
	<head>
		<title>form_daftar</title>
		
		<script type="text/javascript" src='js/jquery-1.4.3.min.js'></script>
		<script type="text/javascript" src='js/ajax_cari_kota.js'></script>

		<style type="text/css">
			body {
				margin:0;
				position: absolute;
				height:200%;
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
			#box-pendaftaran{
				width: 70%;
				background-color: #f6f6f6;
				margin-left: auto;
				margin-right: auto;
				padding:10px;
				font-family: 'Code';
				border-radius: 3px;
				box-shadow: 5px 5px 3px #1e1d1d;
			}

			.judul_data{
				text-align:left;
				margin-left: 2em;
				width:80%;
				border-bottom: 2px groove;
			}

			.tabel_data{
				margin-left: 10em;
			}

			table>tbody>tr>td{
				width: 200px;
			}

			form {
				opacity: 1;
				margin-left:10%;
				margin-top: 3%;
			}

			input {
				font-family: 'Code';
			}

		</style>
	</head>
	<body>
		<h1>LANGKAH 2</h1>
		<div class="line"></div>
		<h2>Masukkan data diri</h2>
		<div id='box-pendaftaran'>
			<h2 align='center' style="color:#1a1a1a;border:1px solid #1a1a1a;width:50%;margin-left:25%;margin-top:3%;"><b>Form Pendaftaran</b></h2><br>
			<form action="php/form_pendaftaran.php" method="post" enctype="multipart/form-data">
				<h3 class='judul_data' style="font-size:25px;"><b>Data Diri</b></h3>
				<table class='tabel_data' border="0" cellpadding="0" cellspacing="10">
					<tr>
						<td><label for='nama'>Nama Lengkap</label></td>
				  		<td><input id='nama' name="nama_lengkap" required style="width:70%;"></td>
				    </tr>
					<tr>
					  	<td><label for='identitas'>Kartu Identitas </br>(KTP/SIM/KK/Kartu Pelajar/Paspor)</label></td>
					  	<td><input id='identitas' type="text" name="identitas" maxlength="16" required style="width:70%;"></td>
					</tr>
					<tr>
						<td rowspan='2'>Tempat Lahir</td>
					  	<td><label for='provinsi'>Provinsi</label>
							<select id='provinsi' name="provinsi" required>
						  		<option value=''>-Pilih Provinsi-</option>
						  		<?php include("php/cetak_provinsi.php");?>
					  		</select>
						</td>
					</tr>
					<tr>
						<td><label for='kota'>Kota</label>
							<select id='kota' name="kota" style="width:160px" required>
								<option value="">-Pilih Kota-</option>
							</select>
						</td>
					</tr>
					<tr>
					  <td><label for='tl'>Tanggal lahir</label></td>
					  <td><input id='tl' type="date" name="tanggal_lahir" required></td>
					</tr>
					<tr>
						<td><label for='foto'>File Foto (format jpg) </label></td>
						<td><input id='foto' type="file" name="image" style='border:2px groove' required><label>Maksimal 100kb</label></td>
					</tr>
					<tr>
						<td rowspan='2'>Sekolah</td>
					  	<td><label for='provinsi_sekolah'>Provinsi</label>
							<select id='provinsi_sekolah' name="provinsi_sekolah" required>
						  		<option value=''>-Pilih Provinsi-</option>
						  		<?php include("php/cetak_provinsi.php");?>
					  		</select>
						</td>
					</tr>
					<tr>
						<td><label for='kota_sekolah'>Kota</label>
							<select id='kota_sekolah' name="kota_sekolah" style="width:160px" required>
								<option value="">-Pilih Kota-</option>
							</select>
						</td>
					</tr>
					<tr>
					  <td><label for='asal_sekolah'>Asal Sekolah</label></td>
					  <td><select id='asal_sekolah' name="asal_sekolah" style="width:160px" required>
					  		<option value="">-Asal Sekolah-</option>
					  	</select></td>
					</tr>
					<tr>
						<td><label for='alamat'>Alamat </label><span class='keterangan'>*</span></td>
						<td><textarea id='alamat' name='alamat' cols='35' rows='4' required></textarea></td>
					</tr>
					<tr>
					  <td><label for='agama'>Agama</label></td>
					  <td><select id='agama' name="agama" style="width:160px" required>
					  		<option value="">-Pilih-</option>
					  		<option value="Islam">Islam</option>
					  		<option value="Kristen">Kristen</option>
					  		<option value="Katolik">Katolik</option>
					  		<option value="Hindu">Hindu</option>
					  		<option value="Budha">Budha</option>
					  	</select></td>
					</tr>
					<tr>
					  <td><label for='jk'>Jenis Kelamin</label></td>
					  <td><input id='jk' type="radio" name="jk" value ="Laki-Laki" checked><span>Laki-Laki</span>
					  	  <input type="radio" name="jk" value ="Perempuan"><span>Perempuan</span>
					  </td>
					</tr>
					<tr>
					  <td><label for='no_telp'>Nomor Telepon</label></td>
					  <td><input id='no_telp' type="text" name="no_telp" maxlength="12" required style="width:70%;"></td>
					</tr>
			  	</table></br></br>

			  	<h3 class='judul_data' style="font-size:25px;"><b>Data Orangtua</b></h3>
			  	<table class='tabel_data' border="0" cellpadding="0" cellspacing="10">
					<tr>
						<td><label for='nama_ayah'>Nama Ayah</label></td>
				  		<td><input id='nama_ayah' name="nama_ayah" required style="width:70%;"></td>
				    </tr>
					<tr>
					  <td><label for='pendidikan_ayah'>Pendidikan Terakhir</label></td>
					  <td><select id='pendidikan_ayah' name="pendidikan_ayah" required>
					  		<option value=''>-Pilih-</option>
					  		<option value="SD">SD</option>
					  		<option value="SMP">SMP</option>
					  		<option value="SMA">SMA</option>
					  		<option value="S1">S1</option>
					  		<option value="S2">S2</option>
					  		<option value="S3">S3</option>
					  
					  </select></td>
					</tr>
					<tr>
					  <td><label for='pekerjaan_ayah'>Pekerjaan</label></td>
					  <td><select id='pekerjaan_ayah' name="pekerjaan_ayah" required>
					  		<option value=''>-Pilih-</option>
					  		<option value="BURUH">BURUH</option>
					  		<option value="BUMN">BUMN</option>
					  		<option value="PNS">PNS</option>
					  		<option value="SWASTA">SWASTA</option>
					  		<option value="WIRASWASTA">WIRASWASTA</option>
					  		<option value="LAINNYA">LAINNYA</option>
					  
					  </select></td>
					</tr>
					<tr>
						<td><label for='nama_ibu'>Nama Ibu</label></td>
				  		<td><input id='nama_ibu' name="nama_ibu" required style="width:70%;"></td>
				    </tr>
					<tr>
					  <td><label for='pendidikan_ibu'>Pendidikan Terakhir</label></td>
					  <td><select id='pendidikan_ibu' name="pendidikan_ibu" required>
					  		<option value=''>-Pilih-</option>
					  		<option value="SD">SD</option>
					  		<option value="SMP">SMP</option>
					  		<option value="SMA">SMA</option>
					  		<option value="S1">S1</option>
					  		<option value="S2">S2</option>
					  		<option value="S3">S3</option>					  
					  </select></td>
					</tr>
					<tr>
					  <td><label for='pekerjaan_ibu'>Pekerjaan</label></td>
					  <td><select id='pekerjaan_ibu' name="pekerjaan_ibu" required>
					  		<option value=''>-Pilih-</option>
					  		<option value="BURUH">BURUH</option>
					  		<option value="BUMN">BUMN</option>
					  		<option value="PNS">PNS</option>
					  		<option value="SWASTA">SWASTA</option>
					  		<option value="WIRASWASTA">WIRASWASTA</option>
					  		<option value="LAINNYA">LAINNYA</option>
					  </select></td>
					</tr>
					<tr>
						<td><label for='alamat_ortu'>Alamat OrangTua</label><span class='keterangan'>*</span></td>
						<td><textarea id='alamat_ortu' name='alamat_ortu' cols='35' rows='4' required></textarea></td>
					</tr>
					<tr>
					  <td><label for='penghasilan_ortu'>Penghasilan OrangTua</label></td>
					  <td><select id='penghasilan_ortu' name="penghasilan_ortu" required>
					  		<option value=''>-Pilih-</option>
					  		<option value="0-1000000">0 - 1.000.000</option>
					  		<option value="1000000-2500000">1.000.000 - 2.500.000</option>
					  		<option value="2500000-5000000">2.500.000 - 5.000.000</option>
					  		<option value="5000000-10000000">5.000.000 - 10.000.000</option>
					  		<option value="10000000-20000000">10.000.000 - 20.000.000</option>				  
					  </select></td>
					</tr>
					
					 
			  	</table>
			  	<input type='checkbox' name='konfirmasi' style="margin-left:25%;"><label>Saya Menyatakan Data diatas sudah benar</label>
			  	<br>
			  		<input type ="submit" name='submit' value="Submit" style="margin-top:3%;margin-left:40%;">
			  	
			</form>
		</div>
	</body>
</html>