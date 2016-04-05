<?php
    include '../php/config.php';
?>

<html>
<head>
    <title>404 - Not found</title>
    <style>
        body {
            margin: 0;
            padding: 30px;
            font: 12px/1.5 Helvetica, Arial, Verdana, sans-serif;
        }
        
        h1 {
            margin: 0;
            font-size: 48px;
            font-weight: normal;
            line-height: 48px;
        }
        
        strong {
            display: inline-block;
            width: 65px;
        }
    </style>
</head>

<body>
    <center>
        <img src="img/Logo3c.png">
        <h2>404-MAAF HALAMAN TIDAK DITEMUKAN </h2>
        <h4>Kemungkinan halaman telah dihapus, atau Anda salah menulis URL</h4>
        
        <?php
            echo "<h4>Kembali Ke <a href='".$homepage."'>Halaman Depan</a></h4>";
        ?>
    </center>
</body>
    
</html>