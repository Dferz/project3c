<?php
	
	if(isset($_POST['submit']) && $_POST['submit']=='Seleksi'){

		include("connection.php");

		$jenis = $_POST['jenis'];
		$kuota = $_POST['kuota'];

		if($jenis=='IPA'){
			$seleksiNilai="nilai_ipa";
		}
		else{
			$seleksiNilai="nilai_ips";
		}

		$prodi = $_POST['prodi'];

		$query= "SELECT * FROM data_sebelum_seleksi 
		RIGHT JOIN data_pendaftar ON data_sebelum_seleksi.no_pendaftaran=data_pendaftar.no_pendaftaran 
		WHERE data_sebelum_seleksi.pilihan1='$prodi' OR data_sebelum_seleksi.pilihan2='$prodi' OR data_sebelum_seleksi.pilihan3='$prodi' 
		OR data_sebelum_seleksi.pilihan4='$prodi' ORDER BY data_sebelum_seleksi.$seleksiNilai DESC LIMIT $kuota";
		
		//echo $query;

		$sql = mysqli_query($connection, $query);
		// if(!$sql){
		// 		echo "Failed!";
		// 		$keterangan = "Maaf anda gagal";
		// }else{
		// 		$keterangan = "Selamat anda berhasil";
		// 		echo "SUccess!";
		// }
		// echo "YEY";
	    //$arrprovinsi = array();
	    while ($row = mysqli_fetch_assoc($sql)) {
	    	//echo $row[0];

	    	for($i=1;$i<5;$i++){
	    		if($row['pilihan'.$i]==$prodi){
	    			$status="status".$i;
	    		}
	    	}
	    	//echo "</br></br>".$status;


	    	$no=$row['no_pendaftaran'];
	    	$query2="UPDATE data_sebelum_seleksi SET ".$status."='diterima' WHERE no_pendaftaran='$no'";
	    	$sql2 = mysqli_query($connection,$query2);
   //  		if(!$sql2){
			// 	echo "Failed!";
			// 	$keterangan = "Maaf anda gagal";
			// }else{
			// 		$keterangan = "Selamat anda berhasil";
			// 		echo "SUccess!";
			// }
    	}
     
		header("location: ../menuadmin.php");	
	}


	

?>