<html>
<head>
	<title>Isi Data || Muhammadiyah Medical Centre</title>
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
		<form action="insert" class="form-horizontal" role="form" method="post">
			<h3 style="text-align:center">Isi Data</h3>
			{% if deskripsi %}
			<div class="alert alert-success" role="alert">
				<a href="#" class="alert-link">{{deskripsi}}</a>
			</div>
			{% endif %}
			{% if data %}
            {% for row in data %}
            <div class="form-group">
				<h4><label for="nama" class="col-md-3 control-label">Nomor KTP</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="no_ktp" value="{{ row.no_ktp }}" readonly>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="nama" class="col-md-3 control-label">Nama Lengkap</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="nama_pasien" value="{{ row.nama_pasien }}" readonly>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="tgl_lahir" class="col-md-3 control-label">Tanggal Lahir</label></h4>
				<div class="col-md-4">
					<div class="input-group">
						<input class="form-control" id="date" name="tgl_lahir" placeholder="DD/MM/YYYY" type="date" value="{{row.tgl_lahir_pasien|date('Y-m-d')}}" readonly/>
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
					<select class="form-control" id="sel1" name="gol_darah" >
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
					<input type="textarea" rows="4" cols="50" class="form-control" name="alamat" value="{{ row.alamat_pasien }}" readonly>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="telepon" class="col-md-3 control-label">Nomor Telepon</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="no_telp" value="{{ row.no_telp }}" readonly>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="pekerjaan" class="col-md-3 control-label">Pekerjaan</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="pekerjaan" value="{{ row.pekerjaan }}"readonly>
				</div>
			</div>
			{% endfor %} 
            {% else %}
            <div class="form-group">
				<h4><label for="nama" class="col-md-3 control-label">Nomor KTP</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="no_ktp" maxlength="16" required>
				</div>
			</div>
            <div class="form-group">
				<h4><label for="nama" class="col-md-3 control-label">Nama Lengkap</label></h4>
				<div class="col-md-4">
					<input type="text" class="form-control" name="nama_pasien" maxlength="50">
				</div>
			</div>
			<div class="form-group">
				<h4><label for="tgl_lahir" class="col-md-3 control-label">Tanggal Lahir</label></h4>
				<div class="col-md-4">
					<div class="input-group">
						<input class="form-control" id="date" name="tgl_lahir" placeholder="DD/MM/YYYY" type="date"/>
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
					</div>
				</div>
			</div>
				<!--form method="post">
				<input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="text"/>
				</form>
				<div class="input-group date">
					<input type="text" class="form-control" value="12-02-2012">
					<div class="input-group-addon">
						<span class="glyphicon glyphicon-th"></span>
					</div>
				</div>
				<label for="dtp_input2" class="col-md-2 control-label Lahir">Tanggal</label>
				<div class="input-group date form_date col-md-5" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
					<input class="form-control" size="10" type="text" name="dari">
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
				</div>
				<input type="hidden" id="dtp_input2" value=""/-->
			<div class="form-group">
				<h4><label class="col-md-3 control-label">Jenis Kelamin</label></h4>
				<div class="col-md-4">
					<div class="radio">
						<label><input type="radio" value="L" name="jenis_kelamin" checked>Laki-laki</label>
					</div>

					<div class="radio">
						<label><input type="radio" value="P" name="jenis_kelamin">Perempuan</label>
					</div>
					
				</div>
			</div>
			<div class="form-group">
				<h4><label for="gol_darah" class="col-md-3 control-label">Golongan Darah</label></h4>
				<div class="col-md-1">
					<select class="form-control" id="sel1" name="gol_darah">
						<option value='A'>A</option>
						<option value='B'>B</option>
						<option value='O'>O</option>
						<option value='AB'>AB</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<h4><label for="alamat" class="col-md-3 control-label">Alamat</label></h4>
				<div class="col-md-4">
					<input type="textarea" rows="4" cols="50" maxlength="50" class="form-control" name="alamat" value="{{ row.alamat_pasien }}" required>
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
            {% endif %}
            
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary btn-lg" name="isidata">Simpan</button>
					<button type="reset" class="btn btn-danger btn-lg" name="reset">Reset</button>
					<button type="submit" class="btn btn-default btn-lg" name="back"><a href="../user">Kembali</a></button>
				</div>
			</div>
		</form>
	</div>
	<div class="footer">
		<h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
	</div>
	<script type="text/javascript">
		$('#sandbox-container input').datepicker({
			format: "dd/mm/yyyy",
			todayBtn: "linked",
			language: "id",
			orientation: "bottom left",
			keyboardNavigation: false,
			todayHighlight: true,
			toggleActive: true
		});
	</script>
</body>
</html>