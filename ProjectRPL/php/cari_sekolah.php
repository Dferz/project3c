<?php
    
    include("connection.php");
    
    $nama_kota = $_POST['namaKota'];
    $query = "SELECT * FROM sekolah WHERE nama_kota='$nama_kota' ORDER BY nama_sekolah";
    $sql = mysqli_query($connection, $query);

    echo "<option value=''>-Asal Sekolah-</option>";
    while ($row = mysqli_fetch_assoc($sql)) {
        echo "<option value='".$row['nama_sekolah']."'>".$row['nama_sekolah']."</option>";
    }
    exit;
?>
