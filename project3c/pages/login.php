<?php
	require '../php/config.php';
	require '../php/createConnection.php';
	
	if(isset($_POST['submit'])){
		$user = trim($_POST['username']);
		$pass = trim($_POST['password']);
		$acc->login($user, $pass);	
	}
	
	if($acc->is_loggedin())
	{
		$acc->redirect('admin-page');
	}
	

?>
<html>
	<head>
		<title>Halaman Login</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="/project3c/css/turret.css" />
		<style>

			*, *:before, *:after {
			  margin: 0;
			  padding: 0;
			  box-sizing: border-box;
			}

			html, body {
			  height: 100%;
			}

			body {
			  color: #eeeeee;
			  background-color: #ECECEC;
			}

			@font-face {
				font-family: 'Code';
				src:url('font/CODE Bold.otf');
			}
			.underline {
				border-bottom:1px solid;
			}
			h1 {
			  font-weight: 420;
			  text-align: center;
			  font-family:'Code';
			  color: #eeeeee;
			}
			#title h1{
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			
			#title:hover h1 {
				background-color: #eeeeee;
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

		</style>
	</head>
	<body>
		<div class="column-1 margin-bottom-medium" style="background-color:#BF55EC;">
			<div class="column-1-2 column-center padding-medium" id="title">
				<h1 class="text-center underline padding-medium">LOG IN</h1>
			</div>
		</div>
		<div class="container padding-medium">
			<form action="" method="post">
				<fieldset class="padding-left-small padding-right-small">
					<legend style="font-size:30px;">Log In </legend>
					<label for="username">Username</label>
					<input type="text" id='username' name="username" placeholder="Masukkan username" maxlength="24" required>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" maxlength="24" placeholder="Masukkan password" required>
				</fieldset>
				<button type="submit" class="button button-block margin-top-small" name='submit' value="Submit">Submit</button>
				<button type="reset" class="button button-block margin-top-small" name='reset' value="Reset">Reset</button>
			</form>
		</div>
	</body>
</html>