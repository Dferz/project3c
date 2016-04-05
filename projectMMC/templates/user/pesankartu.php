<html>
<head>
	<title>Pesan Kartu Pasien || Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="js/pace.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
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
		<form class="form-horizontal" role="form" action="pesankartu" method="post">
			<h3 style="text-align:center">Pesan Kartu Pasien</h3>
			{% if cek %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success btn-lg" name="login">Pesan</button>
					<button type="button" class="btn btn-default btn-lg" name="back"><a href="../user">Kembali</a></button>
				</div>
			</div>
		</form>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>