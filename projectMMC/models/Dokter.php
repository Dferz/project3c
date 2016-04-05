<?php

	class Dokter extends ActiveRecord\Model {
		static $table_name = "data_dokter";
		static $primary_keys = "id_dokter";

		function setDokter($data){

			try {
				$cek = false;
				$id_dokter = $data['id_dokter'];
				$find = Dokter::find($id_dokter);
				$deskripsi = "maaf dokter sudah ada";

			} catch (\ActiveRecord\RecordNotFound $e) {
				$dokter = new Dokter();

				$dokter->id_dokter = $data['id_dokter'];
				$dokter->nama_dokter = $data['nama_dokter'];
				$dokter->profesi = $data['profesi'];
				$dokter->save();
				
				$cek = true;
				$deskripsi = "dokter berhasil di input";

			}
			return array('cek' => $cek, 'deskripsi' => $deskripsi);

		}

		function deleteDokter($id_dokter){
			try {
				$dokter = Dokter::find($id_dokter);
				$dokter->delete();
				$cek = true;
				$deskripsi = "Dokter has been deleted";

			} catch (\ActiveRecord\RecordNotFound $e) {	
				$cek = false;
				$deskripsi = "Dokter not found";
			}

			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}
	}