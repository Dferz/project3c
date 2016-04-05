<?php
	require 'php/config.php';
	require 'php/createConnection.php';
	
	if(isset($_POST['submit'])){
		require 'php/sendMail.php';
		require 'templates/formVerifikasiSuccess.php';
		header("refresh:3;url=$homepage");
		
	}else{
		

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/turret.css" />
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/slider-pro.css"/>
		<link rel="icon" href="assetNews/3c polos.png"/>

		<style>
			@import url(http://weloveiconfonts.com/api/?family=entypo);
			.raleway {
				font-family: 'Raleway', sans-serif;
				color:#EEEEEE;
			}
			.ralewaybig {
				font-size:70px;
				font-family: 'Roboto';
				color:#EEEEEE;
			}
			a {
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
				text-decoration: none;
			}
			a:hover {
				opacity: 0.7;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}	
			.underline {
				border-bottom:1px solid;
			}
			.icon-button {
				background-color: white;
				border-radius: 10rem;
				cursor: pointer;
				display: inline-block;
				font-size: 6.0rem;
				height:10rem;
				line-height: 10rem;
				margin: 0 5px;
				position: relative;
				text-align: center;
				-webkit-user-select: none;
				   -moz-user-select: none;
				    -ms-user-select: none;
				        user-select: none;
				width: 10rem;
			}

			/* Circle */
			.icon-button span {
				border-radius: 0;
				display: block;
				height: 0;
				left: 50%;
				margin: 0;
				position: absolute;
				top: 50%;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
				     -o-transition: all 0.3s;
				        transition: all 0.3s;
				width: 0;
			}
			.icon-button:hover span {
				width: 10rem;
				height: 10rem;
				border-radius: 10rem;
				margin: -5rem;
			}
			.twitter span {
				background-color: #4099ff;
			}
			.facebook span {
				background-color: #3B5998;
			}
			.google-plus span {
				background-color: #db5a3c;
			}
			.instagram span {
				background-color: #d07930;
			}

			/* Icons */
			.icon-button i {
				background: none;
				color: white;
				height: 10rem;
				left: 0;
				line-height:10rem;
				position: absolute;
				top: 0;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
				     -o-transition: all 0.3s;
				        transition: all 0.3s;
				width: 10rem;
				z-index: 10;
			}
			.icon-button .icon-twitter {
				color: #4099ff;
			}
			.icon-button .icon-facebook {
				color: #3B5998;
			}
			.icon-button .icon-google-plus {
				color: #db5a3c;
			}
			.icon-button .icon-instagram {
				color: #d07930;
			}
			.icon-button:hover .icon-twitter,
			.icon-button:hover .icon-facebook,
			.icon-button:hover .icon-google-plus,
			.icon-button:hover .icon-instagram {
				color: white;
			}
			.white {
				color:#eeeeee;
			}
			ul.rig {
				list-style: none;
				font-size: 0px;
				margin-left: -2.5%; /* should match li left margin */
			}
			ul.rig li {
				display: inline-block;
				padding: 10px;
				margin: 0 0 2.5% 2.5%;
				background: #E26A6A;
				font-size: 16px;
				font-size: 1rem;
				vertical-align: top;
				box-sizing: border-box;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
			}
			ul.rig li img {
				max-width: 100%;
				height: auto;
				margin: 0 0 10px;
			}
			ul.rig li h3 {
				margin: 0 0 5px;
			}
			ul.rig li p {
				font-size: 1.9em;
				line-height: 1.5em;
				color: #eee;
			}
			/* class for 2 columns */
			ul.rig.columns-2 li {
				width: 47.5%; /* this value + 2.5 should = 50% */
			}
			/* class for 3 columns */
			ul.rig.columns-3 li {
				width: 30.83%; /* this value + 2.5 should = 33% */
			}
			/* class for 4 columns */
			ul.rig.columns-4 li {
				width: 22.5%; /* this value + 2.5 should = 25% */
			}
			 
			@media (max-width: 480px) {
				ul.grid-nav li {
					display: block;
					margin: 0 0 5px;
				}
				ul.grid-nav li a {
					display: block;
				}
				ul.rig {
					margin-left: 0;
				}
				ul.rig li {
					width: 100% !important; /* over-ride all li styles */
					margin: 0 0 20px;
				}
			}
			.roboto {
				font-family: 'Roboto';
			}
			.underall {
				border:1px solid;
			}
			.ralewaysmall {
				font-family: 'Raleway';
			}

			.change {
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			.change:hover {
				background-color: #eeeeee;
				color:#F64747;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			.changey {
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			.changey:hover {
				background-color: #eeeeee;
				color:#F7CA18;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			li.page{
				list-style-type: none;
				display: inline;
			}

			.underup {
				border-top: 1px solid #eeeeee;
			}
		</style>
	</head>
	<body>
		<div class="slider-pro" id="my-slider" style="height:80%;">
		    <div class="sp-slides">
		        <!-- Slide 1 -->
		        <div class="sp-slide">
				    <img class="sp-image" src="img/slider 1.jpg"/>
				</div>

		        <!-- Slide 2 -->
		        <div class="sp-slide">
				    <img class="sp-image" src="img/slider 2.jpg"/>
				</div>

		        <!-- Slide 3 -->
		        <div class="sp-slide">
				    <img class="sp-image" src="img/slider 3.jpg"/>
				</div>

				 <!-- Slide 4 -->
		        <div class="sp-slide">
				    <img class="sp-image" src="img/slider 4.jpg"/>
				</div>

				 <!-- Slide 5 -->
		        <div class="sp-slide">
				    <img class="sp-image" src="img/slider 5.jpg"/>
				</div>
		    </div>
		</div>
		<div class="column-1 padding-top-medium padding-bottom-xsmall" style="background-color:#F7CA18;">
			<div class="column-1-2 column-center margin-bottom-medium">
				<h1 class="ralewaybig text-center underline padding-bottom-xsmall">HELLO, WE ARE</h1>
			</div>
		</div>
		<div class="column-1 padding-large" style="background-color:#F2F1EF;">
			<div class="column-1-4 column-center">
				<img src="img/3c polos.png" class="responsive">
			</div>
		</div>
		<div class="column-1">
			<div class="row">
				<a href="what-we-do">
					<div class="column-1-2 padding-medium" style="background-color: #19B5FE;">
						<div class="column-1-8 column-center padding-bottom-xsmall" style="color:#eeeeee;">
							<i class="fa fa-heartbeat fa-5x" style="color:#eeeeee;"></i>
						</div>
						<div class="column-1-2 underup column-center padding-top-xsmall">
							<h2 class="text-center raleway">What we do</h1>
							<p class="text-center raleway" style="margin-top:-15px;">Find out what we do to help</p>
						</div>
					</div>
				</a>
				<a href="what-you-can-do">
					<div class="column-1-2 padding-medium" style="background-color: #2ecc71;">
						<div class="column-1-8 column-center padding-bottom-xsmall" style="color:#eeeeee;">
							<i class="fa fa-heart-o fa-5x" style="color:#eeeeee;"></i>
						</div>
						<div class="column-1-2 underup column-center padding-top-xsmall">
							<h2 class="text-center raleway">What you can do</h1>
							<p class="text-center raleway" style="margin-top:-15px;">Find out what you can do to help</p>
						</div>
					</div>
				</a>
			</div>
		</div>
<!-- 		<div class="column-1">
			<div class="row">
				<a href="what-we-do">
					<div class="column-1-2 padding-medium" style="background-color: #2ecc71;">
						<i class="fa fa-heartbeat fa-5x fa-pull-right fa-border" style="color:#eeeeee;"></i>
						<h1 class="text-right raleway">What we do</h1>
						<p class="text-right raleway" style="margin-top:-15px;">Find out what we do to help</p>
					</div>
				</a>
				<a href="what-you-can-do">
					<div class="column-1-2 padding-medium" style="background-color: #e74c3c;">
						<i class="fa fa-heart-o fa-5x fa-pull-left fa-border"></i>
						<h1 class="raleway">What you can do</h1>
						<p style="margin-top:-15px;" class="raleway">Find out what you can do to help</p>
					</div>
				</a>
			</div>
		</div> -->
		<div class="column-1 padding-large" style="background-color:#F2F1EF;">
			<h1 class="text-center raleway" style="color:#F7CA18;font-size:30px;">FIRST THINGS FIRST</h1>
			<div class="column-1-3 underup column-center" style="color:#F7CA18; border-top:1px solid #F7CA18;"></div>
			<div class="column-1-5 column-center padding-top-xsmall" style="color:#F7CA18; ">
				<img src="img/yelloww.png" class="responsive">
			</div>
			<div class="column-1-5 column-center margin-top-medium" >
				<a href="info" style="text-decoration:none;"><p class="text-center ralewaysmall underall padding-xsmall changey">APA ITU KANKER ?</p></a>
			</div> 
		</div>
		<div class="column-1 padding-top-medium padding-bottom-xsmall" style="background-color:#1abc9c;">
			<div class="column-1-2 column-center margin-bottom-medium">
				<h1 class="ralewaybig text-center underline padding-bottom-xsmall">NEWS</h1>

				<form action="" method="get">
				<div class="column-1-2 column-center input-group input-group-search">
				  	<input type="search" placeholder="Search" name='q'>
					  <span class="input-group-button">
					    <button class="button" type="submit">Search</button>
					  </span>
				</div>

				</form>
			</div>
		</div>
		<div class="column-1 padding-top-xsmall" style="background-color:#ECECEC;">
			<ul class="rig columns-3">
				<?php
					
					 $query = "SELECT * FROM posting";
					 $records_per_page = 6;
					 if (isset($_GET['q'])) {
					 	$query .= " WHERE judul LIKE '%".$_GET['q']."%' OR deskripsi LIKE '%".$_GET['q']."%'";
					 }
				   	 $newquery = $post->paging($query,$records_per_page);
				  	
					 $post->newsHomeView($newquery);
				?>
			</ul>
			<?php $post->pagingLink($query,$records_per_page);?>	
		</div>

		<div class="column-1 padding-top-medium padding-bottom-xsmall" style="background-color:#F64747;">
			<div class="column-1-2 column-center margin-bottom-medium">
				<h1 class="ralewaybig text-center underline padding-bottom-xsmall">VISIT US</h1>
			</div>
		</div>
		<div class="column-1 padding-top-xsmall" style="background-color:#ECECEC;">
			<div class="container margin-bottom-small margin-top-small">
				<h2 class="text-center roboto">RSUD Dr. Moewardi - Ruang Bermain Maya Ananta, bangsal Melati lantai 2</h2>
				<h2 class="text-center roboto margin-top-xsmall">Ingin datang berkunjung ke tempat kami ? Isi form di bawah ini !</h2>
			</div>
			<div class="column-1-5 column-center margin-top-medium padding-bottom-small" style="margin-top:-40px;">
				<a href="form-kunjungan" style="text-decoration:none;"><p class="text-center ralewaysmall underall padding-xsmall change">ISI FORM KUNJUNGAN</p></a>
			</div> 
		</div>
		<div class="column-1 padding-top-medium padding-bottom-xsmall" style="background-color:#BF55EC;">
			<div class="column-1-2 column-center margin-bottom-medium">
				<h1 class="ralewaybig text-center underline padding-bottom-xsmall">CONTACT US</h1>
				<form action="" method="post">
					<fieldset class="padding-left-small padding-right-small" style="border:none">
						<label for="nama" style="color:#eeeeee;">Nama</label>
						<input type="text" id='nama' name="nama" placeholder="Nama" maxlength='50' required>
						<label for="email" style="color:#eeeeee;">Email</label>
						<input type="email" id="email" name="email" placeholder="Email" required>
						<label for="email" style="color:#eeeeee;">Subject</label>
						<input type="text" id="subject" name="subject" placeholder="Subject" maxlength='30'required>
						<label for="message" style="color:#eeeeee;">Message</label>
						<textarea id='message' name='message' cols="30" rows="5" placeholder="Message" required></textarea>
					</fieldset>
					<button type="submit" class="button button-block margin-top-small" name='submit' value="Submit">Submit</button>
				</form>
			</div>
		</div>
		<div class="column-1" style="background-color:#BF55EC;">
			<div class="container">
				<h2 class="text-center roboto underline padding-bottom-small" style="color:#eeeeee;">Email : mayaananta@gmail.com - Line : @OMM8582N</h2>
			</div>
			<div class="column-1-2 column-center padding-top-xsmall padding-left-medium padding-bottom-small">
				<a href="https://twitter.com/childrencancer" class="icon-button fa fa-twitter twitter"><i class="fa fa-twitter icon-twitter"></i><span></span></a>
				<a href="https://www.facebook.com/maya.ananta3c" class="icon-button fa fa-facebook facebook"><i class="fa fa-facebook icon-facebook"></i><span></span></a>
				<a href="https://www.facebook.com/childhoodcancercare" class="icon-button fa fa-facebook-official facebook"><i class="fa fa-facebook-official icon-facebook"></i><span></span></a>
				<a href="https://www.youtube.com/channel/UCTUBZlVYAPjBYHKFo626mmA" class="icon-button fa fa-youtube-play google-plus"><i class="fa fa-youtube-play icon-google-plus"></i><span></span></a>
				<a href="https://www.instagram.com/childhoodcancercare/" class="icon-button fa fa-instagram instagram"><i class="fa fa-instagram icon-instagram"></i><span></span></a>
			</div>
			<span class='roboto' style="color:#eeeeee">Copyright © 2016 Maya Ananta - Childhood Cancer Care</span>
		</div>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery.sliderPro.min.js"></script>
		<script type="text/javascript">
		    jQuery( document ).ready(function( $ ) {
		        $( '#my-slider' ).sliderPro({
		        	arrows:true, 
		        	width:'100%',
		        	buttons: false,
		        	height:450
		        });
		    });
		</script>
	</body>
</html>
<?php }?>