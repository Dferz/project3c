<?php

	$app->group('/admin', function() use($app) {
        $app->get("", function() use ($app){
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/home_admin.php');     
            }else{         
                $app->render('permission_denied.php');
            }
        });

        $app->get("/", function() use ($app){
        	if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
        		$app->render('admin/home_admin.php');
                	
            }else{
            	$app->render('permission_denied2.php');
            }
        });

        $app->group('/insert', function() use ($app){
            $app->get('', function() use ($app){    
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $admin = new Admin;
                    $result = $admin->getDataAdmin();
                    $app->render('admin/form_admin.php', $result);
                        
                }else{
                   $app->render('permission_denied2.php');
                }
            });

            $app->post("", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $data = $app->request()->post();
                    $admin = new Admin;
                    $result = $admin->setAdmin($data);
                    echo $result['deskripsi'];
                }else{    
                    $app->render('permission_denied2.php');
                }
            });

            $app->get("/dokter", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $app->render('admin/form_dokter.php');
                        
                }else{
                    $app->render('permission_denied3.php');
                }
            });

            $app->post("/dokter", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $data = $app->request()->post();
                    $dokter = new Dokter;

                    $result = $dokter->setDokter($data);
                    echo $result['deskripsi'];   
                }else{
                   $app->render('permission_denied3.php');
                }
               
            });

            $app->get("/mahasiswa", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $app->render('admin/form_mahasiswa.php');
                        
                }else{
                    $app->render('permission_denied3.php');
                }
            });

            $app->post("/mahasiswa", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $data = $app->request()->post();
                    $mhs = new Mahasiswa;

                    $result = $mhs->setMahasiswa($data);
                    echo $result['deskripsi'];   
                }else{
                    $app->render('permission_denied3.php');
                }
            });

            $app->get("/jadwal", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $app->render('admin/form_jadwal.php');
                        
                }else{
                    $app->render('permission_denied3.php');
                }
            });

            $app->post("/jadwal", function() use ($app){
                if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                    $data = $app->request()->post();
                    $jadwal = new Jadwal;
                    $result = $jadwal->setJadwal($data);
                    echo $result['deskripsi'];
                }else{
                    $app->render('permission_denied3.php');
                }
                
            });
        });
        
        $app->get('/pendaftaranlangsung', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/pendaftaranlangsung.php');
            }else{
                $app->render('permission_denied2.php');
            }
            
        });

        $app->post('/pendaftaranlangsung', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $dp = new SistemPendaftaran;
                $result = $dp->setPendaftaran($data);
                $app->render('admin/pendaftaranlangsung.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->get('/daftardarurat', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/daftardarurat.php');
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->post('/daftardarurat', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $dd = new DaftarDarurat;
                $result = $dd->setDaftar($data);
                $app->render('admin/daftardarurat.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->get('/caridata', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/caridata.php');
            }else{
                $app->render('permission_denied2.php');
            }   
        });

        $app->post('/caridata', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $sp = new SistemPendaftaran;
                $result = $sp->cariData($data);
                $app->render('admin/caridata.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->get('/cetakantrean', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/cetakantrean.php');
            }else{
                $app->render('permission_denied2.php');
            }
           
        });

        $app->post('/cetakantrean', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $sp = new SistemPendaftaran;
                $result = $sp->cetakAntrean($data);
                $dd = new DaftarDarurat;
                $result2 = $dd->cetakAntreanDarurat($data);
                $app->render('admin/cetak_antrean.php', array('data' => $result['data'], 'data2' => $result2['data']));
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->get('/verifikasiPendaftaran', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $sp = new SistemPendaftaran;
                $result = $sp->getPendaftaran();
                $app->render('admin/verifikasi.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->post('/verifikasiPendaftaran', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $sp = new SistemPendaftaran;
                $result = $sp->verifikasi($data);
                $app->render('admin/verifikasi.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

         $app->get('/verifikasiAntrian', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $sp = new SistemPendaftaran;
                $result = $sp->getPendaftaran2();
                $app->render('admin/verifikasi2.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->post('/verifikasiAntrian', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $sp = new SistemPendaftaran;
                $result = $sp->verifikasi2($data);
                $app->render('admin/verifikasi2.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }        
        });

        $app->get('/editdata', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/editdata.php');
            }else{
                $app->render('permission_denied2.php');
            }  
            
        });

        $app->post('/editdata', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post();
                $dp = new User;
                          
                if($data['submit']=="cari"){
                    $result = $dp->getDataPasien($data['username']);
                    $app->render('admin/editdata.php', $result);
                }

                if($data['submit']=="simpan"){
                    $result2 = $dp->updatePasien($data);
                    $app->render('admin/editdata.php', array('deskripsi' => $result2 ));
                }
            }else{
                $app->render('permission_denied2.php');
            } 
        });

        $app->get('/cetakdaftar', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $app->render('admin/cetakdaftar.php');
            }else{
                $app->render('permission_denied2.php');
            } 
        });

        $app->post('/cetakdaftar', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $user = new User;
                $result = $user->getAll();
                $app->render('admin/cetak_daftar.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->get('/cetakkartu', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $kp = new KartuPasien;
                $result = $kp->getKartu();
                $app->render('admin/cetak_kartu.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->post('/cetakkartu', function () use ($app) {
            if(isset($_SESSION['status'])&& $_SESSION['status'] == 'admin'){ 
                $data = $app->request()->post('no_kartu');
                $kp = new KartuPasien;
                $result = $kp->verifikasiKartu($data);
                $app->render('admin/cetak_kartu.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
        });
    });
?>