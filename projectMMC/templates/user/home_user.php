<html>
<head>
	<title>Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/pace.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/global_php.css">
	<link rel="stylesheet" type="text/css" href="css/loader.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
	<div class="header" id="container">
		<a href="/projectMMC/user"><img src="images/logo_mmc.png"></a>
		<div id="menu">
			<nav><ul>
				<li class="notification"><a>Selamat datang, {{username}}!</a></li>
				<li class="current_page"><a href="user">Halaman Depan</a></li>
				<li><a href="logout">Logout</a></li>
			</ul></nav>
		</div>
	</div>
	<div class="content">
		<div id="main-content_home_user">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail" style="background-color: #ABDDFF">
					<img src="images/isi_data.jpg" alt="Registrasi">
					<div class="caption">
						<h2>Isi Data Pasien</h2>
						<h4>Untuk mendaftar langsung sebagai pasien, silakan antre setelah mengisi form berikut ini.</h4>
						<p><a href="user/insert" class="btn btn-primary btn-lg btn-block" role="button">Isi Data</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail" style="background-color: #EDF393"> <!--#FFC472-->
					<img src="images/make_a_card.jpg" alt="Kartu Pasien">
					<div class="caption">
						<h2>Memesan Kartu Pasien</h2>
						<h4>Untuk memesan kartu pasien, ajukan disini</h4>
						<p><a href="user/pesankartu" class="btn btn-primary btn-lg btn-block" role="button">Pesan Kartu Pasien</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail" style="background-color: #BFE7AB">
					<img src="images/queue.jpg" alt="Antre" style="width=450px">
					<div class="caption">
						<h2>Pendaftaran Langsung</h2>
						<h4>Silakan mendaftar secara langsung disini.</h4>
						<p><a href="user/daftarlangsung" class="btn btn-primary btn-lg btn-block" role="button">Daftar Antrian</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail" style="background-color: #FFA891">
					<img src="images/schedule.jpg" length="297px" alt="Jadwal">
					<div class="caption">
						<h2>Melihat Jadwal</h2>
						<h4>Untuk melihat jadwal yang tersedia, klik disini</h4>
						<p><a href="user/lihatjadwal" class="btn btn-primary btn-lg btn-block" role="button">Periksa Jadwal</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>