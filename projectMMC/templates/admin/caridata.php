<html>
<head>
	<title>Cari Data Pasien || Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/pace.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
	<div class="header" id="container">
		<a href="/projectMMC/admin"><img src="../images/logo_mmc.png"></a>
		<div id="menu">
			<nav><ul>
				<li><a href="/projectMMC/admin">Halaman Depan</a></li>
				<li><a href="logout">Logout</a></li>
			</ul></nav>
		</div>
	</div>
	<div class="content_daftar">

		<form class="form-horizontal" role="form" action="caridata" method="post">
			{% if deskripsi %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			<h3 style="text-align:center">Cari Data Pasien</h3>
			<div class="form-group">
				<h4><label for="nim" class="col-md-3 control-label">Nomor Kartu</label></h4>
				<div class="col-md-3">
					<input type="text" class="form-control" maxlength="10" name="no_kartu" required>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success btn-lg" name="find">Cari</button>
					<button type="submit" class="btn btn-default btn-lg" name="back"><a href="../admin">Kembali</a></button>
				</div>
			</div>

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
				</tr>

	        	{% for row in data %}
				<tr>
					<td class="active">{{row.no_kartu}}</td>
					<td class="active">{{row.nama_pasien}}</td>
					<th class="active">{{row.nama_dokter}}</th>
					<td class="active">{{row.deskripsi_penyakit}}</td>
					<td class="active">{{row.hari}}</td>
					<td class="active">{{row.jam}}</td>
					<td class="active">{{row.tgl_daftar|date('d, M Y')}}</td>
				</tr>
				{% endfor %}  		
			</table>
	        {% endif %}
		</form>
	</div>
	
		
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>