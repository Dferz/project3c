<?php

class User extends ActiveRecord\Model {
	static $table_name = "data_pasien";
	static $primary_keys = "id_pasien";

	function setPasien($data){
		$cek = false;
		$username = $data['username'];
		try {
			if($find = User::find('all', array('username' => $username ))){
				$dp = new User();
				$deskripsi = $dp->updatePasien($data);
			}else{
				$dp = new User();

				$dp->no_ktp = $data['no_ktp'];
				$dp->username = $data['username'];
				$dp->nama_pasien = $data['nama_pasien'];
				$dp->alamat_pasien = $data['alamat'];
				$dp->tgl_lahir_pasien = $data['tgl_lahir'];
				$dp->jenis_kelamin = $data['jenis_kelamin'];
				$dp->no_telp = $data['no_telp'];
				$dp->pekerjaan = $data['pekerjaan'];
				$dp->gol_darah = $data['gol_darah'];
				$dp->save();
				
				$cek = true;
				$deskripsi = "data pasien berhasil di simpan";
			}	
		} catch (\ActiveRecord\DatabaseException $e) {
			$deskripsi = "data pasien gagal disimpan";
		}
		
			
		return array('cek' => $cek, 'deskripsi' => $deskripsi);

	}

	function deletePasien($username){
		if($dp = User::find("all", array('username' => $username))){
			foreach ($dp as $k) {
				$k->delete();
			}
			$cek = true;
			$deskripsi = "data pasien has been deleted";
		}else{
			$cek = false;
			$deskripsi = "data pasien not found";
		}

		return array('cek' => $cek, 'deskripsi' => $deskripsi);
	}

	function getDataPasien($username){
		$data['data'] = User::all(array('username' => $username));

		return $data;
	}

	function getAll(){
		$sql = "SELECT * FROM `data_pasien`
				LEFT JOIN `kartu_pasien` ON(kartu_pasien.id_pasien = data_pasien.id_pasien)";
		$data['data'] = KartuPasien::find_by_sql($sql);

		return $data;
	}

	function updatePasien($data){
		$username = $data['username'];
		//$username = $_SESSION['user'];
		if($dp = User::find("all", array('username' => $username))){
			foreach ($dp as $k) {
				$k->no_ktp = $data['no_ktp'];
				$k->username = $username;
				$k->nama_pasien = $data['nama_pasien'];
				$k->alamat_pasien = $data['alamat'];
				$k->tgl_lahir_pasien = $data['tgl_lahir'];
				$k->jenis_kelamin = $data['jenis_kelamin'];
				$k->no_telp = $data['no_telp'];
				$k->pekerjaan = $data['pekerjaan'];
				$k->gol_darah = $data['gol_darah'];
				$k->save();
			}
			$cek = true;
			$deskripsi = "data pasien has been updated";
		}else{
			$cek = false;
			$deskripsi = "data pasien not found";
		}

		return $deskripsi;
	}

}
