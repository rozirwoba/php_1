<?php
$nama = "Rozir Wobari";
$no_hp = "085155334876";
$email = "email@rozirwobari.my.id";
$website = "rozirwobari.my.id";
$alamat = "Kota Bandung, Jawa Barat";
$deskripsi = "Saya adalah seorang mahasiswa informatika di salah satu universitas di Bandung, Jawa Barat. Saya berasal dari Cilegon, Banten. Saya memiliki ketertarikan yang besar terhadap bidang teknologi informasi, terutama di bidang pengembangan perangkat lunak. Saya juga memiliki hobi membuat konten kreatif, seperti video, foto, dan game.";
?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portfolio | Rozir Wobari</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(https://rozirwobari.my.id/assets/img/1706890857_f1c28f28b14f76f9178d.jpg);"></div>
							<h1><span><?= $nama ?></span></h1>
							<h3><span>Web Developer</span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-github"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<ul class="info">
						<li><span class="first-block">Nama </span><span class="second-block">: <?= $nama ?></span></li>
						<li><span class="first-block">Nomor HP </span><span class="second-block">: <?= $no_hp ?></span></li>
						<li><span class="first-block">Email </span><span class="second-block">: <?= $email ?></span></li>
						<li><span class="first-block">Website <a href="https://rozirwobari.my.id" class="linked" target="_blank"></span><span class="second-block linked">: <?= $website ?></span></a> </li>
						<li><span class="first-block">Alamat </span><span class="second-block">: <?= $alamat ?></span></li>
					</ul>
				</div>	
				<div class="col-md-7">
					<h2>Hello There!</h2>
					<p><?= $deskripsi ?></p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-github"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; Tugas PHP Dasar 1 | Rozir Wobari</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fa-solid fa-up-long"></i></a>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://kit.fontawesome.com/111b8c6336.js" crossorigin="anonymous"></script>
	</body>
</html>

