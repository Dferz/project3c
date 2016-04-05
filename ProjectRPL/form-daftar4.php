<?php
	include("php/cek_session.php");
	include("php/connection.php"); 
	include("php/cetak_form_pendaftaran.php");

?>
<html>
	<head>
		<title>form_daftar</title>

		<style type="text/css">
			body {
				margin:0;
				position: absolute;
				height:200%;
				width:100%;
				left:0;right:0;bottom:0;top:0;
				background-color:#FFF;
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
			.line {
				height:1%;
				width:25%;
				border-top:2px solid #1a1919;
				margin-left: auto;
				margin-right: auto;
				margin-top: -5%;
			}
			#box-content{
				width: 60%;
				margin-right:auto;	
				font-family: 'RWLight';
				margin-left:auto;
			}

			.box-data{
				border: 2px groove;
			}

			.judul_data{
				text-align:left;
				margin-left: 2em;
				width: 140px;
				border-bottom: 2px groove;
			}

			.tabel_data{
				margin-left: 4em;
			}

			table>tbody>tr>td{
				width: 200px;
			}

		</style>
	</head>
	<body>
		<h1>LANGKAH 4</h1>
		<div class="line"></div>
		<h2>CEK FORM PENDAFTARAN</h2>
		<div id='box-content'>
		<div class='box-data' style="padding-bottom:8px;">
			<div id='right-side' style='float:right; margin-right:30px; margin-top:10px'>
				<img id='foto-pendaftar' src="php/cetak_foto.php" style='width:150px; height:200px'>
			</div>
			<div id='left-side'>
				<h3 class='judul_data'><b>Identitas</b></h3>
				<table class='tabel_data' border="0" cellpadding="0" cellspacing="10">
					<tr>
						<td><label for='nama'>Nama Lengkap</label></td>
				  		<td><?php echo $row['nama_lengkap']?></td>
				    </tr>
				    <tr>
					  	<td><label for='password'>PIN/PASSWORD</td>
					  	<td>(diperoleh pada nota pendaftaran dari bank)</td>
					</tr>
					<tr>
					  	<td><label for='identitas'>Kartu Identitas </br>(KTP/SIM/KK/Kartu Pelajar/Paspor)</label></td>
					  	<td><?php echo $row['identitas']; ?></td>
					</tr>
					<tr>
						<td>Tempat dan Tanggal Lahir</td>
					  	<td><?php echo $row['kota_lahir'].", ".date('j F Y' , strtotime( $row['tgl_lahir'])); ?></td>
					</tr>
					<tr>
					  <td><label for='asal_sekolah'>Asal Sekolah</label></td>
					  <td><?php echo $row['asal_sekolah'];?></td>
					</tr>
					<tr>
						<td><label for='alamat'>Alamat </label><span class='keterangan'>*</span></td>
						<td><?php echo $row['alamat'];?></td>
					</tr>
					<tr>
					  <td><label for='agama'>Agama</label></td>
					  <td><?php echo $row['agama'];?></td>
					</tr>
					<tr>
					  <td><label for='jk'>Jenis Kelamin</label></td>
					  <td><?php echo $row['jenis_kelamin'];?></td>
					</tr>
					<tr>
					  <td><label for='no_telp'>Nomor Telepon</label></td>
					  <td><?php echo $row['no_telp'];?></td>
					</tr>
					<tr>
					  <td><label for='pilihan1'>Pilihan 1</label></td>
					  <td><?php echo $row2['pilihan1'];?></td>
					</tr>
					<tr>
					  <td><label for='pilihan2'>Pilihan 2</label></td>
					  <td><?php echo $row2['pilihan2'];?></td>
					</tr>
					<tr>
					  <td><label for='pilihan3'>Pilihan 3</label></td>
					  <td><?php echo $row2['pilihan3'];?></td>
					</tr>
					<tr>
					  <td><label for='pilihan4'>Pilihan 4</label></td>
					  <td><?php echo $row2['pilihan4'];?></td>
					</tr>
					<tr>
					  <td><label for='tgl_daftar'>Tanggal Daftar</label></td>
					  <td><?php echo $row['tgl_daftar'];?></td>
					</tr>
				</table>
			</div>

		</div></br>
		<div class='box-data'>
			  	<h3 class='judul_data'><b>Data Orangtua</b></h3>
			  	<table class='tabel_data' border="0" cellpadding="0" cellspacing="10">
					<tr>
						<td><label for='nama_ayah'>Nama Ayah</label></td>
				  		<td><?php echo $row1['nama_ayah'];?></td>
				    </tr>
					<tr>
					  <td><label for='pendidikan_ayah'>Pendidikan Terakhir</label></td>
					  <td><?php echo $row1['pendidikan_ayah'];?></td>
					</tr>
					<tr>
					  <td><label for='pekerjaan_ayah'>Pekerjaan</label></td>
					  <td><?php echo $row1['pekerjaan_ayah'];?></td>
					</tr>
					<tr>
						<td><label for='nama_ibu'>Nama Ibu</label></td>
				  		<td><?php echo $row1['nama_ibu'];?></td>
				    </tr>
					<tr>
					  <td><label for='pendidikan_ibu'>Pendidikan Terakhir</label></td>
					  <td><?php echo $row1['pendidikan_ibu'];?></td>
					</tr>
					<tr>
					  <td><label for='pekerjaan_ibu'>Pekerjaan</label></td>
					  <td><?php echo $row1['pekerjaan_ibu'];?></td>
					</tr>
					<tr>
						<td><label for='alamat_ortu'>Alamat OrangTua</label><span class='keterangan'>*</span></td>
						<td><?php echo $row1['alamat_orangtua'];?></td>
					</tr>
					<tr>
					  <td><label for='penghasilan_ortu'>Penghasilan OrangTua</label></td>
					  <td><?php echo $row1['penghasilan_orangtua'];?></td>
					</tr>
					 
			  	</table></br>
		</div><br>
		<div class='box-data'>
			<p>Saya Menyatakan dengan sesungguhnya bahwa :</p>
			<ul>
				<li>Semua data yang saya isikan melalui internet. Apabila dikemudian hari data tersebut tidak benar atau palsu, saya bersedia ditindak sesuai dengan peraturan hukum yang berlaku dan kehilangan hak saya sebagai calon mahasiswa UNS</li>
				<li>Bersedia membayar seluruh biaya pendidikan sesuai dengan ketentuan</li>
				<li>Apabila diterima sebagai calon mahasiswa Universitas Sebelas Maret (UNS) <b>saya tidak akan mengundurkan diri.</b></li>
				<li><b>Seluruh biaya yang telah saya bayarkan ke UNS tidak akan saya tarik kembali</b></li>
			</ul>
				<form action="php/konfirmasi_pendaftaran.php" method="post" enctype="multipart/form-data">
			  	<input id='konfirmasi' type='checkbox' name='konfirmasi'><label>Saya Menyatakan Data diatas sudah benar</label>
		</div>
		<div id='footer'>
			<div id='footer-right-side' style='float:right'>
				<?php echo "Surakarta, ".date('Y-m-d');?>

			</div>
			<center>
				</br></br>
		  		<input type ="submit" name='submit' value="Setuju">
		  	</center>
		  </form>
		</div>
	</div>
		
	</body>
</html>