<!DOCTYPE html>
<html class="no-js vlt-is--custom-cursor" lang="id">

<head>
	<meta charset="utf-8">
	<title>Xunny | Indonesian IT and Software Developer | Contact Us</title>
	<meta name="description" content="Kami adalah perusahaan programmer yang memiliki spesialisasi dalam mobile, melingkupi android dan iOS, dan web development. Dengan satu visi, untuk membantu mengembangkan UMKM di Indonesia, kami akan senantiasa memberikan anda produk custom dengan kualitas terbaik.">
	<meta name='robots' content='follow, index'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/root/favicon.png') ?>">
	<link rel="apple-touch-icon" href="<?= base_url('assets/img/root/AppleTouchIcon.png') ?>">
	<link rel="stylesheet" href="assets/css/framework/bootstrap.min.css">
	<link rel='stylesheet' href='assets/css/contact.main.css'>
	<meta name="author" content="Xunny.id">

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-XK1HVB7DEM"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-XK1HVB7DEM');
	</script>

	<meta property="og:url" content="<?= base_url() ?>Contact" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Xunny | IT Developer Indonesia | Contact Us" />
	<meta property="og:description" content="Kami adalah perusahaan programmer yang memiliki spesialisasi dalam mobile, melingkupi android dan iOS, dan web development. Dengan satu visi, untuk membantu mengembangkan UMKM di Indonesia, kami akan senantiasa memberikan anda produk custom dengan kualitas terbaik." />
	<meta property="og:image:secure_url" content="<?= base_url() ?>/assets/img/root/favicon.png" />
	<meta property="og:image:url" content="<?= base_url() ?>/assets/img/root/favicon.png" />
	<meta property="og:image" content="<?= base_url() ?>/assets/img/root/favicon.png" />
	<meta property="og:type" content="website" />
	<meta property="og:image:width" content="512" />
	<meta property="og:image:height" content="512" />
	<meta property="og:site_name" content="Xunny.id">
	<meta property="fb:app_id" content="393891865610" />
	<link href='https://xunny.id' rel='canonical'>
	<script>
		var idArray = [];
	</script>
</head>

<body>
	<nav class='nav navbar-light navbar-expand-lg justify-content-center' id='navbar'>
		<a class='navbar-brand' style='text-decoration:none' href='<?= base_url('/#Contact') ?>'>
			<img src='<?= base_url("assets/img/root/logo-white.webp") ?>' id='logoImage' alt='Xunny Blog Logo'>
		</a>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<h2 class="d-block text-white">Kontak</h2>
				<div class="vlt-gap-30--sm"></div>
				<p class='h4 d-block text-white'>Ada yang ingin anda tanyakan? Jangan sungkan untuk kontak kami!</p>
				<hr>
				<form id='contactForm' method='POST'>
					<label class='text-white'>Name</label>
					<input name='name' type='text' required id='name'>

					<label class='text-white'>Email</label>
					<input name='email' type='email' required id='email'>

					<label class='text-white'>Pesan</label>
					<textarea style='resize:none' name='message' rows='5' type='text' required id='message'></textarea>
					<br>

					<button id='submitButton' type='submit' class='vlt-btn'>Submit</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1 mt-5 mb-3">
				<p class='h4 d-block text-white'>Atau hubungi kami melalui</p>
				<a class='text-white' href='https://wa.me/6285290000241' target='_blank'>Whatsapp kami</a><br>
				<a class='text-white' href='mailto:hello@xunny.id' target='_blank'>Email kami</a><br>

				<div id='map-wrapper' class="w-100 mt-5"></div>
			</div>
		</div>
	</div>
	<div id="snackbar">Terima kasih telah menghubungi kami. Kami akan segera kontak anda kembali.</div>
</body>

</html>
<script src="assets/vendors/jquery-3.5.1.min.js"></script>
<script type='text/javascript'>
	document.addEventListener('DOMContentLoaded', function() {
		const width = document.getElementById('map-wrapper').offsetWidth;
		var iframe = document.createElement('iframe');
		iframe.style.display = "block";
		iframe.width = width;
		iframe.height = 450;
		iframe.style.border = 0;
		iframe.src = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.403566752782!2d107.6757853!3d-6.9084267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c4e6cfe24e3e907!2sXunny.id!5e0!3m2!1sid!2sid!4v1658033389279!5m2!1sid!2sid";
		document.getElementById('map-wrapper').appendChild(iframe);
	}, false);

	$(document).ready(function() {
		$('#contactForm').submit(function(event) {
			event.preventDefault();
			$.ajax({
				url: "<?= base_url('Home/sendEmail') ?>",
				data: {
					name: $('#name').val(),
					email: $('#email').val(),
					message: $('#message').val()
				},
				type: "POST",
				beforeSend: function() {
					$('#submitButton').attr('disabled', true);
				},
				success: function(response) {
					$('#submitButton').attr('disabled', false);
					if (response == 1) {
						$('#contactForm').trigger("reset");
						var x = document.getElementById("snackbar");
						x.className = "show";
						setTimeout(function() {
							x.className = x.className.replace("show", "");
						}, 3000);
					} else {

					}
				}
			})
		})
	});
</script>