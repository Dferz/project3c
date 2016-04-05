<html>
<head>
    <title>Form Dokter || Muhammadiyah Medical Centre</title>
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
                <h4><label for="id_dokter" class="col-md-3 control-label">ID Dokter</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="id_dokter">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="nama_dokter" class="col-md-3 control-label">Nama Dokter</label></h4>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="nama_dokter">
                </div>
            </div>
            <div class="form-group">
                <h4><label for="Keahlian" class="col-md-3 control-label">Keahlian</label></h4>
                <div class="col-md-3">
                    <select class="form-control" id="sel1">
                        <option>Keahlian 1</option>
                        <option>Keahlian 2</option>
                        <option>Keahlian 3</option>
                        <option>Keahlian 4</option>
                        <option>Keahlian 5</option>
                        <option>Keahlian 6</option>
                        <option>Keahlian 7</option>
                        <option>Keahlian 8</option>
                        <option>Keahlian 9</option>
                        <option>Keahlian 10</option>
                        <option>Keahlian 11</option>
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