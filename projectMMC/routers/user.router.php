<?php
	
	$app->group('/user', function() use($app) {
        $app->get("", function() use ($app){
        	if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){ 
        		$app->render('user/home_user.php', array('username' => $_SESSION['user']));
                	
            }else{
            	if(!isset($_SESSION['user'])){
            		$description = 'first';
            	}else{
            		$description = 'as user';
            	}       	
          
           		$app->render('permission_denied.php', array('description' => $description ));
            }
        });

        $app->get("/", function() use ($app){
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){ 
                $app->render('user/home_user.php', array('username' => $_SESSION['user']));
                    
            }else{
                if(!isset($_SESSION['user'])){
                    $description = 'first';
                }else{
                    $description = 'as user';
                }           
          
                $app->render('permission_denied2.php', array('description' => $description ));
            }
        });

        $app->get('/insert', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $dp = new User;
                $result = $dp->getDataPasien($_SESSION['user']);
                $app->render('user/isidata.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }
            
        });

        $app->post('/insert', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $data = $app->request()->post();
                $dp = new User;
                $data['username'] = $_SESSION['user'];
                $result = $dp->setPasien($data);
                $result2 = $dp->getDataPasien($_SESSION['user']);
                $app->render('user/isidata.php', array('deskripsi' => $result['deskripsi'], 'data' => $result2['data'] ));
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->get('/daftarlangsung', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $app->render('user/daftarlangsung.php');
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->post('/daftarlangsung', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $data = $app->request()->post();
                $dp = new SistemPendaftaran;
                $result = $dp->setPendaftaran($data);
                $app->render('user/daftarlangsung.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }    
        });   

        $app->get('/lihatjadwal', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $app->render('user/lihatjadwal.php');
            }else{
                $app->render('permission_denied2.php');
            }
        });

        $app->post('/lihatjadwal', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $data = $app->request()->post();
                $dp = new SistemPendaftaran;
                $result = $dp->getJadwal($data['tgl_daftar']);
                $app->render('user/lihatjadwal.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }     
        });   

        $app->get('/pesankartu', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $app->render('user/pesankartu.php');
            }else{
                $app->render('permission_denied2.php');
            }           
        });

        $app->post('/pesankartu', function () use ($app) {
            if(isset($_SESSION['status'])&&($_SESSION['status'] == 'umum' || $_SESSION['status'] == 'mahasiswa')){
                $kp = new KartuPasien;
                $result = $kp->cetakKartu();
                $app->render('user/pesankartu.php', $result);
            }else{
                $app->render('permission_denied2.php');
            }  
        });   
        
    });

?>