<html>
	<head>
		<title>HELLO ADMIN</title>
		<style>
			body {
				margin:0;
				position: absolute;
				height:100%;
				width:100%;
				left:0;right:0;top:0;bottom:0;
				background-size: 100%;
				background-image: url('img/whitebg.jpg');
			}
			@font-face {
				font-family: 'Code';
				src:url('font/CODE Bold.otf');
			}
			.span {
				width:200px;
				display: block;
				float: left;
				font-size: 20px;
				font-family: 'Code';
				width:35%;
				margin-left:12.5%;
			}
			form {
				padding:15px;
				margin-left: auto;
				margin-right: auto;
				width:35%;
				font-family:'Code';
				font-size: 20px;
				color:#000;
				margin-top: 1%;
			}
			h1 {
				font-size: 70px;
				font-family: 'Code';
				text-align: center;
				margin-top: 15%;
			}
			.line {
				height:1%;
				margin-left: auto;
				margin-right: auto;
				width:25%;
				border-top: 1px solid black;
				margin-top: -3%;
			}
			input {
				font-family: 'Code';
				border-radius: 1px;
				height:25px;
				border-bottom:1px solid #888888 0.7;
				border-top: 0px;border-right: 1px solid #888888 0.7;border-left:0px;
			}
		</style>
	</head>
	<body>
		<h1>LOGIN ADMIN</h1>
		<div class="line"></div>
		<form method="post" action="php/logina.php">
			<span class="span">Username</span> : <input type="text" id="username" name="username" required></br>
			<span class="span" style="margin-top:1%;">Password</span> : <input type="password" id="pass" name="password" style="margin-top:1%;" required></br>
			<input type="submit" name="submit" value="Login" style="margin-left:74%;margin-top:1%;background-color:#FFF;color:#000;border:0px;">
		</form>
	</body>
</html>