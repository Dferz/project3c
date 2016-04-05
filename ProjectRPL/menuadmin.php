<html>
	<head>
		<title>MENU ADMIN</title>
		<script type="text/javascript" src='js/jquery-1.4.3.min.js'></script>
		<script type="text/javascript">
			$(document).ready(function(){
			    $('#jenis').change(function(){
			    	var jenis = $("#jenis").val();
			    	$.ajax({
			    		type: "POST",
			            dataType: "html",
			            url: "php/cetak_pilihan_prodi.php",
			            data: "jenis="+jenis,
			            success: function(data){
			               	$("#prodi").html(data);                                                                                    
			            }
			        });
			    });
			});
		</script>


		<style>
			body {
				margin:0;
				position: absolute;
				height:100%;
				width:100%;
				left:0;right:0;top:0;bottom:0;
				background-size: 100%;
				background-image: url('img/blackbg.jpg');
			}
			@font-face {
				font-family: 'Code';
				src:url('font/CODE Bold.otf');
			}
			.profbox {
	          width:100%;
	          height:100%;
	          position:fixed;
	          margin-top:0;
	          float:left;
	        }
	        .profpic {
	          width: 49.9%;

	          height:120%;
	          background-size:cover;
	          color: #FFFFFF;
	          z-index: 5;
	          top:0;
	          background-position: center;
	          float:left;
	        }
	        .proftitle {
	          margin-top: 23%;
	          height:10%;
	          width:25%;
	          margin-left: 12%;
	          position: fixed;
	          border:1px solid white;
	        }
	        .proftitle h1 {
	          margin-top: 5%;
	          font-size:40px;
	          text-align: center;
	          font-family: 'Code';
	        }
	        .profile {
	          width:100%;
	          height:100%;
	          color:#30345a;
	          background-color: #f3f3f3;
	          opacity: 0;
	          transition:all 0.5s;
	          -webkit-transition:all 0.5s;
	          float: left;
	        }
	        .profile h1{
	          font-size:30px;
	          margin-left: 80px;
	        }
	        .profile p{
	          font-size: 12px;
	          margin-left:100px;
	          line-height: 50%;
	          text-transform: uppercase;
	        }
	        .profpic:hover .profile {
	          opacity: 0.8;
	        }
	        .divide {
	        	width:0.2%;
	        	height:80%;
	        	margin-top: 5.5%;
	        	float: left;
	        	background-color: #FFF;
	        	opacity: 0.5;
	        }
	        .span {
				width:200px;
				display: block;
				float: left;
				font-size: 20px;
				font-family: 'Code';
				width:35%;
				margin-left:12.5%;
				opacity: 0.8;
			}
			form {
				padding:15px;
				margin-left: auto;
				margin-right: auto;
				width:70%;
				font-family:'Code';
				font-size: 15px;
				color:#000;
				margin-top: 1%;
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
		<div class="profbox">
			<div class="profpic">
				<div class="proftitle"><h1 style="color:#FFF;">MASUKKAN NILAI</h1></div>
				<div class="profile">
					<form method="post" style="margin-top:22%;" action="php/masuknilai.php">
						<span class="span">No. Pendaftaran</span> : <input type="text" id="nodaftar" name="nodaftar"><br>
						
						<span class="span" style="margin-top:1%;">Nilai IPA</span> : <input type="text" id="ipa" name="ipa" style="margin-top:1%;"><br>
						<span class="span" style="margin-top:1%;">Nilai IPS</span> : <input type="text" id="ips" name="ips" style="margin-top:1%;"><br>
						<input type="submit" value="Masukkan" name="submit" style="margin-left:68%;margin-top:1%;background-color:#FFF;color:#000;border:0px;">
					</form>
				</div>
			</div>
			<div class="divide"></div>
			<div class="profpic">
				<div class="proftitle"><h1 style="color:#FFF;">SELEKSI</h1></div>
				<div class="profile">
					<form method="post" style="margin-top:26%;" action="php/goseleksi.php">
						<span class="span">Jenis</span> :
						<select id='jenis' name="jenis" required style="width:170px;height:25px;">
					  		<option value="">-Pilih-</option>
					  		<option value="IPA">IPA</option>
					  		<option value="IPS">IPS</option>
					  		<!-- <option value='IPC'>IPC</option> -->
					  	</select></br>
					  			
						<span class="span">Prodi</span> : 
						<select id='prodi' name="prodi" required style="width:170px;height:25px;margin-top:1%;">
					  		<option value="">-Pilih-</option>
					  		<!-- <option value="IPA D-3 AGRIBISNIS">IPA D-3 AGRIBISNIS</option>
					  		<option value="IPA D-3 FARMASI">IPA D-3 FARMASI</option>
					  		<option value="IPA D-3 KEBIDANAN">IPA D-3 KEBIDANAN</option>
					  		<option value="IPA D-3 TEKNIK INFORMATIKA">IPA D-3 TEKNIK INFORMATIKA</option>
					  		<option value="IPA D-3 TEKNIK KIMIA">IPA D-3 TEKNIK KIMIA</option>
					  		<option value="IPA D-3 TEKNIK SIPIL">IPA D-3 TEKNIK SIPIL</option>
					  		<option value="IPA D-3 TEKNOLOGI HASIL PERTANIAN">IPA D-3 TEKNOLOGI HASIL PERTANIAN</option>
					  		<option value="IPA D-4 KESELAMATAN DAN KESEHATAN KERJA">IPA D-4 KESELAMATAN DAN KESEHATAN KERJA</option>
					  	 --></select><br>
					  	 <span class="span" style="margin-top:1%;">Kuota</span> : 
					  	 <input type="text" value="" name="kuota" style="margin-top:1%;width:170px;">
					  	<input type="submit" value="Seleksi" name="submit" style="margin-left:73%;margin-top:1%;background-color:#FFF;color:#000;border:0px;">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>