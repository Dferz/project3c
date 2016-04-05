<?php

	class Mahasiswa extends ActiveRecord\Model {
		static $table_name = "data_mahasiswa_ums";
		static $primary_keys = "nim_mahasiswa";

		function setMahasiswa($data){

			try {
				$cek = false;
				$nim_mahasiswa = $data['nim'];
				$find = Mahasiswa::find($nim_mahasiswa);
				$deskripsi = "maaf mahasiswa sudah ada";

			} catch (\ActiveRecord\RecordNotFound $e) {
				$mhs = new Mahasiswa();

				$mhs->nim_mahasiswa = $data['nim'];
				$mhs->nama_mahasiswa = $data['nama'];
				$mhs->alamat_mahasiswa = $data['alamat'];
				$mhs->tgl_lahir_mahasiswa = $data['tgl_lahir'];
				$mhs->jenis_kelamin = $data['jenis_kelamin'];
				$mhs->no_telp = $data['no_telp'];
				$mhs->fakultas = $data['fakultas'];
				$mhs->jurusan = $data['jurusan'];
				$mhs->angkatan = $data['angkatan'];
				$mhs->gol_darah = $data['gol_darah'];
				$mhs->save();
				
				$cek = true;
				$deskripsi = "mahasiswa berhasil di input";

			}
			return array('cek' => $cek, 'deskripsi' => $deskripsi);

		}

		function deleteMahasiswa($nim_mahasiswa){
			try {
				$mhs = Mahasiswa::find($nim_mahasiswa);
				$mhs->delete();
				$cek = true;
				$deskripsi = "Mahasiswa has been deleted";

			} catch (\ActiveRecord\RecordNotFound $e) {	
				$cek = false;
				$deskripsi = "Mahasiswa not found";
			}

			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}
	}