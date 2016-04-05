<?php
    
    include("connection.php");
    
    $nama_provinsi = $_POST['namaProvinsi'];
    $query = "SELECT * FROM kota WHERE nama_provinsi='$nama_provinsi' ORDER BY nama_kota";
    $sql = mysqli_query($connection, $query);

    echo "<option value=''>-Pilih Kota-</option>";
    while ($row = mysqli_fetch_assoc($sql)) {
        echo "<option value='".$row['nama_kota']."'>".$row['nama_kota']."</option>";
    }
    exit;
?>
