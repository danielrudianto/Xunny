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
        <script>
            var idArray = [];
        </script>
    </head>
    <body>
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-xl-10 col-12'>
                        <a style='text-decoration:none' href='<?= base_url('/Blogs') ?>'><img src='<?= base_url("assets/blog/Logo.webp") ?>' id='logoImage' alt='Xunny Blog Logo'></a>
						<article><?= $this->renderSection('content') ?></article>
                    </div>
                    <div class='col-xl-10 col-12'>
                        <br>
                        <h3>Artikel lain yang mungkin anda suka.</h3>
                        <div class='row'>
                            <?php foreach($featured as $feature){ ?>
                                <div class='col-xl-6 col-lg-6 col-md-6 col-sm-10 col-12 d-flex align-items-stretch mb-3' id='blog-<?= $feature['id'] ?>'>
                                    <div class='card w-100'>
                                        <img class="card-img-top" src="<?= base_url() ?>/assets/blog/<?= $feature['id'] ?>.webp" alt="<?= $feature['title'] ?>">
                                        <div class='card-body'>
                                            <h5 class='card-title'><?= $feature['title'] ?></h5>
                                            <h6 class='card-text'><?= $feature['subtitle'] ?></h6>
                                            <p class='card-date'><?= ceil($feature['words'] / 130) ?> min. read</p>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    idArray.push({
                                        id: <?= $feature['id'] ?>,
                                        title: "<?= $feature['title'] ?>"
                                    });
                                </script>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class='row justify-content-center' id='blogWrapper'></div>
            </div>
        </main>
        <script>
            $(document).ready(function(){
                idArray.forEach(blog => {
                    $('#blog-' + blog.id).click(function(){
                        window.location.href = "<?= base_url('Blogs') ?>/" + blog.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
                    })
                })
            })
        </script>
    </body>
</html>