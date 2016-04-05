<?php

	class Admin extends ActiveRecord\Model {
		static $table_name = "data_admin";
		static $primary_keys = "id_admin";

		function setAdmin($data){

			$cek = false;
			$username = $_SESSION['user'];
			if($find = Admin::find('all', array('username' => $username ))){
				$admin = new Admin();
				$deskripsi = $admin->updateAdmin($data);
			}else{
				$admin = new Admin();

				$admin->username = $_SESSION['user'];
				$admin->nama_admin = $data['nama_admin'];
				$admin->alamat_admin = $data['alamat'];
				$admin->save();
				
				$cek = true;
				$deskripsi = "data admin berhasil di input";
			}
			
			return array('cek' => $cek, 'deskripsi' => $deskripsi);

		}

		function deleteAdmin($username){
			try {
				$admin = Admin::find("all", array('username' => $username ));
				foreach ($admin as $k) {
					$k->delete();
				}
				$cek = true;
				$deskripsi = "Data admin has been deleted";

			} catch (\ActiveRecord\RecordNotFound $e) {	
				$cek = false;
				$deskripsi = "Admin not found";
			}

			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}

		function getDataAdmin(){
			$username = $_SESSION['user'];
			$data['data'] = Admin::all(array('username' => $username));

			return $data;
		}

		function updateAdmin($data){
			$username = $_SESSION['user'];
			if($admin = Admin::find("all", array('username' => $username))){
				foreach ($admin as $k) {
					$k->username = $_SESSION['user'];
					$k->nama_admin = $data['nama_admin'];
					$k->alamat_admin = $data['alamat'];
					$k->save();
				}
				$cek = true;
				$deskripsi = "data admin has been updated";
			}else{
				$cek = false;
				$deskripsi = "data admin not found";
			}

			return $deskripsi;
		}
	}