<?php
    
    include("connection.php");
    
    $query = "SELECT * FROM provinsi ORDER BY nama_provinsi";
    $sql = mysqli_query($connection, $query);
    $arrprovinsi = array();
    while ($row = mysqli_fetch_assoc($sql)) {
        $arrprovinsi [ $row['kode_prov'] ] = $row['nama_provinsi'];
        $kode=$row['kode_prov'];
        $provinsi=$row['nama_provinsi'];
        echo "<option value='$kode'>$provinsi</option>";
    }
     

    ?>
