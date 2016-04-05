<?php
	

	if(isset($_GET['judul'])){
		require '../php/config.php';
		require '../php/createConnection.php';

		$judul = $_GET['judul'];
		
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_GET['judul'] ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="/project3c/css/turret.css" />
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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
			
			#title:hover h1{
				background-color: #eeeeee;
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			.change{
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			
			.change:hover{
				background-color: #eeeeee;
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			p {
				font-family: 'Lato';
				color:#fff;
			}
		</style>
	</head>
	<body>
		<?php 			
			$post->newsFullView($judul);
		?>				
	</body>
	
</html>

<?php
	}
	
?>