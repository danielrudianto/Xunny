<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Xunny | Blogs</title>
        <link rel="icon" type="image/png" href="<?= base_url('assets/img/root/favicon.png') ?>">
	    <link rel="stylesheet" href="<?= base_url('assets/css/framework/bootstrap.min.css') ?>">
        <link rel='stylesheet' href='<?= base_url('assets/css/blog.main.css') ?>'>
        <meta name='keywords' content='Xunny Blog, Web Developer Blog, Blog, Programming Blog, App Developer Blog'>
        <meta name='description' content='Selamat datang di blog kami. Kami membuat blog edukatif mengenai pengembangan web dan aplikasi.'
		<meta name="author" content="xunny.id">
    </head>
    <body>
        <main>
            <div class='container'>
                <div class='row'>
                    <div class='col-12'>
                    <a style='text-decoration:none' href='<?= base_url('/') ?>'><img src='<?= base_url("assets/blog/Logo.webp") ?>' id='logoImage' alt='Xunny Blog Logo'></a>
                        <h1 class='text-center d-none'>Blogs</h1>
                    </div>
                </div>
                <div class='row justify-content-center' id='blogWrapper'></div>
            </div>
        </main>
        <script src="<?= base_url('assets/vendors/jquery-3.5.1.min.js') ?>"></script>
        <script type='text/javascript'>
            var pages = 1;
            var loading = false;
            const month = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];

            $(document).ready(function(){
                $.ajax({
                    url:"<?= base_url('Blogs/getBlogs/') ?>/" + pages,
                    beforeSend:function(){
                        loading = true;
                    },
                    success:function(response){
                        var res = JSON.parse(response);
                        $.each(res.blogs, function(index, blog){
                            var date = new Date(blog.created_date);

                            var dateString = date.getDate() + " " + month[date.getMonth()] + " " + date.getFullYear();
                            var minutes     = Math.ceil(blog.words/130);
                            $('#blogWrapper').append(`<div class='col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12 d-flex align-items-stretch mb-3' id='blog-${blog.id}'><div class='card w-100'><img class="card-img-top" src="<?= base_url() ?>/assets/blog/${blog.id}.webp" alt="${blog.title}"><div class='card-body'><h5 class='card-title'>${blog.title}</h5><h6 class='card-text'>${blog.subtitle}</h6><p class='card-date'>${dateString} | ${minutes} min read</p></div></div></div>`);

                            $(`#blog-${blog.id}`).click(function(){
                                window.location.href='<?= base_url('Blogs') ?>/' + blog.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
                            })
                        });
                    }
                })
            })
        </script>
    </body>
</html>