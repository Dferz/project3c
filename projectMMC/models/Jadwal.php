<?php

	class Jadwal extends ActiveRecord\Model {
		static $table_name = "jadwal_mmc";
		static $primary_keys = "id_jadwal";

		function setJadwal($data){

			try {
				$cek = false;
				$id_jadwal = $data['id_jadwal'];
				$find = Jadwal::find($id_jadwal);
				$deskripsi = "maaf jadwal sudah ada";

			} catch (\ActiveRecord\RecordNotFound $e) {
				try {
					$dokter = Dokter::find($data['id_dokter']);
					if($dokter){
						$jadwal = new Jadwal();

						$jadwal->id_jadwal = $data['id_jadwal'];
						$jadwal->hari = $data['hari'];
						$jadwal->jam = $data['jam'];
						$jadwal->id_dokter = $data['id_dokter'];
						$jadwal->save();
						$cek = true;
						$deskripsi = "jadwal berhasil di input";
					}
					
				} catch (\ActiveRecord\RecordNotFound $e) {
					$cek = false;
					$deskripsi = "maaf id dokter tidak ada";
				}

			}
			return array('cek' => $cek, 'deskripsi' => $deskripsi);

		}

		function deleteJadwal($id_jadwal){
			try {
				$jadwal = Jadwal::find($id_jadwal);
				$jadwal->delete();
				$cek = true;
				$deskripsi = "Jadwal has been deleted";

			} catch (\ActiveRecord\RecordNotFound $e) {	
				$cek = false;
				$deskripsi = "Jadwal not found";
			}

			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}
	}