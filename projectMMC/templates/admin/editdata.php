<html>
<head>
	<title>Edit Data Pasien || Muhammadiyah Medical Centre</title>
	<meta charset="utf-8">
	<meta name="author" content="Mahasiswa IF UNS">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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

		<form class="form-horizontal" role="form" action="editdata" method="post">
			{% if deskripsi %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			<h3 style="text-align:center">Edit Data Pasien</h3>
			{% if data %}
            {% for row in data %}
			<div class="form-group">
				<h4><label for="nim" class="col-md-3 control-label">Username</label></h4>
				<div class="col-md-3">
					<input id='username' type="text" class="form-control" name="username" value="{{row.username}}">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success btn-lg" name="submit" value="cari">Cari</button>
					<button id="cariuser" type="button" class="btn btn-default btn-lg">Kembali</button>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="nama" class="col-md-3 control-label">Nomor KTP</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="no_ktp" maxlength="16" value="{{ row.no_ktp }}" required>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="nama" class="col-md-3 control-label">Nama Lengkap</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="nama_pasien" maxlength="50" value="{{ row.nama_pasien }}" required>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="tgl_lahir" class="col-md-3 control-label">Tanggal Lahir</label></h4>
				<div class="col-md-4">
					<div class="input-group">
						<input class="form-control" id="date" name="tgl_lahir" placeholder="DD/MM/YYYY" type="date" value="{{row.tgl_lahir_pasien|date('Y-m-d')}}"/>
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<h4><label class="col-md-3 control-label">Jenis Kelamin</label></h4>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" value="L" name="jenis_kelamin" {% if row.jenis_kelamin == "L" %} checked {% endif %}>Laki-laki</label>
					</div>

					<div class="radio">
						<label><input type="radio" value="P" name="jenis_kelamin" {% if row.jenis_kelamin == "P" %} checked {% endif %}>Perempuan</label>
					</div>

				</div>
			</div>
			<div class="form-group">
				<h4><label for="gol_darah" class="col-md-3 control-label">Golongan Darah</label></h4>
				<div class="col-md-1">
					<select class="form-control" id="sel1" name="gol_darah">
						<option value='A' {% if row.gol_darah == "A" %} selected {% endif %}>A</option>
						<option value='B' {% if row.gol_darah == "B" %} selected {% endif %}>B</option>
						<option value='O' {% if row.gol_darah == "O" %} selected {% endif %}>O</option>
						<option value='AB' {% if row.gol_darah == "AB" %} selected {% endif %}>AB</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="alamat" class="col-md-3 control-label">Alamat</label></h4>
				<div class="col-md-4">
					<input type="textarea" rows="4" cols="50" class="form-control" maxlength="50" name="alamat" value="{{ row.alamat_pasien }}" required>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="telepon" class="col-md-3 control-label">Nomor Telepon</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="no_telp" maxlength="12" value="{{ row.no_telp }}"required>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="pekerjaan" class="col-md-3 control-label">Pekerjaan</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="pekerjaan" maxlength="20" value="{{ row.pekerjaan }}"required>
				</div>
			</div>
			{% endfor %} 
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary btn-lg" name="submit" value="simpan">Simpan</button>
				</div>
			</div>
			{% else %}
			<div class="form-group">
				<h4><label for="nim" class="col-md-3 control-label">Username</label></h4>
				<div class="col-md-3">
					<input id='username' type="text" class="form-control" name="username" >
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success btn-lg" name="submit" value="cari">Cari</button>
					<button type="submit" class="btn btn-default btn-lg" name="back"><a href="../admin">Kembali</a></button>
				</div>
			</div>
	        {% endif %}
		</form>
	</div>
	
		
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
</body>
</html>