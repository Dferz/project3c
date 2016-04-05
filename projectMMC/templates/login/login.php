<html>
<head>
    <title>Login || Muhammadiyah Medical Centre</title>
    <meta charset="utf-8">
    <meta name="author" content="Mahasiswa IF UNS">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/pace.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
    <div class="header" id="container">
        <a href="/projectMMC"><img src="images/logo_mmc.png"></a>
        <div id="menu">
            <nav><ul>
                <li><a href="/projectMMC">Halaman Depan</a></li>
                <li><a href="about">Tentang Kami</a></li>
                <li><a href="prosedur">Prosedur Pendaftaran</a></li>
                <li class="current_page"><a href="login">Login</a></li>
                <li><a href="register">Daftar</a></li>
            </ul></nav>
        </div>
    </div>
    <div class="content" id="login">
        <h1>Silakan masuk ke halaman ini!</h1>
        <form action="login" method="post">
            <input type="username" placeholder="Username" name = "username"/>
            <input type="password" placeholder="Password" name = "password"/>
            <select name="status">
                <option value="mahasiswa">Mahasiswa</option>
                <option value="umum">Umum</option>
                <option value="admin">Admin</option>
            </select>
            {% if deskripsi %}
            <div class="alert alert-warning" role="alert">
                <a href="#" class="alert-link">{{deskripsi}}</a>
            </div>
            {% endif %}
            <input type="submit" value="Log in" class="btn btn-primary btn-lg btn-block" role="button">
            <a href="/projectMMC" class="btn btn-danger btn-lg btn-block">Kembali</a>
        </form>
    </div>
    <div class="footer">
        <h4><strong>Muhammadiyah Medical Centre</strong><br>Jl. Garuda Mas No.6, Kartasura, Sukoharjo, Jawa Tengah 57169</h4>
    </div>
</body>
</html>