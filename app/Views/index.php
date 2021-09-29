<!DOCTYPE html>
<html class="no-js vlt-is--custom-cursor" lang="en">

<head>
	<meta charset="utf-8">
	<title>Xunny | IT Developer Indonesia</title>
	<meta name="description" content="Kami adalah perusahaan programmer yang memiliki spesialisasi dalam mobile, melingkupi android dan iOS, dan web development. Dengan satu visi, untuk membantu mengembangkan UMKM di Indonesia, kami akan senantiasa memberikan anda produk custom dengan kualitas terbaik.">
	<meta name='robots' content='follow, index'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="assets/img/root/favicon.png">
	<link rel="stylesheet" href="assets/css/framework/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/Inter/style.css">
	<link rel="stylesheet" href="assets/css/vlt-plugins.min.css">
	<link rel="stylesheet" href="assets/css/vlt-main.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<meta name="author" content="Xunny.id">
	<script>var idArray = [];</script>
	<style>
		#snackbar {
			visibility: hidden; /* Hidden by default. Visible on click */
			min-width: 250px; /* Set a default minimum width */
			background-color: #333; /* Black background color */
			color: #fff; /* White text color */
			text-align: center; /* Centered text */
			border-radius: 2px; /* Rounded borders */
			padding: 16px; /* Padding */
			position: fixed; /* Sit on top of the screen */
			z-index: 1200; /* Add a z-index if needed */
			left: 50%; /* Center the snackbar */
			transform:translateX(-50%);
			bottom: 30px; /* 30px from the bottom */
		}
		
		/* Show the snackbar when clicking on a button (class added with JavaScript) */
		#snackbar.show {
			visibility: visible;
			-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
			animation: fadein 0.5s, fadeout 0.5s 2.5s;
		}
		
		/* Animations to fade the snackbar in and out */
		@-webkit-keyframes fadein {
			from {bottom: 0; opacity: 0;}
			to {bottom: 30px; opacity: 1;}
		}
		
		@keyframes fadein {
			from {bottom: 0; opacity: 0;}
			to {bottom: 30px; opacity: 1;}
		}
		
		@-webkit-keyframes fadeout {
			from {bottom: 30px; opacity: 1;}
			to {bottom: 0; opacity: 0;}
		}
		
		@keyframes fadeout {
			from {bottom: 30px; opacity: 1;}
			to {bottom: 0; opacity: 0;}
		}
	</style>
</head>

<body class=" animsition">
	<header class="vlt-header">
		<div class="vlt-navbar vlt-navbar--main vlt-navbar--fixed">
			<div class="vlt-navbar-background"></div>
			<div class="vlt-navbar-inner">
				<div class="vlt-navbar-inner--left">
					<a class="vlt-navbar-logo" href="#home">
						<img class="black" src="assets/img/root/logo-black.webp" alt="Xunny Logo Text">
						<img class="white" src="assets/img/root/logo-white.webp" alt="Xunny Logo Text"></a>
					<nav class="vlt-navbar-contacts d-none d-md-block">
						<ul>
							<li><a href="tel:+6285290000241">+6285290000241</a></li>
							<li class="sep">/</li>
							<li><a href="mailto:hello@XUNNY.ID">HELLO@XUNNY.ID</a></li>
						</ul>
					</nav>
				</div>
				<div class="vlt-navbar-inner--right">
					<div class="d-flex align-items-center">
						<a class="vlt-menu-burger js-offcanvas-menu-open" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
								<line x1="3" y1="12" x2="21" y2="12" />
								<line x1="3" y1="6" x2="21" y2="6" />
								<line x1="3" y1="18" x2="21" y2="18" /></svg>
							</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="vlt-offcanvas-menu">
		<div class="vlt-offcanvas-menu__header">
			<a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
					<line x1="18" y1="6" x2="6" y2="18" />
					<line x1="6" y1="6" x2="18" y2="18" /></svg></a>
		</div>
		<nav class="vlt-offcanvas-menu__navigation">
			<ul class="sf-menu">
				<li data-menuanchor="Home"><a href="#Home">Home</a></li>
				<li data-menuanchor="Products"><a href="#Products">Products</a></li>
				<li data-menuanchor="Experience"><a href="#Experience">Experience</a></li>
				<li data-menuanchor="Skills"><a href="#Skills">Skills</a></li>
				<li data-menuanchor="ProductDetail"><a href="#ProductDetail">Product Detail</a></li>
				<li data-menuanchor="Services"><a href="#Services">Services</a></li>
				<li data-menuanchor="Testimonials"><a href="#Testimonials">Testimonials</a></li>
				<li data-menuanchor="Portfolio"><a href="#Portfolio">Portfolio</a></li>
				<li data-menuanchor="Contact"><a href="#Contact">Contact</a></li>
				<li data-menuanchor="Blogs"><a href="#Blogs">Blogs</a></li>
			</ul>
		</nav>
		<div class="vlt-offcanvas-menu__footer">
			<div class="vlt-offcanvas-menu__socials">
				<a href="https://www.facebook.com/todayisXunny" target="_blank">Fb.</a>
				<a href="https://www.behance.net/xunnywebdev" target="_blank">Bē.</a>
				<a href="https://www.instagram.com/xunny.webdev/" target="_blank">Ig.</a>
			</div>
			<!--Copyright-->
			<div class="vlt-offcanvas-menu__copyright">
				<p>&copy; 2021 Copiright.<br>All rights reserved.</p>
			</div>
		</div>
	</div>
	<div class="vlt-site-overlay"></div>
	<div class="vlt-fixed-socials">
		<a href="https://www.facebook.com/todayisXunny" target="_blank">Fb.</a>
		<a href="https://www.behance.net/xunnywebdev" target="_blank">Bē.</a>
		<a href="https://www.instagram.com/xunny.webdev/" target="_blank">Ig.</a>
	</div>
	<main class="vlt-main">
		<div class="vlt-fullpage-slider" data-loop-top="" data-loop-bottom="" data-speed="800">
			<div class="vlt-section pp-scrollable" data-anchor="Home" data-brightness="dark" style="background-image: url(assets/img/root/red-background.jpg);">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-fade-in-left vlt-custom--1451" style="background-image: url(assets/img/root/plus-dark-pattern.webp); transition-duration: 1s;"></div>
							<div class="vlt-particle d-none d-xl-block vlt-fade-in-right vlt-custom--1512" style="background-image: url(assets/img/root/elipse-home-slide.webp); transition-duration: 1.5s; transition-delay: 300ms;"></div>
							<div class="vlt-particle vlt-custom--4124" style="background-image: url(assets/img/attachment-01.webp);"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-7 offset-lg-1">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<h1 class="vlt-display-1 has-white-color">XUNNY.ID | WEB DEVELOPER</h1>
										<div class="vlt-gap-10"></div>
										<h2 class="h2 vlt-large-heading text-white">Kami Merubah Ide Anda Menjadi Aplikasi</h2>
										<div class="vlt-gap-40"></div>
										<div class="vlt-gap-40"></div>
										<a class="vlt-link has-white-color" href="#Portfolio">Lihat Portfolio</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Products" data-brightness="light">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(assets/img/root/plus-light-pattern.png); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(assets/img/root/elipse-light.png); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-2 offset-lg-1 d-none d-lg-block">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<div class="vlt-counter-up" data-ending-number="4" data-animation-speed="1000" data-delimiter="">
											<span class="counter">0</span><sup>+</sup>
										</div>
										<div class="vlt-gap-40"></div>
										<p class="h6">Tahun <br>Pengalaman</p>
									</div>
								</div>
								<div class="col-lg-8 col-md-12">
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h4>Kami Menyediakan Solusi Digital Untuk Bisnis. Dengan Spesialisasi Dalam <span class="has-first-color">Aplikasi Web dan Mobile.</span></h4>
									</div>
									<div class="vlt-gap-70"></div>
									<div class="row">
										<div class="col-md-6">
											<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
												<div class="vlt-services">
													<h5 class="vlt-services__title"><a href="#">Website Development</a>
													</h5>
													<p class="vlt-services__text">Kami memberikan website dengan kualitas tinggi serta menggunakan teknologi terbaik.</p>
												</div>
											</div>
											<div class="vlt-gap-40"></div>
										</div>
										<div class="col-md-6">
											<div class="vlt-animated-block" style="animation-delay:300ms; animation-duration:700ms;">
												<div class="vlt-services">
													<h5 class="vlt-services__title"><a href="#">UI/UX Design</a>
													</h5>
													<p class="vlt-services__text">Rancangan konsep serta langkah untuk menjaga agar suatu produk menjadi tepat fungsi.</p>
												</div>
											</div>
											<div class="vlt-gap-40"></div>
										</div>
										<div class="col-md-6">
											<div class="vlt-animated-block" style="animation-delay:400ms; animation-duration:700ms;">
												<div class="vlt-services">
													<h5 class="vlt-services__title"><a href="#">App Development</a>
													</h5>
													<p class="vlt-services__text">Pengembangan aplikasi dengan alur custom untuk memecahkan	masalah dalam suatu unit usaha.</p>
												</div>
											</div>
											<div class="vlt-gap-40--sm"></div>
										</div>
										<div class="col-md-6">
											<div class="vlt-animated-block" style="animation-delay:500ms; animation-duration:700ms;">
												<div class="vlt-services">
													<h5 class="vlt-services__title"><a href="#">Quality Assurance</a>
													</h5>
													<p class="vlt-services__text">Menjaga kualitas dan performa produk dengan mencegah tindakan	yang beresiko.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Experience" data-brightness="dark">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__ken-burn-background"><img src="assets/img/attachment-02.jpg" alt=""></div>
						<div class="container">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<div class="d-block d-md-flex align-items-center justify-content-between">
											<div class="vlt-gap-30--sm"></div>
											<div class="vlt-timeline-slider-controls"><span class="prev">🡐</span><span class="pagination"></span><span class="next">🡒</span></div>
										</div>
									</div>
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<div class="vlt-timeline-slider">
											<div class="swiper-container">
												<div class="swiper-wrapper">
													<div>
														<div class="vlt-timeline-item">
															<div class="row justify-content-center">
																<div class="col-lg-8 col-md-12 col-sm-10">
																	<h4 class="has-white-color">Langkah Kerja Kami</h4>
																	<div class="vlt-gap-50"></div>
																</div>
															</div>
															<div class="row justify-content-center">
																<div class="col-lg-4 col-md-6 col-sm-10 d-none d-sm-block">
																	<img src="assets/img/experience-01.webp" alt="Running track" class="w-100">
																</div>
																<div class="col-lg-4 col-md-6 col-sm-10">
																	<h5 class="vlt-timeline-item__title"><span class="has-first-color">Konsultasi dan Riset</span></h5>
																	<div class="vlt-gap-30"></div>
																	<p class="text-white">Kami selalu memulai dengan memahami masalah anda lebih dalam. Menghasilkan solusi yang efektif dan efisien diperlukan kejelasan masalah dan pendekatan berbasis data.</p>
																</div>
															</div>
														</div>
													</div>
													<div>
														<div class="vlt-timeline-item">
															<div class="row justify-content-center">
																<div class="col-lg-8 col-md-12 col-sm-10">
																	<h4 class="has-white-color">Langkah Kerja Kami</h4>
																	<div class="vlt-gap-50"></div>
																</div>
															</div>
															<div class="row justify-content-center">
																<div class="col-lg-4 col-md-6 col-sm-10 d-none d-sm-block">
																	<img src="assets/img/experience-02.webp"  alt="Problem solving illustration" class="w-100">
																</div>
																<div class="col-lg-4 col-md-6 col-sm-10">
																	<h5 class="vlt-timeline-item__title"><span class="has-first-color"><i>Problem Solving</i></span></h5>
																	<div class="vlt-gap-30"></div>
																	<p class="text-white">Perumusan solusi bedasarkan hasil temuan dari tim ahli kami. Sesuatu yang selalu kami tanamkan adalah solusi yang kami tawarkan adalah dibuat dan diformulasikan khusus untuk anda dan hanya anda.</p>
																</div>
															</div>
														</div>
													</div>
													<div>
														<div class="vlt-timeline-item">
															<div class="row justify-content-center">
																<div class="col-lg-8 col-md-12 col-sm-10">
																	<h4 class="has-white-color">Langkah Kerja Kami</h4>
																	<div class="vlt-gap-50"></div>
																</div>
															</div>
															<div class="row justify-content-center">
																<div class="col-lg-4 col-md-6 col-sm-10 d-none d-sm-block">
																	<img src="assets/img/experience-03.webp" alt="Person using application" class="w-100">
																</div>
																<div class="col-lg-4 col-md-6 col-sm-10">
																	<h5 class="vlt-timeline-item__title"><span class="has-first-color">Implementasi</span></h5>
																	<div class="vlt-gap-30"></div>
																	<p class="text-white">Langkah terakhir adalah memastikan bahwa aplikasi dan solusi kami dapat digunakan dengan baik oleh anda dan seluruh anggota organisasi anda.</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vlt-gap-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Skills" data-brightness="light">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(assets/img/root/plus-light-pattern.webp); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(assets/img/root/elipse-light.webp); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-4 offset-lg-1">
									<div class="vlt-slide-photo">
										<div class="vlt-slide-photo__inside"><img src="assets/img/attachment-07.webp" alt="Sample running application"></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-bottom--small has-border-radius has-box-shadow" style="top: -50px; right: -40px; width: 100px; transition-delay: 300ms;">
											<img src="assets/img/root/parallax-particle-01.webp" alt="Media particle ornament"></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-bottom--small has-border-radius has-box-shadow" style="top: 40px; left: -30px; width: 80px; transition-delay: 600ms;">
											<img src="assets/img/root/parallax-particle-02.webp" alt="Application particle ornament"></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-left--small has-border-radius has-box-shadow" style="left: 30px; bottom: -50px; width: 100px; transition-delay: 900ms;">
											<img src="assets/img/root/parallax-particle-03.webp" alt="Desktop particle ornament"></div>
										<div class="vlt-slide-photo__particle vlt-fade-in-left--small negative-z-index" style="right: -40px; bottom: -30px; width: 290px; transition-delay: 1.2s;">
											<img src="assets/img/root/plus-light-pattern.webp" alt="Plus light pattern"></div>
									</div>
									<div class="vlt-gap-100--md"></div>
								</div>
								<div class="col-lg-5 offset-lg-1">
									<!--Animated Block-->
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<h4>Kami Selalu Mengimplementasikan <span class="has-first-color">Teknologi Pengembangan Terkini</span>.</h4>
										<div class="vlt-gap-20"></div>
										<p>Perubahan dan pembaharuan didalam industri teknologi kususnya pengembangan web sangatlah cepat. Tanpa kemampuan untuk mengikuti tempo perubahan dan mengambil langkah yang sesuai, maka bisa dipastikan produk digital yang dihasilkan akan cepat tertinggal.</p>
										<ul class="about-ul">
											<li>
												<img src="assets/img/Update.webp" alt="Better technology icon" />
												Better Tech 
											</li>
											<li>
												<img src="assets/img/Phone.webp" alt="Better quality icon" />
												Better Quality
											</li>
										</ul>
									</div>
									<div class="vlt-gap-50"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="ProductDetail" data-brightness="dark">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__ken-burn-background"><img src="assets/img/attachment-03.webp" alt="Product detail background"></div>
						<div class="vlt-project-showcase-slider d-block d-lg-none">
							<div class="container">
								<div class="swiper-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="vlt-work">
												<div class="vlt-work-thumbnail"><img src="assets/img/portfolio-01.webp" alt="Web development icon"></div>
												<div class="vlt-work-content">
													<header class="vlt-work-header">
														<div class="vlt-work-meta">Website // portofolio //  company profile // online shop</div>
														<h3 class="vlt-work-title">Web Developent</h3>
													</header>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="vlt-work">
												<div class="vlt-work-thumbnail"><img src="assets/img/portfolio-02.webp" alt="Mobile and web application development icon"></div>
												<div class="vlt-work-content">
													<header class="vlt-work-header">
														<div class="vlt-work-meta">Web app // android app // ios app //  hybrid app</div>
														<h3 class="vlt-work-title">App Developent</h3>
													</header>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="vlt-work">
												<div class="vlt-work-thumbnail"><img src="assets/img/portfolio-03.webp" alt="Design UI and UX icon"></div>
												<div class="vlt-work-content">
													<header class="vlt-work-header">
														<div class="vlt-work-meta">App flow // graphic // layout //  user-friendly UI</div>
														<h3 class="vlt-work-title"><a href="#">UI/UX Design</a></h3>
													</header>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="vlt-work">
												<div class="vlt-work-thumbnail"><img src="assets/img/portfolio-04.webp" alt="Quality assurance icon"></div>
												<div class="vlt-work-content">
													<header class="vlt-work-header">
														<div class="vlt-work-meta">Performance // scalability // functional</div>
														<h3 class="vlt-work-title"><a href="#">Quality Assurance</a></h3>
													</header>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vlt-project-showcase d-none d-lg-flex">
							<ul class="vlt-project-showcase__items">
								<li class="vlt-project-showcase__item">
									<h3 class="vlt-project-showcase__item__title">Web Developent</h3><span class="vlt-project-showcase__item__category">Website // portofolio //  company profile // online shop</span>
								</li>
								<li class="vlt-project-showcase__item">
									<h3 class="vlt-project-showcase__item__title">App Developent</h3><span class="vlt-project-showcase__item__category">Web app // android app // ios app //  hybrid app</span>
								</li>
								<li class="vlt-project-showcase__item">
									<h3 class="vlt-project-showcase__item__title">UI/UX Design</h3><span class="vlt-project-showcase__item__category">App flow // graphic // layout //  user-friendly UI</span>
								</li>
								<li class="vlt-project-showcase__item">
									<h3 class="vlt-project-showcase__item__title">Quality Assurance</h3><span class="vlt-project-showcase__item__category">Performance // scalability // functional</span>
								</li>
							</ul>
							<div class="vlt-project-showcase__images">
								<div class="vlt-project-showcase__image"><img src="assets/img/portfolio-01.webp" alt="Web development icon"></div>
								<div class="vlt-project-showcase__image"><img src="assets/img/portfolio-02.webp" alt="Mobile and web application development icon"></div>
								<div class="vlt-project-showcase__image"><img src="assets/img/portfolio-03.webp" alt="Design UI and UX icon"></div>
								<div class="vlt-project-showcase__image"><img src="assets/img/portfolio-04.webp" alt="Quality assurance icon"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Services" data-brightness="light">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(assets/img/root/elipse-light.webp); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-lg-5 offset-lg-1">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<h4>Kami Melakukan Yang Terbaik Untuk <span class="has-first-color">Kemajuan Anda</span>.</h4>
										<div class="vlt-gap-20"></div>
										<p>Hubungan kami dengan klien tidak berhenti pada saat produk telah diberikan.</p>
									</div>
									<div class="vlt-gap-50"></div>
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<div class="vlt-award-item">
											<div class="vlt-award-item__logo">
												<img src="assets/img/icon-01.webp" alt="1-On-1 consultation icon">
											</div>
											<div class="vlt-award-item__content">
												<h6>Konsultasi 1-on-1</h6>
												<p>Memberi masukan untuk peningkatan kinerja anda dengan bantuan teknologi.</p>
											</div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
										<div class="vlt-award-item">
											<div class="vlt-award-item__logo">
												<img src="assets/img/icon-02.webp" alt="Email support icon">
											</div>
											<div class="vlt-award-item__content">
												<h6>Dukungan Email</h6>
												<p>Memastikan bahwa anda dapat menggunakan produk kami di setiap saat.</p>
											</div>
										</div>
									</div>
									<div class="vlt-gap-30"></div>
									<div class="vlt-animated-block" style="animation-delay:300ms; animation-duration:700ms;">
										<div class="vlt-award-item">
											<div class="vlt-award-item__logo">
												<img src="assets/img/icon-03.webp" alt="Scalability icon">
											</div>
											<div class="vlt-award-item__content">
												<h6>Scale Up !</h6>
												<p>Kami memastikan bahwa produk kami dapat dikembangkan tanpa batas.</p>
											</div>
										</div>
									</div>
									<div class="vlt-gap-100--md"></div>
								</div>
								<div class="col-lg-4 offset-lg-1">
									<img src="assets/img/video.webp" alt="Services icon" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Testimonials" data-brightness="dark">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__ken-burn-background"><img src="assets/img/attachment-04.webp" alt="Testimonial background"></div>
						<div class="container">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<div class="d-block d-md-flex align-items-center justify-content-between">
											<h1 class="has-white-color">Testimonials</h1>
											<div class="vlt-gap-30--sm"></div>
											<div class="vlt-testimonial-slider-controls"><span class="prev">🡐</span><span class="pagination"></span><span class="next">🡒</span></div>
										</div>
									</div>
									<div class="vlt-gap-50"></div>
									<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
										<div class="vlt-testimonial-slider">
											<div class="swiper-container">
												<div class="swiper-wrapper">
													<div class="vlt-testimonial-item" style="background: #FFB117 url(assets/img/root/cartographer.webp) repeat;">
														<div class="vlt-testimonial-item__avatar"><img src="assets/img/avatar-01.webp" alt="Michael's avatar"></div>
														<div class="vlt-testimonial-item__content">
															<p>Merubah sistem perusahaan yang sudah bertahun tahun dilakukan secara konvensional tidaklah mudah. XUNNY mampu menuntun kami bertransisi dengan baik. Aplikasi yang dibuat, disesuaikan dengan kebutuhan serta kondisi SDM kami.</p>
															<div class="vlt-testimonial-item__meta">
																<h6>Michael</h6><span>Alpha Construction Management</span>
															</div>
														</div>
													</div>
													<div class="vlt-testimonial-item" style="background: #FFB117 url(assets/img/root/cartographer.webp) repeat;">
														<div class="vlt-testimonial-item__avatar"><img src="assets/img/avatar-02.webp" alt="Andrew's avatar"></div>
														<div class="vlt-testimonial-item__content">
															<p>Melebihi ekspektasi saya. XUNNY.ID memberikan beberapa langkah ekstra untuk memastikan website saya bekerja dengan baik. Harga yang ditawarkan serupa dengan kompetitor, namun fitur yang saya terima jauh lebih banyak.</p>
															<div class="vlt-testimonial-item__meta">
																<h6>Andrew</h6><span>dutasaptaenergi.com</span>
															</div>
														</div>
													</div>
													<div class="vlt-testimonial-item" style="background: #FFB117 url(assets/img/root/cartographer.webp) repeat;">
														<div class="vlt-testimonial-item__avatar"><img src="assets/img/avatar-03.webp" alt="Mimi's avatar"></div>
														<div class="vlt-testimonial-item__content">
															<p>Yang saya terima bukan hanya aplikasi, tapi juga best practice dalam bisnis. XUNNY.ID memahami betul tantangan dalam bisnis yang saya jalani. Sehingga, solusi aplikasi yang ditawarkan sangat membantu saya.</p>
															<div class="vlt-testimonial-item__meta">
																<h6>Mimi</h6><span>Store Management App</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Portfolio" data-brightness="light">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(assets/img/root/plus-light-pattern.webp); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(assets/img/root/elipse-light.webp); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<div class="d-block d-md-flex align-items-center justify-content-between">
											<h3>Portfolio</h3>
										</div>
									</div>
									<div class="vlt-gap-50"></div>
									<div class="row">
										<div class="col-md-4">
											<div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
												<article class="vlt-post">
													<div class="vlt-post-thumbnail"><img src="assets/img/attachment-08.webp" alt="Construction Management Application"><a class="vlt-post-thumbnail__link" href="#"></a>
													</div>
													<div class="vlt-post-content">
														<header class="vlt-post-header">
															<h3 class="vlt-post-title">ALPHA : Aplikasi Manajemen Konstruksi</h3>
														</header>
													</div>
												</article>
											</div>
											<div class="vlt-gap-40--sm"></div>
										</div>
										<div class="col-md-4">
											<div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
												<!--Blog Post-->
												<article class="vlt-post">
													<div class="vlt-post-thumbnail"><img src="assets/img/attachment-09.webp" alt="Store Management Application Portfolio"><a class="vlt-post-thumbnail__link" href="#"></a>
													</div>
													<div class="vlt-post-content">
														<header class="vlt-post-header">
															<h3 class="vlt-post-title">SMA : Aplikasi Manajemen Toko</h3>
														</header>
													</div>
												</article>
											</div>
											<div class="vlt-gap-40--sm"></div>
										</div>
										<div class="col-md-4">
											<div class="vlt-animated-block" style="animation-delay:300ms; animation-duration:700ms;">
												<article class="vlt-post">
													<div class="vlt-post-thumbnail"><img src="assets/img/attachment-10.webp" alt="Website Upgrade Portfolio"><a class="vlt-post-thumbnail__link" href="#"></a>
													</div>
													<div class="vlt-post-content">
														<header class="vlt-post-header">
															<h3 class="vlt-post-title">Duta Sapta Energi: Pembaharuan Website</h3>
														</header>
													</div>
												</article>
											</div>
										</div>
										<div class="col-md-4 mt-3">
											<div class="vlt-animated-block" style="animation-delay:300ms; animation-duration:700ms;">
												<article class="vlt-post">
													<div class="vlt-post-thumbnail"><img src="assets/img/attachment-11.webp" alt="Website Upgrade Portfolio"><a class="vlt-post-thumbnail__link" href="#"></a>
													</div>
													<div class="vlt-post-content">
														<header class="vlt-post-header">
															<h3 class="vlt-post-title">Universal Clove: Desain Ulang Website</h3>
														</header>
													</div>
												</article>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Contact" data-brightness="dark">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__ken-burn-background"><img src="assets/img/attachment-04.webp" alt="Contact background"></div>
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(assets/img/root/plus-light-pattern.webp); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(assets/img/root/elipse-light.webp); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<h1 class="d-block has-white-color">Kontak</h1>
									<div class="vlt-gap-30--sm"></div>
									<p class='h4 d-block text-white'>Ada yang ingin anda tanyakan? Jangan sungkan untuk kontak kami!</p>
									<hr>
									<form id='contactForm' method='POST'>
										<label class='text-white'>Name</label>
										<input name='name' type='text' required id='name'>

										<label class='text-white'>Email</label>
										<input name='email' type='email' required id='email'>

										<label class='text-white'>Pesan</label>
										<textarea  
											style='resize:none'
											name='message' 
											rows='5'
											type='text' 
											required
											id='message'></textarea>
										<br>

										<button id='submitButton' type='submit' class='vlt-btn'>Submit</button>
									</form>
								</div>
							</div>
						</div>
						<div id="snackbar">Terima kasih telah menghubungi kami. Kami akan segera kontak anda kembali.</div>
					</div>
				</div>
			</div>
			<div class="vlt-section pp-scrollable" data-anchor="Blogs" data-brightness="light">
				<div class="vlt-section__vertical-align">
					<div class="vlt-section__content">
						<div class="vlt-section__particles">
							<div class="vlt-particle vlt-custom--1259 vlt-fade-in-right" style="background-image: url(assets/img/root/plus-light-pattern.webp); animation-delay: 750ms;"></div>
							<div class="vlt-particle vlt-custom--2355 vlt-fade-in-left" style="background-image: url(assets/img/root/elipse-light.webp); animation-delay: 500ms;"></div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
										<div class="d-block d-md-flex align-items-center justify-content-between">
											<h3>Our Latest Blogs</h3>
										</div>
									</div>
									<div class="vlt-gap-50"></div>
									<div class="row">
										<?php foreach($blogs as $blog){ ?>
											<div class="col-md-4 d-flex align-items-stretch">
												<div class="vlt-animated-block card p-3"
													style="animation-delay:100ms; animation-duration:700ms;"
													id='blog-<?= $blog['id'] ?>'>
													<article class="vlt-post">
														<div class="vlt-post-thumbnail"><img src="assets/blog/<?= $blog['id'] ?>.webp" alt="<?= $blog['title'] ?> blog thumbnail"><a class="vlt-post-thumbnail__link" href="#"></a>
														</div>
														<div class="vlt-post-content">
															<header class="vlt-post-header">
																<h3 class="vlt-post-title"><?= $blog['title'] ?></h3>
																<h6 style='font-size:1rem;'><?= $blog['subtitle'] ?></h6>
																<br>
																<p><?= date_format(date_create($blog["created_date"]), "d M Y") ?></p>
															</header>
														</div>
													</article>
												</div>
												<div class="vlt-gap-40--sm"></div>
											</div>
											<script>
												idArray.push({
													id: <?= $blog['id'] ?>,
													title: "<?= $blog['title'] ?>"
												});
											</script>
										<?php } ?>
										<div class='col-12 mt-3'>
											<a href='<?= base_url("Blogs") ?>'>View more</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Progress Bar-->
			<ul class="vlt-fullpage-slider-progress-bar">
				<li data-menuanchor="Home"></li>
				<li data-menuanchor="Products"></li>
				<li data-menuanchor="Experience"></li>
				<li data-menuanchor="Skills"></li>
				<li data-menuanchor="ProductDetail"></li>
				<li data-menuanchor="Services"></li>
				<li data-menuanchor="Testimonials"></li>
				<li data-menuanchor="Portfolio"></li>
				<li data-menuanchor="Contact"></li>
				<li data-menuanchor="Blogs"></li>
			</ul>
			<!--Numbers-->
			<div class="vlt-fullpage-slider-numbers"></div>
		</div>
		<!--Footer-->
		<footer class="vlt-footer vlt-footer--fixed">
			<!--Copyright-->
			<div class="vlt-footer-copyright">
				<p>&copy; 2021 Copiright.<br>All rights reserved.</p>
			</div>
		</footer>
	</main>
	<!--Libs-->
	<script src="assets/vendors/jquery-3.5.1.min.js"></script>
	<script src="assets/scripts/vlt-plugins.min.js"></script>
	<script src="assets/scripts/vlt-helpers.js"></script>
	<script src="assets/scripts/vlt-controllers.min.js"></script>
	<script>
		$(document).ready(function(){
			idArray.forEach(blog => {
				$('#blog-' + blog.id).click(function(){
					window.location.href = "<?= site_url('Blogs') ?>/" + blog.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
				})
			})

			$('#contactForm').submit(function(event){
				event.preventDefault();
				$.ajax({
					url:"<?= base_url('Home/sendEmail') ?>",
					data:{
						name: $('#name').val(),
						email: $('#email').val(),
						message: $('#message').val()
					},
					type:"POST",
					beforeSend:function(){
						$('#submitButton').attr('disabled', true);
					},
					success:function(response){
						$('#submitButton').attr('disabled', false);
						if(response == 1){
							$('#contactForm').trigger("reset");
							var x = document.getElementById("snackbar");
							x.className = "show";
							setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
						} else {

						}
					}
				})
			})
		})
	</script>
</body>

</html>