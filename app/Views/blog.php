<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>Xunny Blog | <?= $header['title'] ?></title>
        <link rel="icon" type="image/png" href="<?= base_url('assets/img/root/favicon.png') ?>">
	    <link rel="stylesheet" href="<?= base_url('assets/css/framework/bootstrap.min.css') ?>">
        <link rel='stylesheet' href='<?= base_url('assets/css/blog.main.css') ?>'>
		<script src="<?= base_url('assets/vendors/jquery-3.5.1.min.js') ?>"></script>
		<script src="<?= base_url('assets/vendors/bootstrap.min.js') ?>"></script>

        <meta name='keywords' content='<?= $header['keywords'] ?>'>
		<meta name="author" content="xunny.id">
        <meta name='description' content='<?= $header['subtitle'] ?>'>
        <meta name='robots' content='follow, index'>
        <meta name="author" content="Xunny.id">
        <meta name='image_src' href='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>'>

        <meta property="og:url"           content="<?= current_url() ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="<?= $header['title'] ?>" />
        <meta property="og:description"   content="<?= $header['subtitle'] ?>" />
        <meta property="og:image:secure_url"         itemprop="image"          content="<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>" />
        <meta property="og:type"          content="website" />
        <meta property="og:image:width"   content="1920" />
        <meta property="og:image:height"  content="1080" />
        <meta property="og:site_name"     content="San Roque 2014 Pollos">

        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=393891865610&autoLogAppEvents=1" nonce="Va1bX2LS"></script>
        <script>
            var idArray = [];
        </script>
    </head>
    <b:if cond='data:blog.metaDescription'>
    <meta expr:content='data:blog.metaDescription' name='og:description'/>
    <b:else/>
    <meta expr:content='data:post.snippet' name='og:description'/>
    </b:if>
    <body>
         <nav class='nav navbar-light navbar-expand-lg justify-content-center' id='navbar'>
            <a class='navbar-brand' style='text-decoration:none' href='<?= base_url('/Blogs') ?>'>
                <img src='<?= base_url("assets/blog/Logo.webp") ?>' id='logoImage' alt='Xunny Blog Logo'>
            </a>
        </nav>
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-xl-8 col-lg-10 col-12'>
						<article>
                            <h1 class='text-center'><?= $header['title'] ?></h1>
                            <img src='<?= base_url('assets/blog') . '/' . $header['id'] . '.webp' ?>' class='w-100' />
                            <h2 class='text-center h5'><?= $header['subtitle'] ?></h2>
                            <p class='text-center h5'><?= date("d M Y", strtotime($header['created_date'])) ?></p>
                            <?= $this->renderSection('share') ?>
                            <br><br>
                            <hr>
                            <br>
                            <?= $this->renderSection('content') ?>
                            <?= $this->renderSection('bottomShare') ?>
                        </article>
                    </div>
                    <div class='col-xl-8 col-lg-10 col-12'>
                        <br>
                        <?php if(count($featured) > 0){ ?>
                        <section id='callToActionSection'>
                            <img 
                                id='callToActionImage'
                                src='<?= base_url('assets/img/CallToAction.png') ?>' alt='Call to action logo'>
                            <h3 id='callToActionText'>Siap untuk mewujudkan ide anda menjadi aplikasi?</h3>
                            <button 
                                type='button'
                                onclick='openModal()'
                                id='callToActionButton'>Dapatkan Penawaran</button>
                        </section>
                        <section class='d-block mt-5'>
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
                        </section>
                        <?php } ?>
                    </div>
                </div>
                <div class='row justify-content-center' id='blogWrapper'></div>
            </div>
        </main>
        <aside 
        onclick='closeModal()'
        class="modal" 
        id="callToActionModal">
          <div 
          class="modalDialog"
          onclick='event.stopPropagation();'>
            <div class="modal-content" onclick='event.stopPropagation();'>
              <div class="modal-header" onclick='event.stopPropagation();'>
                <h4 class="modal-title">Formulir Kontak</h4>
              </div>

              <form
              id='contactForm' 
              onclick='event.stopPropagation();'>
                  <div class="modal-body">
                    <label>Nama</label>
                    <input 
                    type='text' 
                    class='formControl'
                    id='nameInput' 
                    name='name'>
                    <p class='errorText'>Input ini wajib diisi</p>

                    <label>Email</label>
                    <input 
                    type='email' 
                    class='formControl' 
                    id='emailInput'
                    name='email'>
                    <p class='errorText'>Input harus merupakan email</p>

                    <label>Pesan</label>
                    <textarea 
                    rows='5'
                    class='formControl' 
                    id='messageInput'
                    style='resize:none'></textarea>
                    <p class='errorText'>Input ini wajib diisi</p>
                  </div>

                  <div class="modal-footer">
                    <button class='submitFormButton' type='submit'>Submit</button>
                  </div>
                </form>

            </div>
          </div>
        </aside>
        <div id="snackbar">Terima kasih telah menghubungi kami. Kami akan segera kontak anda kembali.</div>
        <script>
            var lastScrollTop;

            $(document).ready(function(){
                idArray.forEach(blog => {
                    $('#blog-' + blog.id).click(function(){
                        window.location.href = "<?= base_url('Blogs') ?>/" + blog.title.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
                    })
                })

                $(".formControl").keyup(function(){
                    let type = $(this).attr('type');
                    if(type == "text" || type == undefined){
                        if($(this).val() == ""){
                            $(this).next('.errorText').show();
                        } else {
                            $(this).next('.errorText').hide();
                        }
                    } else {
                        if(isEmail($(this).val())){
                            $(this).next('.errorText').hide();
                        } else {
                            $(this).next('.errorText').show();
                        }
                    }
                })
            })

            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            function openModal(){
                $('.modal').fadeIn(300);
                $('.modalDialog').addClass("shown");
                document.body.style.overflow = 'hidden';
            }

            $('#contactForm').submit(function(event){
                event.preventDefault();

                var name        = $("#nameInput").val();
                var email       = $("#emailInput").val();
                var message     = $("#messageInput").val();
                
                if(name != "" && isEmail(email) && message != ""){
                    $.ajax({
                        url:"<?= base_url('Home/sendEmail') ?>",
                        data:{
                            name: name,
                            email: email,
                            message: message
                        },
                        type:"POST",
                        beforeSend:function(){
                            $('.submitFormButton').attr('disabled', true);
                        },
                        success:function(response){
                            $('.submitFormButton').attr('disabled', false);
                            if(response == 1){
                                $('#contactForm').trigger("reset");
                                closeModal();

                                var x = document.getElementById("snackbar");
                                x.className = "show";
                                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                            } else {
                                
                            }
                        }
                    })
                }
            });

            function closeModal(){
                $('.modalDialog').removeClass('shown');
                $('.modalDialog').addClass('hidden');

                setTimeout(function(){
                    $('.modal').fadeOut(300);
                }, 300);

                setTimeout(function(){
                    document.body.style.overflow = 'auto';
                }, 600)
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