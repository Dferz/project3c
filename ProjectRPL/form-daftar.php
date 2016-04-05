<html>
<head>
	<title>Pendaftaran</title>
	<style>
		body {
			margin:0;
			position: absolute;
			height:100%;
			width:100%;
			left:0;right:0;bottom:0;top:0;
			background-repeat: repeat;
			background-image: url('img/pat2.png');
		}
		@font-face {
			font-family: 'Code';
			src:url('font/CODE Bold.otf');
		}
		h1 {
			font-size:100px;
			text-align: center;
			color:#383838;
			font-family: 'Code';
			margin-top: 10%;
		}
		h2 {
			font-size:50px;
			text-align: center;
			color:#383838;
			margin-top: -0%;
			font-family: 'Code';
		}
		.line {
			height:1%;
			width:25%;
			border-top:1px solid black;
			margin-left: auto;
			margin-right: auto;
			margin-top: -5%;
		}
		form {
			height:30%;
			width:50%;
			opacity: 0.8;
			font-family: 'Code';
			margin-right: auto;
			margin-left: auto;
			margin-top:-2%;
		}
		select {
			text-align: center;
			width:50%;
			height:20%;
			font-size: 20px;
			font-family: 'Code';
			margin-left:24%;
		}
		input {
			margin-top: 2%;
			height:15%;
			width:10%;
			font-size: 20px;
			font-family: 'Code';
			margin-left: 44%;
		}
	</style>
</head>
<body>
	<h1>LANGKAH 1</h1>
	<div class="line"></div>
	<h2>Pilih kelompok program studi</h2>
	<form action="php/jenis_pendaftaran.php" method="post">
		<label for='jenis_pendaftaran'></label>
		<select id='jenis_pendaftaran' name="jenis_pendaftaran">
			<option value=''>-Pilih Jenis-</option>
			<option value='IPA'>IPA</option>
			<option value='IPS'>IPS</option>
			<option value='IPC'>IPC</option>			  			  		
		</select><br>
		<input type='submit' name='submit' value='Pilih'>
	</form>
</body>
</html>