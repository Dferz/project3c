<?php
	echo "hhh";
	if(isset($_POST['submit']) && $_POST['submit'] == "Login"){

		
			

			$username = $_POST['username'];
			echo $username;
			$password = $_POST['password'];
			echo $password;
			if($username=='admin' && $password=='admin'){
				header("location: ../menuadmin.php");
			}else{
				//$keterangan.="Username / password salah!";
				header("location: ../loginadmin.php");
			}

		
		
		
	}
?>