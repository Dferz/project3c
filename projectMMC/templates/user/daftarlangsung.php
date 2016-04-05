<html>
<head>
	<title>Daftar Langsung || Muhammadiyah Medical Centre</title>
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
		<form class="form-horizontal" role="form" action="daftarlangsung" method="post">
			<h3 style="text-align:center">Pendaftaran Langsung</h3>
			{% if deskripsi %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			<div class="form-group">
				<h4><label for="nim" class="col-md-3 control-label">Nomor Kartu Pasien</label></h4>
				<div class="col-md-3">
					<input type="text" class="form-control" name="no_kartu" maxlength="10" required>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="password" class="col-md-3 control-label">Deskripsi Penyakit/Keluhan</label></h4>
				<div class="col-md-3">
					<input type="text" class="form-control" name="deskripsi_penyakit" maxlength="100" required>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="tanggal_lahir" class="col-md-3 control-label">Tanggal Pemeriksaan</label></h4>
				<div class="col-md-3">
					<div class="input-group">
						<input class="form-control" id="date" name="tgl_daftar" placeholder="DD/MM/YYYY" type="date"/>
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="status" class="col-md-3 control-label">Jadwal Periksa</label></h4>
				<div class="col-md-3">
					<select class="form-control" name="jam" required>
						<option value="08.00-10.00">08.00-10.00</option>
						<option value="10.00-12.00">10.00-12.00</option>
						<option value="12.00-14.00">12.00-14.00</option>
						<option value="14.00-16.00">14.00-16.00</option>
						<option value="16.00-18.00">16.00-18.00</option>
						<option value="18.00-20.00">18.00-20.00</option>
						<option value="20.00-22.00">20.00-22.00</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary btn-lg" name="login">Daftar</button>
					<button type="reset" class="btn btn-danger btn-lg" name="reset">Reset</button>
					<button type="submit" class="btn btn-default btn-lg" name="back"><a href="../user">Kembali</a></button>
				</div>
			</div>
		</form>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>