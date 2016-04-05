<html>
	<head>
		<title>Halaman Admin</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/turret.css" />
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
			  background-color: #ECECEC;
			  font-size: medium;
			}

			@font-face {
				font-family: 'Code';
				src:url('font/CODE Bold.otf');
			}
			.underline {
				border-bottom:1px solid;
			}
			h2 {
			  font-weight: 420;
			  text-align: center;
			  font-family:'Code';
			  color: #eeeeee;
			}
			.change h2{
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			
			.change:hover h2{
				background-color: #eeeeee;
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			mark {
			    margin: 0;
			    padding: 0.3rem;
			    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			    font-weight: 400;
			    font-size: 1.4rem;
			    color: #434a54;
			    background: yellow;
			    border: none;
			    border-radius: 2px;
			}

			mark.info {
			    color: #ffffff;
			    background: #149cfd;
			    border: none;
			}

		</style>
		<script type="text/javascript" src='js/nicEdit.js'></script>
		<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		</script>
	</head>
	<body>
		<div class="column-1 margin-bottom-medium padding-small" style="background-color:#BF55EC;">
			<div class="column-1-2 column-center margin-small">
				<h2 class="text-center underline padding-small change">Posting Page</h2>
			</div>
			<!-- <div class="column-1-8 column-center">
				<a href="admin-page?logout=true"><p class="text-center ralewaysmall change">Logout</p></a>
			</div> -->
		</div>
		
		<div class='container padding-medium'>
			<a href="admin-page?logout=true"><button class="button-primary right">Logout</button></a>
			<div class="column-1-2 column-center">
				<?php 
					if(isset($status)){
						echo "<mark class='info'>$status</mark>";
					}
				?>
				
				<form action="" method="post" enctype="multipart/form-data">
					<label for='judul'>Judul</label>
					<input type = "text" id='judul' name="judul" placeholder='Judul Event' maxlength="50">
					<label for='deskripsi'>Deskripsi</label>
					<textarea id='deskripsi' name='deskripsi' placeholder= "Deksripsi Event" cols='100' rows='15'></textarea>
					<label for='image'>Foto Acara</label>
					<input id='image' type='file' name="image" size="50" require>
					<div class="button-group button-group-block margin-bottom-large margin-top-medium">
						<div class="button-group">
							<button type="submit" class="button button-inverse" name='submit_posting'>Tambah Posting</button>			
						</div>
						<div class="button-group">
							<button type="submit" class="button button-inverse" name='delete_posting'>Hapus Posting</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>