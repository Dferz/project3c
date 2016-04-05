<html>
<head>
	<title></title>
	<script type="text/javascript">
		function cetak(){
  			win = window.open("cetak-form-pendaftaran.php", 
                    "", 
                    "width=1000, height=600, left=300,top=80");
 		}
	</script>
	<style>
		body {
			margin:0;
			position: absolute;
			height:100%;
			width:100%;
			left:0;right:0;bottom:0;top:0;
			background-image: url('img/whitebg2.png');
			background-size: 100%;
			background-repeat: no-repeat;
		}
		@font-face {
			font-family: 'RWLight';
			src:url('font/Raleway-Light.ttf');
		}
		@font-face {
			font-family: 'Code';
			src:url('font/CODE Bold.otf');
		}
		h1 {
			font-size:100px;
			text-align: center;
			color:#1a1919;
			font-family: 'Code';
			margin-top: 7%;
		}
		h2 {
			font-size:50px;
			text-align: center;
			color:#1a1919;
			margin-top: -0%;
			font-family: 'Code';
		}
		h3 {
			font-size:30px;
			text-align: center;
			color:#1a1919;
			font-family: 'RWLight';
			margin-top:1%;
		}
		.line {
			height:1%;
			width:25%;
			border-top:2px solid #1a1919;
			margin-left: auto;
			margin-right: auto;
			margin-top: -5%;
		}
		input {
			margin-left: 45%;
			text-align: center;
			width:10%;
			height:5%;
			font-family: 'Code';
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1>SELAMAT DATANG</h1>
	<div class="line"></div>
	<h2>SILAHKAN CETAK FORM PENDAFTARAN ANDA DI SINI</h2>
	<input type="button" value="Cetak" onclick="cetak()" />
</body>
</html>