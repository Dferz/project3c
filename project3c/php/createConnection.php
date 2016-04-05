<?php

	try{
	     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name};charset=utf8",$DB_user,$DB_pass);
	     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
	     echo $e->getMessage();
	}

	include_once 'classAccount.php';
	include_once 'classPosting.php';
	$acc = new Account($DB_con);
	$post = new Posting($DB_con);

	session_start();
?>