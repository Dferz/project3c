<?php
// include('connection.php');
// $qry = "SELECT * FROM kota WHERE kode_prov=".$_POST['kode_prov'];
// $sql = mysqli_query($connection, $qry);
// $arrkota = array();
// while($row = mysqli_fetch_assoc($sql)){
// 	$arrkota [ $row['kode_kota'] ] = $row['nama_kota'];
//         $kodek=$row['kode_kota'];
//         $kota=$row['nama_kota'];
$coba=$_POST['provinsi'];
	echo "<option value=kawai>$coba</option>";
}
}
//} 
?>