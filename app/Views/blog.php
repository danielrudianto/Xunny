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
        <script src="<?= base_url('assets/vendors/popper.js') ?>"></script>
        <script src="<?= base_url('assets/vendors/bootstrap.min.js') ?>"></script>
        <meta name='keywords' content='<?= $header['keywords'] ?>'>
        <meta name='description' content='<?= $header['subtitle'] ?>'>
        <script>
            var idArray = [];
        </script>
        <style>
            #callToActionSection{
                background-color:#FFB423;
                border-radius:20px;
                padding:1rem;
                color:white;

            }

            #callToActionImage{
                width:50%;
                float:left;
            }
            
            #callToActionButton{
                background-color:white;
                border:none;
                border-radius:10px;
                padding:0.5rem 1.5rem;
                font-size:1rem;
                font-family:sans-serif;
                font-weight:bold;
                cursor:pointer;
                outline:none;
                position:relative;
                display:block;
                transform:none;
                margin-left:0;
                margin-right:0;
                margin-top:1rem;
            }

            #callToActionText{
                text-align:start;
            }

            @media screen and (max-width:576px){
                #callToActionImage{
                    width:100%;
                    float:none;
                }

                #callToActionText{
                    text-align:center;
                }

                #callToActionButton{
                    margin-left:50%;
                    transform:translateX(-50%);
                    margin-top:2rem;
                }
            } 
        </style>
    </head>
    <body>
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-xl-8 col-lg-10 col-12'>
                        <a style='text-decoration:none' href='<?= base_url('/Blogs') ?>'><img src='<?= base_url("assets/blog/Logo.webp") ?>' id='logoImage' alt='Xunny Blog Logo'></a>
						<article><?= $this->renderSection('content') ?></article>
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
                                data-toggle="modal" 
                                data-target="#callToActionModal"
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
        <div class="modal fade" id="callToActionModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Formulir Kontak</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <form id='contactForm'>
                  <div class="modal-body">
                    <label>Name</label>
                    <input type='text' class='formControl' name='name'>

                    <label>Email</label>
                    <input type='email' class='formControl' name='email'>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </form>

            </div>
          </div>
        </div>
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