<?php
	
	$app->group('/login', function() use ($app){
		$app->get("", function() use ($app){
            if(!isset($_SESSION['user'])){
                $app->render('login/login.php');
            }else{
                if($_SESSION['status']!="admin"){
                    $red = 'user';
                }else{
                    $red = 'admin';
                }
                 $app->redirect($red);                
            }         
        });

        $app->post("", function() use ($app){    
            $data = $app->request()->post();
        	$acc = new Account;
            $result = $acc->validateAccount($data);

            if($result['cek']){
                $_SESSION['user'] = $data['username'];
                $_SESSION['status'] = $data['status'];
                if($data['status']!='admin'){
                    $data['status'] = 'user';
                }
                $app->redirect($data['status']);
            }else{
                $app->render('login/login.php', $result);
            }       
        });
    });

    $app->group('/register', function() use ($app){

        $app->get("", function() use ($app){
            $app->render('login/daftar.php');
        });

        $app->post("", function() use ($app){ 
            $data = $app->request()->post();
            $acc = new Account;
            $result = $acc->setAccount($data);
            $app->render('login/daftar.php', $result);

        });
		
	});

    $app->get("/logout", function() use ($app){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            unset($_SESSION['status']);
            $app->render('login/logout.php');
        }else{
            $app->render('permission_denied.php', array('deskripsi' => 'first' ));
        } 
        
    });
