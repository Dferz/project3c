<html>
<head>
	<title>Lihat Jadwal || Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-datetimepicker.id.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
	<div class="header" id="container">
		<a href="/projectMMC/user"><img src="../images/logo_mmc.png"></a>
		<div id="menu">
			<nav><ul>
				<li class="notification"><a>Selamat datang, {{username}}!</a></li>
				<li><a href="../user">Halaman Depan</a></li>
				<li><a href="../logout">Logout</a></li>
			</ul></nav>
		</div>
	</div>
	<div class="content_daftar">
		<form class="form-horizontal" role="form" action="lihatjadwal" method="post">
			{% if deskripsi %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			<h3 style="text-align:center">Lihat Jadwal</h3>
			{% if cek %}
					{% if data %}
					{% for row in data %}


			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">Anda memiliki jadwal periksa pada hari {{row.hari}} {{tgl_daftar|date('d M Y')}} pukul {{row.jam}}</a>
			</div>
					{% endfor %}
					{% endif %}
			{% endif %}
			<div class="form-group">
				<h4><label for="tanggal_periksa" class="col-md-3 control-label">Pilih Tanggal</label></h4>
				<div class="col-md-4">
					<div class="input-group">
						<input class="form-control" id="date" name="tgl_daftar" placeholder="DD/MM/YYYY" type="date"/>
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary btn-lg" name="lihat">Lihat</button>
					<button type="reset" class="btn btn-danger btn-lg" name="reset">Reset</button>
					<button type="submit" class="btn btn-default btn-lg" name="back"><a href="../user">Kembali</a></button>
				</div>
			</div>
			<table class="table table-hover">
				{% if cek %}
					{% if data %}
				<tr>
					<th class="active">No.</th>
					<th class="active">Hari</th>
					<th class="active">Jadwal</th>
					<th class="active">Antrian ke</th>
				</tr>

           			{% for row in data %}
				
				<tr>
					<td class="active">{{loop.index}}</td>
					<td class="active">{{row.hari}}</td>
					<td class="active">{{row.jam}}</td>
					<td class="active">{{row.no_antrian}}</td>
				</tr>
					{% endfor %}
	            	{% endif %}
	            
	            	<p>No records found</p>
	            {% endif %}
				
			</table> 
		</form>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>