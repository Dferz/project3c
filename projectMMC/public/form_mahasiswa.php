<html>
<head>
    <title>Form Mahasiswa || Muhammadiyah Medical Centre</title>
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
                <h4><label for="nim" class="col-md-3 control-label">NIM</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="nim">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="nama" class="col-md-3 control-label">Nama</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="alamat" class="col-md-3 control-label">Alamat</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="tanggal_lahir" class="col-md-3 control-label">Tanggal Lahir</label></h4>
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
                <h4><label for="jenis_kelamin" class="col-md-3 control-label">Jenis Kelamin</label></h4>
                <div class="col-md-4">
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="l">Laki-laki</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio" value="p">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h4><label for="no_telepon" class="col-md-3 control-label">Nomor Telepon</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="no_telepon">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="fakultas" class="col-md-3 control-label">Fakultas</label></h4>
                <div class="col-md-1">
                    <select class="form-control" id="sel1">
                        <option>Fakultas 1</option>
                        <option>Fakultas 2</option>
                        <option>Fakultas 3</option>
                        <option>Fakultas 4</option>
                        <option>Fakultas 5</option>
                        <option>Fakultas 6</option>
                        <option>Fakultas 7</option>
                        <option>Fakultas 8</option>
                        <option>Fakultas 9</option>
                        <option>Fakultas 10</option>
                        <option>Fakultas 11</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <h4><label for="jurusan" class="col-md-3 control-label">Jurusan</label></h4>
                <div class="col-md-3">
                    <select class="form-control" id="sel1">
                        <option>Jurusan 1</option>
                        <option>Jurusan 2</option>
                        <option>Jurusan 3</option>
                        <option>Jurusan 4</option>
                        <option>Jurusan 5</option>
                        <option>Jurusan 6</option>
                        <option>Jurusan 7</option>
                        <option>Jurusan 8</option>
                        <option>Jurusan 9</option>
                        <option>Jurusan 10</option>
                        <option>Jurusan 11</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <h4><label for="angkatan" class="col-md-3 control-label">Angkatan</label></h4>
                <div class="col-md-3">
                    <select class="form-control" id="sel1">
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <h4><label for="gol_darah" class="col-md-3 control-label">Golongan Darah</label></h4>
                <div class="col-md-3">
                    <select class="form-control" id="sel1">
                        <option>A</option>
                        <option>B</option>
                        <option>O</option>
                        <option>AB</option>
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