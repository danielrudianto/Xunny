<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Xunny | Blogs</title>
        <link rel="icon" type="image/png" href="assets/img/root/favicon.png">
	    <link rel="stylesheet" href="assets/css/framework/bootstrap.min.css">
        <link rel='stylesheet' href='assets/css/blog.main.css'>
    </head>
    <body>
        <main>
            <div class='container'>
                <div class='row'>
                    <div class='col-12'>
                        <img src='assets/blog/Logo.webp' id='logoImage' alt='Xunny Blog Logo'>
                        <h1 class='text-center d-none'>Blogs</h1>
                    </div>
                </div>
                <div class='row' id='blogWrapper'></div>
            </div>
        </main>
        <script src="assets/vendors/jquery-3.5.1.min.js"></script>
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
                            $('#blogWrapper').append(`<div class='col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12' id='blog-${blog.id}'><div class='card w-100'><img class="card-img-top" src="assets/blog/${blog.id}.webp" alt="${blog.title}"><hr><div class='card-body'><h5 class='card-title'>${blog.title}</h5><h6 class='card-text'>${blog.subtitle}</h6><p class='card-date'>${dateString} | ${minutes} min read</p></div></div></div>`);

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