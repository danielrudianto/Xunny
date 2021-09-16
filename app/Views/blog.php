<!DOCTYPE html>
<html lang='en'>
    <head>
		<title>Xunny Blog | <?= $header['title'] ?></title>
        <link rel="icon" type="image/png" href="<?= base_url('assets/img/root/favicon.png') ?>">
	    <link rel="stylesheet" href="<?= base_url('assets/css/framework/bootstrap.min.css') ?>">
        <link rel='stylesheet' href='<?= base_url('assets/css/blog.main.css') ?>'>
		<script src="<?= base_url('assets/vendors/jquery-3.5.1.min.js') ?>"></script>
        <meta name='keywords' content='<?= $header['keywords'] ?>'>
        <meta name='description' content='<?= $header['subtitle'] ?>'>
    </head>
    <body>
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-xl-10 col-12'>
                        <img src='<?= base_url("assets/blog/Logo.webp") ?>' id='logoImage' alt='Xunny Blog Logo'>
						<article><?= $this->renderSection('content') ?></article>
                    </div>
                </div>
                <div class='row justify-content-center' id='blogWrapper'></div>
            </div>
        </main>
    </body>
</html>