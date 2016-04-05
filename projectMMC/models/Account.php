<?php

	class Account extends ActiveRecord\Model {
		static $table_name = "account";
		static $primary_keys = "username";

		function setAccount($data){			
			try {
				$cek = false;
				$username = $data['username'];
				$find = Account::find($username);
				$deskripsi = "maaf username sudah ada";

			} catch (\ActiveRecord\RecordNotFound $e) {
				$acc = new Account();
				if($data['status'] == "mahasiswa"){
					try {
						$mhs = Mahasiswa::find($data['nim']);
						$deskripsi = "selamat anda berhasil registrasi sebagai mahasiswa";
						$acc->username = $data['username'];
						$acc->password = hash('sha256',$data['password']);
						$acc->status = "mahasiswa";
						$acc->tgl_aktif = date("Y-m-d");
						$acc->save();

						$mktime = strtotime($mhs->tgl_lahir_mahasiswa);
						$tgl_lahir = date("Y-m-d", $mktime);
						
						$data['nama_pasien'] = $mhs->nama_mahasiswa;
						$data['alamat'] = $mhs->alamat_mahasiswa;
						$data['tgl_lahir'] = $tgl_lahir;
						$data['jenis_kelamin'] = $mhs->jenis_kelamin;
						$data['no_telp'] = $mhs->no_telp;
						$data['pekerjaan'] = "mahasiswa";
						$data['gol_darah'] = $mhs->gol_darah;
						
						$dp = new User;
			            $result = $dp->setPasien($data);
					} catch (\ActiveRecord\RecordNotFound $e) {
						$deskripsi = "maaf nim Mahasiswa tidak terdaftar";
					}
					
					
				}else{
					$acc->username = $data['username'];
					$acc->password = hash('sha256',$data['password']);
					$acc->status = $data['status'];
					$acc->tgl_aktif = date("Y-m-d");
					$acc->save();

					$deskripsi = "selamat anda berhasil registrasi";
				}

				$cek = true;

			}
			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		
		}

		function validateAccount($data){
			$cek = false;
			$deskripsi = "";
			$username = $data['username'];
			$username = addslashes($username);
			$condition_username = "username = '".$username."'";

			echo($username);
			
			try {
				if($cek = Account::find("all", array('conditions' => $condition_username))){
					$password = hash('sha256',$data['password']);
					$condition_password = $condition_username." AND password = '".$password."'";

					if($cek = Account::find("all", array('conditions' => $condition_password))){
						$status = $data['status'];
						$status = mysql_real_escape_string($status);
						$condition = $condition_password." AND status = '".$status."'";
						if($cek = Account::find("all", array('conditions' => $condition))){
							//update tgl_aktif
							foreach ($cek as $f){
								$f->tgl_aktif = date("Y-m-d");
								$f->save();
							}
							$cek = true;
						}else{
							$deskripsi = "status salah";
						}					
					}else{
						$deskripsi = "password salah";
					}
				}else{
					$deskripsi = "user ga ada";
				}	
			} catch (\ActiveRecord\DatabaseException $e) {
				$deskripsi = "maaf terjadi kesalahan pada input";
			}
			
		
			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}

		function editAccount($data){

			try {
				$username = $data['username'];
				$acc = Account::find($username);
				$acc->password = hash('sha256',$data['password']);
				$acc->save();
				$cek = true;
				$deskripsi = "Account has been edited";

			} catch (\ActiveRecord\RecordNotFound $e) {	
				$cek = false;
				$deskripsi = "Account not found";
			}
			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}

		function deleteAccount($username){
			try {
				$acc = Account::find($username);
				$acc->delete();
				$cek = true;
				$deskripsi = "Account has been deleted";

			} catch (\ActiveRecord\RecordNotFound $e) {	
				$cek = false;
				$deskripsi = "Account not found";
			}
			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}
	}