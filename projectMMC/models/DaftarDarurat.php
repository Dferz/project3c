<?php

	class DaftarDarurat extends ActiveRecord\Model {
		static $table_name = "daftar_darurat";
		static $primary_keys = "id";

		function setDaftar($data){
			$sp = new SistemPendaftaran();
			$hari = $sp->dayConversion($data['tgl_periksa']);

			$dd = new DaftarDarurat();

			$dd->no_ktp = $data['no_ktp'];
			$dd->nama_pasien = $data['nama_pasien'];
			$dd->alamat = $data['alamat'];
			$dd->tgl_lahir = $data['tgl_lahir'];
			$dd->jenis_kelamin = $data['jenis_kelamin'];
			$dd->no_telp = $data['no_telp'];
			$dd->pekerjaan = $data['pekerjaan'];
			$dd->gol_darah = $data['gol_darah'];
			$dd->deskripsi_penyakit = $data['deskripsi_penyakit'];
			$dd->tgl_periksa = $data['tgl_periksa'];
			$dd->jam = $data['jam'];
			$dd->hari = $hari;
			$dd->save();
			
			$cek = true;
			$deskripsi = "pendaftaran darurat berhasil";

			return array('cek' => $cek, 'deskripsi' => $deskripsi);
		}

		function cetakAntreanDarurat($data){

			$mktime = strtotime($data['tgl_daftar']);
				
			if($data['rentang']== "1 minggu"){
				$tgl_selesai = date("Y-m-d", strtotime("+1 week", $mktime));
			}else if($data['rentang']== "1 bulan"){
				$tgl_selesai = date("Y-m-d", strtotime("+1 month", $mktime));
			}else if($data['rentang']== "3 bulan"){
				$tgl_selesai = date("Y-m-d", strtotime("+3 month", $mktime));
			}else if($data['rentang']== "6 bulan"){
				$tgl_selesai = date("Y-m-d", strtotime("+6 month", $mktime));
			}else if($data['rentang']== "1 tahun"){
				$tgl_selesai = date("Y-m-d", strtotime("+1 year", $mktime));
			}else{
				$tgl_selesai = date("Y-m-d", $mktime);
			}
			$rentang = "BETWEEN '".$data['tgl_daftar']."' AND '".$tgl_selesai."'";

			$sql = "SELECT * FROM `daftar_darurat`
					WHERE tgl_periksa ".$rentang;
			
			$data['data'] = DaftarDarurat::find_by_sql($sql);

			return $data;
		}
		
	}