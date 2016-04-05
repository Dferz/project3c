<html>
<head>
	<title>Verifikasi || Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-datetimepicker.id.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
	<div class="header" id="container">
		<a href="/projectMMC/admin"><img src="../images/logo_mmc.png"></a>
		<div id="menu">
			<nav><ul>
				<li><a href="../admin">Halaman Depan</a></li>
				<li><a href="../logout">Logout</a></li>
			</ul></nav>
		</div>
	</div>
	<div class="content_daftar">
		<form class="form-horizontal" role="form" action="verifikasiAntrian" method="post">
			<div class="btn-group" role="group">
				<a class="btn btn-success btn-lg" href="verifikasiPendaftaran">Verifikasi Pendaftaran</a>
				<a class="btn btn-success btn-lg" href="verifikasiAntrian">Verifikasi Antrean</a>
			</div>
			<h3 style="text-align:center">Verifikasi Antrian</h3>
			{% if deskripsi %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			{% if data %}
			<table class="table table-hover">
				<tr>
					<th class="active">No Kartu</th>
					<th class="active">Nama Pasien</th>
					<th class="active">Deskripsi Penyakit</th>
					<th class="active">Nama Dokter</th>
					<th class="active">Hari</th>
					<th class="active">Jam</th>
					<th class="active">Tanggal Daftar</th>
					<th class="active">Status</th>
					<th colspan="2" class="active" >Button</th>
				</tr>

				{% for row in data %}
				<tr>
					<td class="active">{{row.no_kartu}}</td>
					<td class="active">{{row.nama_pasien}}</td>
					<td class="active">{{row.deskripsi_penyakit}}</td>
					<td class="active">{{row.nama_dokter}}</td>
					<td class="active">{{row.hari}}</td>
					<td class="active">{{row.jam}}</td>
					<td class="active">{{row.tgl_daftar|date('d M Y')}}</td>
					<td class="active">{{row.status_pendaftaran}}</td>
					<td align="center">
						<form action="verifikasiAntrian" method="POST"> 
							<input class="btn btn-primary" type = "submit" name = 'submit' value ="Terima">
							<input class="btn btn-danger" type = "submit" name = 'submit' value ="Tolak">
							<input type = "hidden" name = 'no_kartu' value ="{{row.no_kartu}}">
							<input type = "hidden" name = 'tgl_daftar' value ="{{row.tgl_daftar|date('Y-m-d')}}">
							<input type = "hidden" name = 'id_jadwal' value ="{{row.id_jadwal}}">
							<input type = "hidden" name = 'status_pendaftaran' value ="{{row.status_pendaftaran}}">
						</form>
					</td>
				</tr>
				{% endfor %}  		
			</table> 
			{% else %}
			<p>No records found</p>
			{% endif %}
		</form>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>