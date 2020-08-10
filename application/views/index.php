<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, shrink-to-fit=yes" />
	<meta name="author" content="<?=APP_AUTHOR;?>" />
	<meta name="description" content="<?=APP_DESCRIPTION;?>" />
	<title>LOKAMEDIA</title>
	<link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico" />
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet" />
	<link href="<?=base_url();?>vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>vendor/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
	<style type="text/css" media="screen">
		html {
			scroll-behavior: smooth;
		}
	</style>
</head>
<body id="page-top">

	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?=base_url();?>assets/img/lokalogo.png" alt="lokomedia logo" class="img-logo"></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About Us</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#why">Why Us</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#service">Our Services</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Carousel -->
	<?php $this->load->view('partials/carousel'); ?>

	<!-- About -->
	<?php $this->load->view('partials/about_us'); ?>

	<!-- Why Us -->
	<?php $this->load->view('partials/why_us'); ?>

	<!-- OUR SERVICES -->
	<?php $this->load->view('partials/our_services'); ?>

	<!-- Contact-->
	<?php $this->load->view('partials/contact'); ?>
	

	<!-- Footer-->
	<footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Loka Media 2020</div></footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="<?=base_url();?>assets/js/scripts.js"></script>
	<script src="<?=base_url();?>assets/js/smoothscroll.js"></script>
	<script src="<?=base_url();?>vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			speed: 2000,
			lazy: true,
			slidesPerView: 1,
			centerSlides: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});

		$(document).ready(() => {
			$(".owl-carousel").owlCarousel({
				items: 5,
				margin: 0,
				autoWidth: true,
				responsiveClass: true,
				center: true,
				loop: true,
				nav: false,
				animateOut: 'slideOutDown',
				animateIn: 'flipInX',
				stagePadding: 20,
				smartSpeed: 350,
				dots: true,
				lazyLoad: true,
				autoplay: true,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
			});
		});
	</script>
</body>
</html>
