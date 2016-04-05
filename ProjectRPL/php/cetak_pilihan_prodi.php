<?php
	if($_SESSION['jenis']=='IPC'){
		$query = "SELECT * FROM pilihan_prodi ORDER BY nama_prodi";
    	$sql = mysqli_query($connection, $query);

    	while ($row = mysqli_fetch_assoc($sql)) {
        	echo "<option value='".$row['nama_prodi']."'>".$row['nama_prodi']."</option>";
    	}	
	}else {
		$jenis = $_SESSION['jenis'];
		$query = "SELECT * FROM pilihan_prodi WHERE jenis='$jenis' ORDER BY nama_prodi";
    	$sql = mysqli_query($connection, $query);

    	while ($row = mysqli_fetch_assoc($sql)) {
        	echo "<option value='".$row['nama_prodi']."'>".$row['nama_prodi']."</option>";
    	}	
	}

    if(isset($_POST['jenis'])){
        
        include("connection.php");
        
        $jenis = $_POST['jenis'];
        // if($jenis=='IPC'){
        //     $query = "SELECT * FROM pilihan_prodi ORDER BY nama_prodi";
        //     $sql = mysqli_query($connection, $query);

        //     echo "<option value=''>-Pilih-</option>";
        //     while ($row = mysqli_fetch_assoc($sql)) {
        //         echo "<option value='".$row['nama_prodi']."'>".$row['nama_prodi']."</option>";
        //     }
        // }else{
            $query = "SELECT * FROM pilihan_prodi WHERE jenis='$jenis' ORDER BY nama_prodi";
            $sql = mysqli_query($connection, $query);

            echo "<option value=''>-Pilih-</option>";
            while ($row = mysqli_fetch_assoc($sql)) {
                echo "<option value='".$row['nama_prodi']."'>".$row['nama_prodi']."</option>";
            }
        //}
        exit;
    }
	

?>