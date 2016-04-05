<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/turret.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css">
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
			  font: 14px/1 'Lato', sans-serif;
			  color: #eeeeee;
			}

			h1 {
			  font-weight: 400;
			  text-align: center;
			  font-family:'Raleway';
			  color: #eeeeee;
			}

			h2 {
				font-family:'Lato';
				color:#eeeeee;
			}

			h3 {
				font-family:'Lato';
				color:#eeeeee;
			}

			ol li {
				font-family:'Lato';
				color:#eeeeee;
			}

			p {
			  margin: 0 0 20px;
			  line-height: 1.5;
			  color: #eeeeee;
			  font-family: 'Lato';
			}

			
			.underline {
				border:2px solid;
			}

			.raleway {
				font-family: 'Raleway';
				font-size: 50px;
				color:#eeeeee;
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

			a {
				text-decoration:none;
				color:#eeeeee;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			a:hover {
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			.active {
			    text-decoration: none;
			    position: relative;
			    color: #272727;
			}
			#menu-center {
				z-index: 500;
			}
			.fixed {
			    position:fixed;
			    top:0;
			}
			.under {
				border-bottom: 2px solid;
				border-top:2px solid;
				font-family: 'Lato';
			}
			.quoteeleft {
				margin: 0px 0px;
				padding: 0px 30px;
				font-weight: 300;
				color: #eeeeee;
				border: solid #DADFE1;
				border-width: 0px 0px 0px 5px;
				text-align: justify;
			}
			.unders {
				border-bottom: 2px solid;
			}
			.undersdotted {
				border-bottom:5px dotted;
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
				color:#BF55EC;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			.changeblue {
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			.changeblue:hover {
				background-color: #eeeeee;
				color:#59ABE3;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
			.changegreen {
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}

			.changegreen:hover {
				background-color: #eeeeee;
				color:#00B16A;
				transition:0.5s ease-in-out;
				webkit-transition:0.5s ease-in-out;
				moz-transition:0.5s ease-in-out;
			}
		</style>
	</head>
	<body>
		<div class="column-1" style="background-color:#BF55EC;">
			<div class="column-1-2 column-center padding-medium" id="title">
				<h1 class="text-center raleway underline padding-medium">WHAT YOU CAN DO</h1>
			</div>
			<div class="column-1-6 column-center" style="margin-top:-40px;">
				<a href="/project3c" style="text-decoration:none;"><p class="text-center ralewaysmall underline padding-xsmall change">HOME</p></a>
			</div> 
		</div>
		<div class="column-1" style="background-color:#F9BF3B;" id="menu-center">
			<div class="row">
				<a href="#1" id="tab1"><div class="column-1-2 underline padding-small text-center">DONATE</div></a>
				<a href="#2" id="tab2"><div class="column-1-2 underline padding-small text-center">VOLUNTEER</div></a>
			</div>
		</div>
		<div class="column-1 padding-small" id="1" style="background-color:#59ABE3;">
			<div class="column-1-3 column-center padding-small">
				<h1 class="under padding-xsmall">DONATE</h1>
			</div>
			<div class="column-1 margin-top-xsmall column-center">
				<h2 class="text-center">Ingin memberikan donasi ? Isi form di bawah ini ! </h2>
				<div class="column-1-3 column-center margin-top-medium padding-bottom-small" >
					<a href="form-donasi" style="text-decoration:none;"><p class="text-center ralewaysmall underline padding-xsmall changeblue">ISI FORM DONASI</p></a>
				</div> 
			</div>
		</div>
		<div class="column-1 padding-small" id="2" style="background-color:#00B16A;">
			<div class="column-1-3 column-center padding-small">
				<h1 class="under padding-xsmall">VOLUNTEER</h1>
			</div>
			<div class="container">
				<div class="column-1-4 undersdotted column-center">
					<h2 class="text-center">CAMP</h2>
				</div>
				<div class="column-1-2 margin-top-small column-center">
					<p class="text-justify">Camp merupakan rangkaian kegiatan yang ditujukan kepada para volunteer untuk menjadi anggota tetap 3C. Camp ini 
					bertujuan selain untuk menumbuhkan jiwa volunteerism, juga untuk menumbuhkan rasa kekeluargaan di antara volunteer 3C. Camp diadakan 1 tahun 
					sekali setelah penggantian kepengurusan 3C. Camp berisi kegiatan-kegiatan yang membutuhkan kerjasama tim, seperti game kelompok, pentas seni 
					serta diskusi. Pada dasarnya kegiatan camp ini untuk menanamkan 5 pilar volunteerism, yaitu kebersamaan, pengorbanan, kesetiaan,metamorfosis 
					dan kepemimpinan.</p>
				</div>
				<div class="column-1 margin-top-small column-center">
					<h2 class="text-center">Ingin bergabung menjadi volunteer ? Isi form di bawah ini ! </h2>
					<div class="column-1-3 column-center margin-top-medium padding-bottom-small">
						<a href="form-volunteer" style="text-decoration:none;"><p class="text-center ralewaysmall underline padding-xsmall changegreen">ISI FORM VOLUNTEER</p></a>
					</div>
				</div> 
			</div>
			</div>
		</div>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script>
			$(document).ready(function () {
			    $(document).on("scroll", onScroll);
			    
			    //smoothscroll
			    $('a[href^="#"]').on('click', function (e) {
			        e.preventDefault();
			        $(document).off("scroll");
			        
			        $('a').each(function () {
			            $(this).removeClass('active');
			        })
			        $(this).addClass('active');
			      
			        var target = this.hash,
			            menu = target;
			        $target = $(target);
			        $('html, body').stop().animate({
			            'scrollTop': $target.offset().top+10
			        }, 500, 'swing', function () {
			            window.location.hash = target;
			            $(document).on("scroll", onScroll);
			        });
			    });
			});

			function onScroll(event){
			    var scrollPos = $(document).scrollTop();
			    $('#menu-center a').each(function () {
			        var currLink = $(this);
			        var refElement = $(currLink.attr("href"));
			        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
			            $('#menu-center div a').removeClass("active");
			            currLink.addClass("active");
			        }
			        else{
			            currLink.removeClass("active");
			        }
			    });
			}
		</script>
		<script>
			var num = 200; //number of pixels before modifying styles

			$(window).bind('scroll', function () {
			    if ($(window).scrollTop() > num) {
			        $('#menu-center').addClass('fixed');
			    } else {
			        $('#menu-center').removeClass('fixed');
			    }
			});
		</script>
	</body>
</html>