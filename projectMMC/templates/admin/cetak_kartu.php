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
		<a href="/projectMMC"><img src="../images/logo_mmc.png"></a>
		<div id="menu">
			<nav><ul>
				<li><a href="../admin">Halaman Depan</a></li>
				<li><a href="../logout">Logout</a></li>
			</ul></nav>
		</div>
	</div>
	<div class="content_daftar">
		<form class="form-horizontal" role="form" action="pendaftaranlangsung" method="post">
			<h3 style="text-align:center">Cetak Kartu Pasien</h3>
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
					<th class="active">Alamat</th>
					<th class="active">Jenis Kelamin</th>
					<th class="active">no_telp</th>
					<th class="active">Tanggal Lahir</th>
					<th class="active">Pekerjaan</th>
					<th class="active">Gol Darah</th>
					<th class="active" >Button</th>
				</tr>

				{% for row in data %}
				<tr>
					<td class="active">{{row.no_kartu}}</td>
					<td class="active">{{row.nama_pasien}}</td>
					<td class="active">{{row.alamat_pasien}}</td>
					<td class="active">{{row.jenis_kelamin}}</td>
					<td class="active">{{row.no_telp}}</td>
					<td class="active">{{row.tgl_lahir_pasien|date('d, M Y')}}</td>
					<td class="active">{{row.pekerjaan}}</td>
					<td class="active">{{row.gol_darah}}</td>
					<td align="center">
						<form action="cetakkartu" method="POST"> 
							<input class="btn btn-primary" type = "submit" name = 'submit' value ="Cetak">
							<input type = "hidden" name = 'no_kartu' value ="{{row.no_kartu}}">
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