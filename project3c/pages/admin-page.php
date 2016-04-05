<?php
	require '../php/config.php';
	require '../php/createConnection.php';

	if(isset($_GET['logout']) && $_GET['logout']=='true'){
		$acc->logout();
		$acc->redirect('login');
	}
	$acc->still_loggedin();
	if($acc->is_loggedin()){
		
		if(isset($_POST['submit_posting'])){
			$judul = $_POST['judul'];
			$deskripsi = $_POST['deskripsi'];
			
			$file = $_FILES['image']['tmp_name'];
			$namaImage = $_FILES['image']['name'];
			$image_size	= getimagesize($_FILES['image']['tmp_name']);
 		
			if($image_size == false){
				echo 'File gagal di upload, terjadi kesalahan ekstensi / file terlalu besar';
			}else{
				move_uploaded_file($file, "../assetNews/$namaImage");
				if($post->setPosting($judul, $deskripsi, $namaImage)){
					$status = "Posting Berhasil Disimpan";
				}else{
					$status = "Posting Gagal Disimpan karena judul / nama image ada yang sama";
				}	
			}	
		}

		if (isset($_POST['delete_posting'])){
			$judul = $_POST['judul'];

			if($post->deletePosting($judul)){
				$status = "Posting Berhasil Dihapus";
			}else{
				$status = "Posting Gagal Dihapus Judul tidak ditemukan ";
			}
		}

		require '../templates/templateAdminPage.php';
		
	}else{
		echo "maaf anda gaboleh masuk";
	}

?>

