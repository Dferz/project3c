<?php

	class SistemPendaftaran extends ActiveRecord\Model {
		static $table_name = "sistem_pendaftaran";
		static $primary_keys = "id_pendaftaran";

		function setPendaftaran($data){
			$cek = false;
			$sp = new SistemPendaftaran();
			$hari = $sp->dayConversion($data['tgl_daftar']);
			

			$condition = "jam = '".$data['jam']."'". " AND hari = '".$hari."'";
			if($jadwal = Jadwal::find("all", array('conditions' => $condition ))){
				foreach ($jadwal as $k) {
					$id_jadwal = $k->id_jadwal;
				}
			}
			$condition = "id_jadwal = '".$id_jadwal."'". " AND tgl_daftar = '".$data['tgl_daftar']."'". " AND status_pendaftaran = 'ACCEPTED'";
			if($sp = SistemPendaftaran::find('all', array('conditions' => $condition))){
				if(count($sp)>5){
					$deskripsi = "Maaf Pendaftaran pada jam dan hari tersebut sudah penuh";
				}else{
					try {
						$condition = "no_kartu = '".$data['no_kartu']."'"." AND id_jadwal = '".$id_jadwal."'". " AND tgl_daftar = '".$data['tgl_daftar']."'". " AND status_pendaftaran = 'WAITING'";
						if($sp = SistemPendaftaran::find('all', array('conditions' => $condition))){
							foreach ($sp as $k) {
								$k->id_admin = 1;
								$k->deskripsi_penyakit = $data['deskripsi_penyakit'];
								$k->save();
							}

							$deskripsi = "Pendaftaran Berhasil Silahkan Menunggu";
							
						}else{
							if($sp = SistemPendaftaran::find('all', array('tgl_daftar' => $data['tgl_daftar']))){
								$no_antrian = count($sp)+1;
							}else{
								$no_antrian = 1;
							}
							$sp = new SistemPendaftaran();

							$sp->no_kartu = $data['no_kartu'];
							$sp->id_jadwal = $id_jadwal;
							$sp->id_admin = 1;
							$sp->deskripsi_penyakit = $data['deskripsi_penyakit'];
							$sp->tgl_daftar = $data['tgl_daftar'];
							$sp->no_antrian = $no_antrian;
							$sp->status_pendaftaran = "WAITING";
							$sp->save();

							$cek = true;
							$deskripsi = "Pendaftaran Berhasil Silahkan Menunggu";
						}
						
					} catch (\ActiveRecord\DatabaseException $e) {
						$deskripsi = "Maaf nomor kartu tersebut tidak terdaftar";
					}
					
					
				}
			}else{
				try {
					$condition = "no_kartu = '".$data['no_kartu']."'"." AND id_jadwal = '".$id_jadwal."'". " AND tgl_daftar = '".$data['tgl_daftar']."'". " AND status_pendaftaran = 'WAITING'";
					if($sp = SistemPendaftaran::find('all', array('conditions' => $condition))){
						foreach ($sp as $k) {
							$k->id_admin = 1;
							$k->deskripsi_penyakit = $data['deskripsi_penyakit'];
							$k->save();
						}

						$deskripsi = "Pendaftaran Berhasil Silahkan Menunggu";
						
					}else{
						try {	
							if($sp = SistemPendaftaran::find('all', array('tgl_daftar' => $data['tgl_daftar']))){
								$no_antrian = count($sp)+1;

							}else{
								$no_antrian = 1;
							}

							$sp = new SistemPendaftaran();
							
							$sp->no_kartu = $data['no_kartu'];
							$sp->id_jadwal = $id_jadwal;
							$sp->id_admin = 1;
							$sp->deskripsi_penyakit = $data['deskripsi_penyakit'];
							$sp->tgl_daftar = $data['tgl_daftar'];
							$sp->no_antrian = $no_antrian;
							$sp->status_pendaftaran = "WAITING";
							$sp->save();

							$cek = true;
							$deskripsi = "Pendaftaran Berhasil Silahkan Menunggu";
						} catch (\ActiveRecord\DatabaseException $e) {
							$deskripsi = "Maaf nomor kartu tersebut tidak terdaftar";
						}
						
					}
				
				} catch (\ActiveRecord\RecordNotFound $e) {
					
				}
			}	
			
			return array('cek' => $cek, 'deskripsi' => $deskripsi);

		}

		function getPendaftaran(){
			$sql = "SELECT * FROM `sistem_pendaftaran`
					INNER JOIN `kartu_pasien` ON(`sistem_pendaftaran`.no_kartu = `kartu_pasien`.no_kartu)
					INNER JOIN jadwal_mmc ON(sistem_pendaftaran.id_jadwal = jadwal_mmc.id_jadwal)
					INNER JOIN data_dokter ON(data_dokter.id_dokter = jadwal_mmc.id_dokter)
					LEFT JOIN data_pasien ON(kartu_pasien.id_pasien = data_pasien.id_pasien)
					WHERE status_pendaftaran = 'WAITING'";
			$data['data'] = SistemPendaftaran::find_by_sql($sql);

			return $data;
		}

		function getPendaftaran2(){
			$sql = "SELECT * FROM `sistem_pendaftaran`
					INNER JOIN `kartu_pasien` ON(`sistem_pendaftaran`.no_kartu = `kartu_pasien`.no_kartu)
					INNER JOIN jadwal_mmc ON(sistem_pendaftaran.id_jadwal = jadwal_mmc.id_jadwal)
					INNER JOIN data_dokter ON(data_dokter.id_dokter = jadwal_mmc.id_dokter)
					LEFT JOIN data_pasien ON(kartu_pasien.id_pasien = data_pasien.id_pasien)
					WHERE status_pendaftaran = 'ACCEPTED'";
			$data['data'] = SistemPendaftaran::find_by_sql($sql);

			return $data;
		}

		function verifikasi($data){

			if($data['submit']=="Terima"){
				$status_pendaftaran = "ACCEPTED";
				$deskripsi = "Pendaftaran dengan nomor ".$data['no_kartu']." Telah diterima";
			}else{
				$status_pendaftaran = "REJECTED";
				$deskripsi = "Pendaftaran dengan nomor ".$data['no_kartu']." ditolak";
			}

			$condition = "no_kartu ='".$data['no_kartu']."'"." AND id_jadwal = '".$data['id_jadwal']."'". 
			" AND tgl_daftar = '".$data['tgl_daftar']."'"." AND status_pendaftaran = '".$data['status_pendaftaran']."'";
			
			if($sp = SistemPendaftaran::find('all', array('conditions' => $condition))){
				foreach ($sp as $k) {	
					$k->status_pendaftaran = $status_pendaftaran;
					$k->save();
					
				}
			}else{
				
			}

			$sp = new SistemPendaftaran;
            $data = $sp->getPendaftaran();

			return array('deskripsi' => $deskripsi, 'data' => $data['data']);
		}

		function verifikasi2($data){

			if($data['submit']=="Terima"){
				$status_pendaftaran = "FINISH";
				$deskripsi = "Pendaftaran dengan nomor ".$data['no_kartu']." Telah diterima";
			}else{
				$status_pendaftaran = "REJECTED";
				$deskripsi = "Pendaftaran dengan nomor ".$data['no_kartu']." ditolak";
			}

			$condition = "no_kartu ='".$data['no_kartu']."'"." AND id_jadwal = '".$data['id_jadwal']."'". 
			" AND tgl_daftar = '".$data['tgl_daftar']."'"." AND status_pendaftaran = '".$data['status_pendaftaran']."'";
			
			if($sp = SistemPendaftaran::find('all', array('conditions' => $condition))){
				foreach ($sp as $k) {	
					$k->status_pendaftaran = $status_pendaftaran;
					$k->save();
					
				}
			}else{
				
			}

			$sp = new SistemPendaftaran;
            $data = $sp->getPendaftaran2();

			return array('deskripsi' => $deskripsi, 'data' => $data['data']);
		}

		function cariData($data){
			$deskripsi = "Maaf data tidak ditemukan";

			$sql = "SELECT * FROM `sistem_pendaftaran`
					INNER JOIN `kartu_pasien` ON(`sistem_pendaftaran`.no_kartu = `kartu_pasien`.no_kartu)
					INNER JOIN jadwal_mmc ON(sistem_pendaftaran.id_jadwal = jadwal_mmc.id_jadwal)
					INNER JOIN data_dokter ON(data_dokter.id_dokter = jadwal_mmc.id_dokter)
					LEFT JOIN data_pasien ON(kartu_pasien.id_pasien = data_pasien.id_pasien)
					WHERE status_pendaftaran = 'FINISH' AND sistem_pendaftaran.no_kartu = '".$data['no_kartu']."'";
			if($data = SistemPendaftaran::find_by_sql($sql)){
				$deskripsi = "";
			}

			
			return array('deskripsi' => $deskripsi, 'data' => $data);
		}

		function cetakAntrean($data){

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

			$sql = "SELECT * FROM `sistem_pendaftaran`
					INNER JOIN `kartu_pasien` ON(`sistem_pendaftaran`.no_kartu = `kartu_pasien`.no_kartu)
					INNER JOIN jadwal_mmc ON(sistem_pendaftaran.id_jadwal = jadwal_mmc.id_jadwal)
					INNER JOIN data_dokter ON(data_dokter.id_dokter = jadwal_mmc.id_dokter)
					LEFT JOIN data_pasien ON(kartu_pasien.id_pasien = data_pasien.id_pasien)
					WHERE status_pendaftaran = 'FINISH' AND 
					sistem_pendaftaran.tgl_daftar ".$rentang;

			//echo $sql;
			
			$data['data'] = SistemPendaftaran::find_by_sql($sql);

			return $data;
		}

		function dayConversion($tanggal){
			$mktime = strtotime($tanggal);
			$hari = date("D", $mktime);
			$hari = str_replace("Sun", "minggu", $hari);
			$hari = str_replace("Mon", "senin", $hari);
			$hari = str_replace("Tue", "selasa", $hari);
			$hari = str_replace("Wed", "rabu", $hari);
			$hari = str_replace("Thu", "kamis", $hari);
			$hari = str_replace("Fri", "jumat", $hari);
			$hari = str_replace("Sat", "sabtu", $hari);
			
			return $hari;
		}

		function getJadwal($tgl_daftar){

			if($dp = User::find("all", array('username' => $_SESSION['user']))){
				foreach ($dp as $k) {
					$id_pasien = $k->id_pasien;
				}

				if($kp = KartuPasien::find('all', array('id_pasien' => $id_pasien))){
					foreach ($kp as $k) {
						$no_kartu = $k->no_kartu;
					}

					$condition = "no_kartu = '".$no_kartu."'". " AND tgl_daftar = '".$tgl_daftar."'". " AND status_pendaftaran = 'ACCEPTED'";
					if($sp = SistemPendaftaran::find('all', array('conditions' => $condition))){
						$i = 1;
						foreach ($sp as $k) {
							if($i == 1){
								$condition2 = "jadwal_mmc.id_jadwal ='".$k->id_jadwal."'";
							}
							$condition2.= " OR jadwal_mmc.id_jadwal ='".$k->id_jadwal."'";
							$i++;
						}
						$sql = "SELECT * FROM `sistem_pendaftaran`
						INNER JOIN jadwal_mmc ON(sistem_pendaftaran.id_jadwal = jadwal_mmc.id_jadwal)
						WHERE sistem_pendaftaran.no_kartu = '".$no_kartu."' AND (".$condition2.")";
						$data = Jadwal::find_by_sql($sql);
						$deskripsi = "";
						$cek = true;
					}else{
						$cek = false;
						$data = "";
						$deskripsi = "Maaf anda belum mendaftar antrian atau antrian anda belum di verifikasi";
					}
					
					
				}else{
					$data = "";
					$cek = false;
					$deskripsi = "Maaf anda belum mempunyai kartu pasien";
				}
			}else{
				$data = "";
				$cek = false;
				$deskripsi = "Maaf anda harus mengisi form data pasien terlebih dahulu";
			}
						
			return array('cek' => $cek, 'deskripsi' => $deskripsi, 'data' => $data, 'tgl_daftar' => $tgl_daftar);
		}

	}