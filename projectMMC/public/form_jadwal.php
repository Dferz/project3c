<html>
<head>
    <title>Form Jadwal || Muhammadiyah Medical Centre</title>
    <meta charset="utf-8">
    <meta name="author" content="Mahasiswa IF UNS">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
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
        <a href="/projectMMC"><img src="images/logo_mmc.png"></a>
        <div id="menu">
            <nav><ul>
                <li><a href="user">Halaman Depan</a></li>
                <li><a href="logout">Logout</a></li>
            </ul></nav>
        </div>
    </div>
    <div class="content_daftar">
        <form class="form-horizontal" role="form" action="register" method="post">
            <h3 style="text-align:center">Form Mahasiswa</h3>
            <div class="form-group">
                <h4><label for="id_jadwal" class="col-md-3 control-label">ID Jadwal</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="id_jadwal">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="hari" class="col-md-3 control-label">Hari</label></h4>
                <div class="col-md-3">
                    <div class="input-group">
                        <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
				<h4><label for="status" class="col-md-3 control-label">Jadwal Periksa</label></h4>
				<div class="col-md-3">
					<select class="form-control" name="jadwal" required>
						<option value="08.00-10.00">08.00-10.00</option>
						<option value="10.00-12.00">10.00-12.00</option>
						<option value="10.00-12.00">12.00-14.00</option>
						<option value="10.00-12.00">14.00-16.00</option>
						<option value="10.00-12.00">16.00-18.00</option>
						<option value="10.00-12.00">18.00-20.00</option>
						<option value="10.00-12.00">20.00-22.00</option>
					</select>
				</div>
			</div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary btn-lg" value="Daftar">
                    <button type="reset" class="btn btn-danger btn-lg" name="reset">Reset</button>
                    <button type="submit" class="btn btn-default btn-lg" name="back"><a href="user">Kembali</a></button>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169 | Telp. (0271) 717417 Ext. 433</h4>
    </div>
</body>
</html>