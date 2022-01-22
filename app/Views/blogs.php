<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Xunny | Blogs</title>
        <meta name='robots' content='follow, index'>
        <link rel="icon" type="image/png" href="<?= base_url('assets/img/root/favicon.png') ?>">
        <link rel="apple-touch-icon" href="<?= base_url('assets/img/root/AppleTouchIcon.png') ?>">
	    <link rel="stylesheet" href="<?= base_url('assets/css/framework/bootstrap.min.css') ?>">
        <link rel='stylesheet' href='<?= base_url('assets/css/blog.main.css') ?>'>
        <meta name='keywords' content='Xunny Blog, Web Developer Blog, Blog, Programming Blog, App Developer Blog'>
        <meta name='description' content='Selamat datang di blog kami, Xunny Blog. Kami membuat blog edukatif mengenai pengembangan web dan aplikasi.'>
        <meta name="author" content="Xunny.id">
    </head>
    <body>
        <nav class='nav navbar-light navbar-expand-lg justify-content-center' id='navbar'>
            <a class='navbar-brand' style='text-decoration:none' href='<?= base_url('/#Blogs') ?>'>
                <img src='<?= base_url("assets/blog/Logo.webp") ?>' id='logoImage' alt='Xunny Blog Logo'>
            </a>
        </nav>
        <main>
            <script>
                preloadedIds = [];
            </script>
            <div class='container'>
                <div class='row justify-content-center' id='blogWrapper'>
                <?php foreach($blogs as $blog){
                    $tags       = explode(",", $blog['tags']);
                ?>
                    <script>
                        preloadedIds.push({
                            id: <?= $blog['id'] ?>,
                            title: "<?= $blog['title'] ?>"
                        });
                    </script>
                    <div 
                    class='col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12 d-flex align-items-stretch mb-3' 
                    id='blog-<?= $blog['id'] ?>'>
                        <div class='card w-100'>
                            <div class="card-img-top">
                                <img 
                                class="card-image" 
                                src="<?= base_url() ?>/assets/blog/<?= $blog['id'] ?>.webp" 
                                alt="<?= $blog['title'] ?>">
                            </div>
                            <div class='card-body'>
                                <div 
                                    id='blog-tag-<?= $blog['id'] ?>' 
                                    class='mb-3'>
                                    <?php foreach($tags as $tag){ ?>
                                        <span class='badge badge-pill badge-dark px-3 mr-2'>#&nbsp;<?= $tag ?></span>
                                    <?php } ?>
                                </div>
                                <h5 class='card-title'><?= $blog['title'] ?></h5>
                                <p class='h6 card-text mb-5'><?= $blog['subtitle'] ?></p>
                                <p class='card-date'><?= date('d M Y', strtotime($blog['created_date'])) ?> | <?= number_format(ceil($blog['words'] / 130), 0) ?> min read</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </main>
        <script src="<?= base_url('assets/vendors/jquery-3.5.1.min.js') ?>"></script>
        <script type='text/javascript'>
            var lastScrollTop;
            var pages = 2;
            var loading = false;
            const month = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"];

            preloadedIds.forEach(preloadedId => {
                $(`#blog-${preloadedId.id}`).click(function(){
                    window.location.href='<?= base_url('Blogs') ?>/' + preloadedId.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
                });
            })

            $(window).ready(function(){
                $(`#blog-${blog.id}`).click(function(){
                    window.location.href='<?= base_url('Blogs') ?>/' + blog.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
                });
            })

            $(window).scroll(function () {
                if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
                    fetchBlogPosts();
                }
            });

            function fetchBlogPosts(){
                if(!loading){
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
                                $('#blogWrapper').append(`<div class='col-xl-3 col-lg-4 col-md-6 col-sm-10 col-12 d-flex align-items-stretch mb-3' id='blog-${blog.id}'><div class='card w-100'><div class="card-img-top"><img class="card-image" src="<?= base_url() ?>/assets/blog/${blog.id}.webp" alt="${blog.title}"></div><div class='card-body'><div id='blog-tag-${blog.id}' class='mb-3'></div><h5 class='card-title'>${blog.title}</h5><p class='h6 card-text mb-5'>${blog.subtitle}</p><p class='card-date'>${dateString} | ${minutes} min read</p></div></div></div>`);

                                $(`#blog-${blog.id}`).click(function(){
                                    window.location.href='<?= base_url('Blogs') ?>/' + blog.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
                                });

                                var tags = blog.tags.split(',');

                                tags.forEach(tag => {
                                    $(`#blog-tag-${blog.id}`).append(`<span class='badge badge-pill badge-dark px-3 mr-2'>#&nbsp;${tag}</span>`);
                                })
                                
                            });
                        },
                        complete:function(){
                            pages++;
                            loading = false;
                        }
                    })
                }
            }

            $(window).on('scroll', function(event){
                var st = $(this).scrollTop();
                if (st > lastScrollTop){
                    $('#navbar').addClass('scaleDown');
                } else {
                    $('#navbar').removeClass('scaleDown');
                }
                lastScrollTop = st;
            })
        </script>
    </body>
</html>