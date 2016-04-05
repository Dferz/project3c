<?php

class KartuPasien extends ActiveRecord\Model {
	static $table_name = "kartu_pasien";
	static $primary_keys = "no_kartu";

	function cetakKartu(){
		$cek = true;
		$deskripsi = "Kartu sedang dipesan";
		$kartu = new KartuPasien();

		if($find = User::find('all', array('username' => $_SESSION['user'] ))){
			foreach ($find as $key) {
				$id_pasien = $key->id_pasien;
			}

			if($find = KartuPasien::find('all', array('id_pasien' => $id_pasien))){
				$conditions = "id_pasien = '".$id_pasien."'"." AND status ='sudah'";
				if($find = KartuPasien::find('all', array('conditions' => $conditions))){
					foreach ($find as $key) {
						$no_kartu = $key->no_kartu;
					}
					$kartu->updateKartu($no_kartu);
				}else{
					$deskripsi = "Kartu sudah dipesan sebelumnya dan sedang proses cetak";
				}
				
			}else{
				
				$getNoKartu = true;

				while($getNoKartu){
					$no_kartu = $kartu->getNoKartu();
					try {
						$tes = KartuPasien::find($no_kartu);
					} catch (\ActiveRecord\RecordNotFound $e) {		
						$getNoKartu = false;
					}	
				}

				$kartu->no_kartu = $no_kartu;
				$kartu->id_pasien = $id_pasien;
				$kartu->tgl_cetak = date("Y-m-d");
				$kartu->count_cetak = 1;
				$kartu->status = "memesan"; 
				$kartu->save();		
						
			}	
		}else{
			$deskripsi = "Maaf anda harus mengisi form data pasien terlebih dahulu";
		}
		

		return array('cek' => $cek, 'deskripsi' => $deskripsi);
		
	}

	function getNoKartu(){
		$no_kartu = "";

		for($i = 0; $i<9; $i++){
			$no_kartu .= rand(0,9);
		}

		return $no_kartu;
	}

	function updateKartu($no_kartu){
		$kartu = KartuPasien::find($no_kartu);
		
		$kartu->tgl_cetak = date("Y-m-d");
		$kartu->count_cetak = $kartu->count_cetak + 1;
		$kartu->status = "memesan"; 
		$kartu->save();

	}

	function getKartu(){
		$sql = "SELECT * FROM `kartu_pasien`
				INNER JOIN `data_pasien` ON(kartu_pasien.id_pasien = data_pasien.id_pasien)
				WHERE status = 'memesan'";
		$data['data'] = KartuPasien::find_by_sql($sql);

		return $data;
	}

	function verifikasiKartu($no_kartu){
		$kartu = KartuPasien::find($no_kartu);

		$kartu->status = "sudah"; 
		$kartu->save();

		$kp = new KartuPasien;
        $data = $kp->getKartu();

        $deskripsi = "kartu dengan nomor ". $no_kartu." telah dicetak";

		return array('deskripsi' => $deskripsi, 'data' => $data['data']);
	}

}
