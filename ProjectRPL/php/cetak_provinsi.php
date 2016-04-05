<?php

	$query = "SELECT * FROM provinsi ORDER BY nama_provinsi";
    $sql = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($sql)) {
        echo "<option value='".$row['nama_provinsi']."'>".$row['nama_provinsi']."</option>";
    }

?>